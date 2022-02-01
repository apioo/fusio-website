<?php

namespace App\Website\Blog;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Environment\HttpResponse;

class Feed extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        return new HttpResponse(
            200,
            ['Content-Type' => 'application/atom+xml'],
            file_get_contents($this->config['blog_file'])
        );
    }
}
