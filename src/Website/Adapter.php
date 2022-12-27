<?php

namespace App\Website;

use App\Table;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Sql\TableManagerInterface;

class Adapter extends ViewAbstract
{
    #[Inject]
    private TableManagerInterface $tableManager;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $table = $this->tableManager->getTable(Table\Adapter::class);

        return $this->render(__DIR__ . '/resource/adapter.php', [
            'canonical' => $this->reverseRouter->getUrl(self::class),
            'fusio'     => $table->findIndexEntriesFusio(),
            'community' => $table->findIndexEntriesCommunity(),
        ]);
    }
}
