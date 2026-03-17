<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Integration extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/integration')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Integration',
            'description' => 'Explore reference implementations and boilerplate projects. These samples demonstrate how to authenticate, consume, and interact with the Fusio API across different ecosystems.',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/integration.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
