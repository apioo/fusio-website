<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Environment\HttpContextInterface;

class Demo extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/demo')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Demo | Fusio',
            'description' => 'Experience Fusio firsthand by exploring our hosted demo. Access the API, backend, developer portal, and ReDoc to discover what Fusio can do.',
            'keywords' => 'Fusio demo, open-source API management, Fusio API, Fusio backend, Fusio developer portal, Fusio ReDoc, API management demo, Fusio features, Fusio exploration',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/demo.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
