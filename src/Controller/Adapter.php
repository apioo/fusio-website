<?php

namespace App\Controller;

use App\Table;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Adapter extends ControllerAbstract
{
    private Table\Adapter $adapterTable;
    private ReverseRouter $reverseRouter;

    public function __construct(Table\Adapter $adapterTable, ReverseRouter $reverseRouter)
    {
        $this->adapterTable = $adapterTable;
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/adapter')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Adapter | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'fusio' => $this->adapterTable->findIndexEntriesFusio(),
            'community' => $this->adapterTable->findIndexEntriesCommunity(),
        ];

        $templateFile = __DIR__ . '/../../resources/template/adapter.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
