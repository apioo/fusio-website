<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Environment\HttpContextInterface;

class Platform extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/platform')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Platform',
            'description' => 'An overview of the core entities and unique concepts that form the foundation of the Fusio API management platform.',
            'keywords' => '',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/platform.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
