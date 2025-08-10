<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Sdk extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/sdk')]
    public function show(): mixed
    {
        $data = [
            'title' => 'SDK | Fusio',
            'description' => 'Access Fusio SDKs to seamlessly integrate your applications with the Fusio API. Available in C#, Go, Java, JavaScript, PHP, Python, and frameworks like Angular, along with tools for Electron and VSCode.',
            'keywords' => 'Fusio SDK, API SDKs, C# SDK, Go SDK, Java SDK, JavaScript SDK, PHP SDK, Python SDK, Angular SDK, Electron SDK, VSCode SDK, Fusio API integration, SDKgen, API client libraries, Fusio backend SDK, Fusio frontend SDK, open-source SDKs, Fusio tools',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/sdk.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
