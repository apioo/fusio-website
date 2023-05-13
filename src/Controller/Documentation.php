<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Http\Exception\MovedPermanentlyException;

class Documentation extends ControllerAbstract
{
    #[Get]
    #[Path('/documentation')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException('https://docs.fusio-project.org/');
    }
}
