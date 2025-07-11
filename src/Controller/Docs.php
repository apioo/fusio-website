<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Http\Exception\MovedPermanentlyException;

class Docs extends ControllerAbstract
{
    #[Get]
    #[Path('/docs')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException('https://docs.fusio-project.org/');
    }
}
