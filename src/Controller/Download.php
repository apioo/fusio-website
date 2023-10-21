<?php

namespace App\Controller;

use App\Table;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\InternalServerErrorException;
use PSX\Sql\TableManagerInterface;

class Download extends ControllerAbstract
{
    private Table\Release $releaseTable;
    private ReverseRouter $reverseRouter;

    public function __construct(Table\Release $releaseTable, ReverseRouter $reverseRouter)
    {
        $this->releaseTable = $releaseTable;
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/download')]
    public function show(): mixed
    {
        $release = $this->releaseTable->findLatestRelease();
        if (empty($release)) {
            throw new InternalServerErrorException('Could not find latest release');
        }

        $data = [
            'title' => 'Download | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'tagName' => $release->getTagName(),
            'htmlUrl' => $release->getHtmlUrl(),
            'assetSize' => $release->getAssetSize(),
            'assetName' => $release->getAssetName(),
            'publishedAt' => $release->getPublishedAt()->toDateTime()->format('Y-m-d'),
        ];

        $templateFile = __DIR__ . '/../../resources/template/download.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
