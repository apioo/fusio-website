<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Demo extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/demo')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Live API Sandbox | Interactive Fusio Demo & Developer Portal',
            'description' => 'Test drive Fusio in a fully hosted sandbox. Explore the management interface, the developer portal, and the API engine in real-time with no installation required.',
            'keywords' => 'Live API Demo, Fusio Sandbox, Interactive API Management, Test Drive Fusio, API Portal Demo, Open Source API Gateway Demo, Try Fusio Online',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Demo',
            'tagline' => 'Explore a fully hosted Fusio instance. Test the management interface, the developer portal, and the API engine in real-time.',
        ];

        $templateFile = __DIR__ . '/../../resources/template/demo.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
