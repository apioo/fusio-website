<?php

namespace App\Controller;

use App\Table;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Exception\MovedPermanentlyException;

class Download extends ControllerAbstract
{
    private Table\Release $releaseTable;
    private ReverseRouter $reverseRouter;

    public function __construct(Table\Release $releaseTable, ReverseRouter $reverseRouter)
    {
        $this->releaseTable = $releaseTable;
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/download')]
    public function show(): mixed
    {
        throw new MovedPermanentlyException($this->reverseRouter->getUrl([Developers::class, 'show']));
    }
}
