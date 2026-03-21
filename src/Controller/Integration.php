<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Integration extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/integration')]
    public function show(): mixed
    {
        $data = [
            'title' => 'API Integrations | Reference Implementations & Boilerplates',
            'description' => 'Accelerate development with Fusio integration samples. Explore boilerplate projects for authentication, API consumption, and cross-ecosystem interaction.',
            'keywords' => 'API Integration Samples, Fusio Boilerplate, API Authentication Example, REST API Reference, GitHub API Starter, Fusio Integration Guide',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Integration',
            'tagline' => 'Build faster with reference implementations and code samples for authentication and API consumption.',
        ];

        $templateFile = __DIR__ . '/../../resources/template/integration.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
