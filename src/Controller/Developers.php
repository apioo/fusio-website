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
            'title' => 'Developer Hub | Docs, Installation & SDK Generation',
            'description' => 'The definitive guide for Fusio developers. Access installation docs, multi-language SDKs, and API specifications to build, deploy, and scale your API products in minutes.',
            'keywords' => 'Fusio Developer Documentation, API Management Installation, PHP API Framework, Deploy API Gateway, Multi-language API SDKs, API Specification Tools, Fusio Tutorial, Serverless API Deployment',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Developers',
            'tagline' => 'Start building with Fusio. Access installation guides, multi-language SDKs, and full API specifications.',
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
