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
            'title' => 'Multi-Language Workers | Polyglot API Execution Runtimes',
            'description' => 'Execute business logic in your preferred language. Fusio Workers support Javascript, Python, PHP, and more, while maintaining a unified API contract.',
            'keywords' => 'API Worker, Polyglot Backend, Serverless Runtimes, Fusio Worker, Multi-language API, Python API Logic, Javascript API Execution',
            'headline' => 'Worker',
            'tagline' => 'Execute logic in any language. Run your business code in Javascript, Python, or PHP via unified runtimes.',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/worker.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
