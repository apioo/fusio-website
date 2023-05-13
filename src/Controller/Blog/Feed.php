<?php

namespace App\Controller\Blog;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Config\ConfigInterface;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Environment\HttpResponse;

class Feed extends ControllerAbstract
{
    private ConfigInterface $config;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    #[Get]
    #[Path('/blog/feed')]
    public function show(): mixed
    {
        return new HttpResponse(
            200,
            ['Content-Type' => 'application/atom+xml'],
            file_get_contents($this->config->get('blog_file'))
        );
    }
}
