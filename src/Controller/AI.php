<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Exception\MovedPermanentlyException;

class AI extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/ai')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException($this->reverseRouter->getUrl([Platform::class, 'show']));
    }
}
