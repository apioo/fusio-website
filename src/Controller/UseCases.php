<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class UseCases extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/use-cases')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Use-Cases | Fusio',
            'description' => 'Explore real-world use cases of Fusio, the open-source API & AI management platform. Discover how businesses build, manage, and scale powerful APIs effortlessly.',
            'keywords' => 'Fusio, Use-Cases, API management, Open-Source, API management platform, API use cases, Fusio API examples, Open-Source API Gateway, Fusio API solutions',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/use_cases.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
