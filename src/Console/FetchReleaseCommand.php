<?php

namespace App\Console;

use DateTime;
use PSX\Framework\Config\Config;
use PSX\Http\Client\ClientInterface;
use PSX\Http\Client\GetRequest;
use PSX\Sql\TableManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FetchReleaseCommand extends Command
{
    protected TableManagerInterface $tableManager;
    protected ClientInterface $httpClient;
    protected Config $config;

    public function __construct(TableManagerInterface $tableManager, ClientInterface $httpClient, Config $config)
    {
        parent::__construct();

        $this->tableManager = $tableManager;
        $this->httpClient = $httpClient;
        $this->config = $config;
    }

    protected function configure()
    {
        $this
            ->setName('website:fetch_release')
            ->setDescription('Fetches the latest release from GitHub');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $table    = $this->tableManager->getTable('Fusio\Website\Table\Release');
        $url      = sprintf('%s/repos/%s/%s/releases', $this->config['git_api'], $this->config['git_owner'], $this->config['git_repo']);
        $request  = new GetRequest($url, [
            'Accept'     => 'application/vnd.github.v3+json',
            'User-Agent' => 'PSX-Website-Updater (https://github.com/k42b3)',
        ]);
        $response = $this->httpClient->request($request);

        if ($response->getStatusCode() == 200) {
            $count    = 0;
            $releases = Json::decode((string) $response->getBody());

            foreach ($releases as $release) {
                if ($release['draft'] === false) {
                    $row = $table->getOneById($release['id']);

                    if (!$row instanceof RecordInterface) {
                        $asset = $this->getAsset($release);

                        $table->create([
                            'id'          => $release['id'],
                            'tagName'     => $release['tag_name'],
                            'htmlUrl'     => $release['html_url'],
                            'publishedAt' => new DateTime($release['published_at']),
                            'authorName'  => $release['author']['login'],
                            'authorUri'   => $release['author']['html_url'],
                            'body'        => $release['body'],
                            'assetName'   => isset($asset['name']) ? $asset['name'] : null,
                            'assetUrl'    => isset($asset['browser_download_url']) ? $asset['browser_download_url'] : null,
                            'assetSize'   => isset($asset['size']) ? $asset['size'] : null,
                            'assetMime'   => isset($asset['content_type']) ? $asset['content_type'] : null,
                        ]);

                        $count++;
                    }
                }
            }

            $output->writeln(sprintf('Inserted %s release/s', $count));
        } else {
            $output->writeln(sprintf('Received an status code %s', $response->getStatusCode()));
        }
    }

    protected function getAsset(array $release)
    {
        if (isset($release['assets']) && is_array($release['assets'])) {
            $asset = current($release['assets']);

            if (isset($asset['state']) && $asset['state'] == 'uploaded') {
                return $asset;
            }
        }

        return null;
    }
}
