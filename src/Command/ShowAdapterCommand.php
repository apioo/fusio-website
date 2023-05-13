<?php

namespace App\Command;

use App\Table\Adapter;
use App\Table\Generated\AdapterTable;
use PSX\Sql\OrderBy;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowAdapterCommand extends Command
{
    private Adapter $adapterTable;

    public function __construct(Adapter $adapterTable)
    {
        parent::__construct();

        $this->adapterTable = $adapterTable;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:show_adapter')
            ->setDescription('Shows all adapter from the sqlite database');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $entries = $this->adapterTable->findAll(sortBy: AdapterTable::COLUMN_UPDATE_DATE, sortOrder: OrderBy::DESC);
        $rows    = [];

        foreach ($entries as $entry) {
            $rows[] = [
                $entry->getName(),
                $entry->getDescription(),
                $entry->getUpdateDate()->toString()
            ];
        }

        $table = new Table($output);
        $table
            ->setStyle('compact')
            ->setRows($rows);

        $table->render();

        return 0;
    }
}
