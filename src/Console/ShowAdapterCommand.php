<?php

namespace App\Console;

use App\Table\Adapter;
use App\Table\Generated\AdapterTable;
use App\Table\Release;
use PSX\Sql\Sql;
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

    protected function configure()
    {
        $this
            ->setName('app:show_adapter')
            ->setDescription('Shows all adapter from the sqlite database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entries = $this->adapterTable->findAll(sortBy: AdapterTable::COLUMN_UPDATEDATE, sortOrder: Sql::SORT_DESC);
        $rows    = [];

        foreach ($entries as $entry) {
            $rows[] = [
                $entry[AdapterTable::COLUMN_NAME],
                $entry[AdapterTable::COLUMN_DESCRIPTION],
                $entry[AdapterTable::COLUMN_UPDATEDATE]->format('Y-m-d H:i:s')
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
