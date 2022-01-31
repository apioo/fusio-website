<?php

namespace App\Console;

use PSX\Sql\Sql;
use PSX\Sql\TableManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowReleaseCommand extends Command
{
    private TableManagerInterface $tableManager;

    public function __construct(TableManagerInterface $tableManager)
    {
        parent::__construct();

        $this->tableManager = $tableManager;
    }

    protected function configure()
    {
        $this
            ->setName('website:show_release')
            ->setDescription('Shows all releases from the sqlite database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entries = $this->tableManager->getTable('Fusio\Website\Table\Release')->getAll(null, null, 'publishedAt', Sql::SORT_DESC);
        $rows    = array();

        foreach ($entries as $entry) {
            $rows[] = array($entry['id'], $entry['tagName'], $entry['publishedAt']->format('Y-m-d H:i:s'));
        }

        $table = new Table($output);
        $table
            ->setStyle('compact')
            ->setRows($rows);

        $table->render();
    }
}
