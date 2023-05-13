<?php

namespace App\Controller\Documentation;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Http\Exception\MovedPermanentlyException;

class PHP extends ControllerAbstract
{
    #[Get]
    #[Path('/documentation/php')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException('https://docs.fusio-project.org/docs/concepts/php_api/');
    }
}
