<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Exception\MovedPermanentlyException;

class Tools extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/tools')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException($this->reverseRouter->getUrl([Developers::class, 'show']));
    }
}
