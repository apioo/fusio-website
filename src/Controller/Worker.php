<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Worker extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/worker')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Worker',
            'description' => 'The execution runtimes for your business logic. Fusio workers allow you to implement actions in your preferred language while maintaining a unified API contract.',
            'keywords' => 'Fusio Worker, API actions, Java worker, JavaScript worker, PHP worker, Python worker, Fusio API, custom actions, Fusio integrations, Fusio backend',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/worker.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
