<?php

namespace App\Controller;

use App\Table;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Exception\InternalServerErrorException;

class Developers extends ControllerAbstract
{
    public function __construct(private Table\Release $releaseTable, private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/developers')]
    public function show(): mixed
    {
        $release = $this->releaseTable->findLatestRelease();
        if (empty($release)) {
            throw new InternalServerErrorException('Could not find latest release');
        }

        $data = [
            'title' => 'Developers',
            'description' => 'Everything you need to build, deploy, and scale with Fusio. From core installation to multi-language SDKs and API specifications.',
            'keywords' => '',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'tagName' => $release->getTagName(),
            'htmlUrl' => $release->getHtmlUrl(),
            'assetSize' => $release->getAssetSize(),
            'assetName' => $release->getAssetName(),
            'publishedAt' => $release->getPublishedAt()->toDateTime()->format('Y-m-d'),
        ];

        $templateFile = __DIR__ . '/../../resources/template/developers.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
