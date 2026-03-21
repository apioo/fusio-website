<?php

namespace App\Controller;

use App\Table;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Record\RecordInterface;

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
        $fusioAdapters = $this->adapterTable->findIndexEntriesFusio();
        $communityAdapters = $this->adapterTable->findIndexEntriesCommunity();

        $fusioAdapters = array_map($this->build(...), $fusioAdapters);
        $communityAdapters = array_map($this->build(...), $communityAdapters);

        $data = [
            'title' => 'API Adapters | Connect Data Sources & Services to Fusio',
            'description' => 'Discover official and community-driven Fusio adapters. Easily connect your API to SQL, NoSQL, and 3rd-party services to automate data workflows.',
            'keywords' => 'API Adapters, Database to REST, Fusio Extensions, SQL API Connector, NoSQL Integration, API Middleware, Custom Data Sources',
            'headline' => 'Adapter',
            'tagline' => 'Connect any data source. Browse official and community adapters for SQL, NoSQL, and 3rd-party services.',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'fusio' => $fusioAdapters,
            'community' => $communityAdapters,
        ];

        $templateFile = __DIR__ . '/../../resources/template/adapter.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    private function build(Table\Generated\AdapterRow $row): RecordInterface
    {
        $parts = explode('/', $row->getName());
        $vendor = $parts[0] ?? null;
        $name = $parts[1] ?? null;

        if (empty($name)) {
            $name = $vendor;
        }

        $name = str_replace(['fusio-adapter-', 'adapter-'], '', $name);

        $row = $row->toRecord();
        $row['icon'] = strtoupper(substr($name, 0, 2));
        return $row;
    }
}
