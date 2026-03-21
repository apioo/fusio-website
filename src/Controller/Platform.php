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
            'title' => 'Platform | Open Source API Management & Backend Logic Engine',
            'description' => 'Explore the core architecture of Fusio. Learn how our open-source API management platform uses Actions, Schemas, and Connections to automate your API lifecycle and backend logic.',
            'keywords' => 'Open Source API Management, API Lifecycle Automation, Self-hosted API Gateway, Backend API Logic Engine, Fusio Architecture, API Governance Platform, REST API Construction Kit',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Platform',
            'tagline' => 'An overview of the core entities and unique concepts that form the foundation of the Fusio API management platform.',
        ];

        $templateFile = __DIR__ . '/../../resources/template/platform.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
