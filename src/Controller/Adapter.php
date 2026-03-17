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
            'title' => 'Adapter',
            'description' => 'Extend Fusio by connecting to different data sources or enhancing system capabilities. Browse our ecosystem of official and community-driven adapters.',
            'keywords' => 'Fusio adapters, API integrations, MongoDB adapter, AWS adapter, Redis adapter, Fusio extensions, Fusio Composer, Fusio API connections, Fusio services',
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
