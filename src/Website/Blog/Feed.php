<?php

namespace App\Website\Blog;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Feed extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $this->setHeader('Content-Type', 'application/atom+xml');
        $this->setBody(new TempStream(fopen($this->config['blog_file'], 'r')));
    }

}
