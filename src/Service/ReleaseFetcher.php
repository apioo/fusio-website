<?php

namespace App\Service;

use App\Table;
use App\Table\Generated\ReleaseRow;
use PSX\DateTime\LocalDateTime;
use PSX\Framework\Config\ConfigInterface;
use PSX\Http\Client\ClientInterface;
use PSX\Http\Client\GetRequest;
use PSX\Json\Parser;

class ReleaseFetcher
{
    private const USER_AGENT = 'Fusio-Updater (https://www.fusio-project.org)';

    private Table\Release $releaseTable;
    private ConfigInterface $config;
    private ClientInterface $httpClient;

    public function __construct(Table\Release $releaseTable, ConfigInterface $config, ClientInterface $httpClient)
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

            $row = new ReleaseRow();
            $row->setId($release['id']);
            $row->setTagName($release['tag_name']);
            $row->setHtmlUrl($release['html_url']);
            $row->setPublishedAt(LocalDateTime::parse($release['published_at']));
            $row->setAuthorName($release['author']['html_url']);
            $row->setAuthorUri($release['author']['html_url']);
            $row->setBody($release['body']);
            $row->setAssetName($asset['name'] ?? throw new \RuntimeException('Provided no asset name'));
            $row->setAssetUrl($asset['browser_download_url'] ?? throw new \RuntimeException('Provided no asset url'));
            $row->setAssetSize($asset['size'] ?? throw new \RuntimeException('Provided no asset size'));
            $row->setAssetMime($asset['content_type'] ?? throw new \RuntimeException('Provided no asset mime'));
            $this->releaseTable->create($row);

            yield 'Added release ' . $release['tag_name'];
        }
    }

    private function getAsset(array $release): ?array
    {
        if (isset($release['assets']) && is_array($release['assets'])) {
            $asset = current($release['assets']);

            if (is_array($asset) && isset($asset['state']) && $asset['state'] == 'uploaded') {
                return $asset;
            }
        }

        return null;
    }

    private function fetchReleases(): array
    {
        $url      = sprintf('%s/repos/%s/%s/releases', $this->config->get('git_api'), $this->config->get('git_owner'), $this->config->get('git_repo'));
        $request  = new GetRequest($url, [
            'Accept'     => 'application/vnd.github.v3+json',
            'User-Agent' => self::USER_AGENT,
        ]);
        $response = $this->httpClient->request($request);

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('Could not fetch releases, got status code: ' . $response->getStatusCode());
        }

        $releases = Parser::decode((string) $response->getBody(), true);
        if (!is_array($releases)) {
            throw new \RuntimeException('Could not fetch releases');
        }

        return $releases;
    }
}
