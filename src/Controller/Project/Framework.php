<?php

namespace App\Controller\Project;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Framework extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/framework')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Framework',
            'description' => 'Use Fusio as a PHP framework. Keep operations, schemas and scopes as version controlled files and write your business logic in plain PHP classes.',
            'keywords' => 'Fusio Framework, PHP API Framework, API as Code, Starter Repository, TypeSchema, Doctrine Migrations, REST API',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Framework',
            'tagline' => 'Starter repository designed to help you leverage Fusio as a professional PHP framework foundation.',
        ];

        $templateFile = __DIR__ . '/../../../resources/template/project/framework.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
