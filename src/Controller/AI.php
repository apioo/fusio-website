<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class AI extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/ai')]
    public function show(): mixed
    {
        $data = [
            'title' => 'AI-Powered API Development | Fusio',
            'description' => 'Build APIs with AI in Fusio. Connect multiple LLM providers, generate endpoints with natural language, and stay vendor-independent.',
            'keywords' => 'ai api, ai-powered api, api development with ai, llm api integration, ai agents, api management platform, fusio ai, build apis with ai, natural language api, ai backend, llm integration, api automation, ai workflow automation, no vendor lock-in ai, ai api platform',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/ai.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
