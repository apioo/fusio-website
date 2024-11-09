<?php

namespace App\Controller\Blog;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;

class Detail extends \Chriskapp\Blog\Controller\Detail
{
    #[Get]
    #[Path('/blog/post/:title')]
    public function show(string $title): mixed
    {
        return parent::show($title);
    }
}
