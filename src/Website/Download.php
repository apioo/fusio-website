<?php

namespace App\Website;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Download extends ViewAbstract
{
    /**
     * @Inject
     * @var \PSX\Sql\TableManager
     */
    protected $tableManager;

    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/resource/download.php', []);
    }

    public function doIndex()
    {
        /*
        $release = $this->tableManager->getTable('Fusio\Website\Table\Release')->getLatestRelease();

        $this->setBody([
            'links' => [[
                'rel'         => 'download',
                'title'       => $release['tagName'],
                'href'        => $release['htmlUrl'],
                'size'        => $release['assetSize'],
                'releaseDate' => $release['publishedAt']->format('Y-m-d'),
                'description' => 'Latest repository tag',
            ]]
        ]);
        */
    }
}
