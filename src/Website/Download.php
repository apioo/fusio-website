<?php

namespace App\Website;

use App\Table\Release;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\InternalServerErrorException;
use PSX\Sql\TableManagerInterface;

class Download extends ViewAbstract
{
    #[Inject]
    private TableManagerInterface $tableManager;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $release = $this->tableManager->getTable(Release::class)->findLatestRelease();
        if (empty($release)) {
            throw new InternalServerErrorException('Could not find latest release');
        }

        return $this->render(__DIR__ . '/resource/download.php', [
            'canonical'   => $this->reverseRouter->getUrl(self::class),
            'tagName'     => $release['tagName'],
            'htmlUrl'     => $release['htmlUrl'],
            'assetSize'   => $release['assetSize'],
            'assetName'   => $release['assetName'],
            'publishedAt' => $release['publishedAt']->format('Y-m-d'),
        ]);
    }
}
