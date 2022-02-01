<?php

namespace App\Service;

use App\Table\Generated\ReleaseRow;
use App\Table\Release;
use PSX\Framework\Config\Config;
use PSX\Http\Client\ClientInterface;
use PSX\Http\Client\GetRequest;
use PSX\Json\Parser;

class ReleaseFetcher
{
    private const USER_AGENT = 'Fusio-Updater (https://www.fusio-project.org)';

    private Release $releaseTable;
    private Config $config;
    private ClientInterface $httpClient;

    public function __construct(Release $releaseTable, Config $config, ClientInterface $httpClient)
    {
        $this->releaseTable = $releaseTable;
        $this->config = $config;
        $this->httpClient = $httpClient;
    }

    public function fetchAll(): \Generator
    {
        $releases = $this->fetchReleases();
        foreach ($releases as $release) {
            if ($release['draft'] === true) {
                continue;
            }

            $row = $this->releaseTable->findOneById($release['id']);
            if ($row instanceof ReleaseRow) {
                continue;
            }

            $asset = $this->getAsset($release);
            if (empty($asset)) {
                continue;
            }

            $this->releaseTable->create(new ReleaseRow([
                'id'          => $release['id'],
                'tagName'     => $release['tag_name'],
                'htmlUrl'     => $release['html_url'],
                'publishedAt' => new \DateTime($release['published_at']),
                'authorName'  => $release['author']['login'],
                'authorUri'   => $release['author']['html_url'],
                'body'        => $release['body'],
                'assetName'   => $asset['name'] ?? null,
                'assetUrl'    => $asset['browser_download_url'] ?? null,
                'assetSize'   => $asset['size'] ?? null,
                'assetMime'   => $asset['content_type'] ?? null,
            ]));

            yield 'Added release ' . $release['tag_name'];
        }
    }

    private function getAsset(array $release): ?array
    {
        if (isset($release['assets']) && is_array($release['assets'])) {
            $asset = current($release['assets']);

            if (isset($asset['state']) && $asset['state'] == 'uploaded') {
                return $asset;
            }
        }

        return null;
    }

    private function fetchReleases(): array
    {
        $url      = sprintf('%s/repos/%s/%s/releases', $this->config['git_api'], $this->config['git_owner'], $this->config['git_repo']);
        $request  = new GetRequest($url, [
            'Accept'     => 'application/vnd.github.v3+json',
            'User-Agent' => self::USER_AGENT,
        ]);
        $response = $this->httpClient->request($request);

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('Could not fetch releases');
        }

        $releases = Parser::decode((string) $response->getBody(), true);
        if (!is_array($releases)) {
            throw new \RuntimeException('Could not fetch releases');
        }

        return $releases;
    }
}
