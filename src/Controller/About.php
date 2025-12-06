<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class About extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/about')]
    public function show(): mixed
    {
        $data = [
            'title' => 'About | Fusio',
            'description' => 'Fusio is an open-source API management framework providing operations, schemas, actions, events, and automation to help developers build scalable REST APIs and backends.',
            'keywords' => 'Fusio, API Gateway, Developer Portal, API Builder, Monetization, Rate Limiting, SDK Generation, OpenAPI Generation, SPA Backend, Webhook Support, OAuth2 Authorization, MCP Integration',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/about.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
