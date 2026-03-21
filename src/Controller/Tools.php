<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Exception\MovedPermanentlyException;

class Tools extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/tools')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException($this->reverseRouter->getUrl([Developers::class, 'show']));
    }
}
