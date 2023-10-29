<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Http\Exception\MovedPermanentlyException;

class Forum extends ControllerAbstract
{
    #[Get]
    #[Path('/forum')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException('https://github.com/apioo/fusio/issues');
    }
}
