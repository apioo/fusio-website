<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Concept extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/concept')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Concept | Fusio',
            'description' => 'Fusio is an open-source API & AI management platform built for developers. Discover our mission to make creating, managing, and scaling APIs effortless.',
            'keywords' => 'Fusio, API Gateway, Developer Portal, API Builder, Monetization, Rate Limiting, SDK Generation, OpenAPI Generation, SPA Backend, Webhook Support, OAuth2 Authorization, MCP Integration',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/concept.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
