<?php

namespace App\Console;

use App\Table\Release;
use PSX\Sql\Sql;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowReleaseCommand extends Command
{
    private Release $releaseTable;

    public function __construct(Release $releaseTable)
    {
        parent::__construct();

        $this->releaseTable = $releaseTable;
    }

    protected function configure()
    {
        $this
            ->setName('app:show_release')
            ->setDescription('Shows all releases from the sqlite database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entries = $this->releaseTable->findAll(sortBy: 'publishedAt', sortOrder: Sql::SORT_DESC);
        $rows    = [];

        foreach ($entries as $entry) {
            $rows[] = [
                $entry['id'],
                $entry['tagName'],
                $entry['publishedAt']->format('Y-m-d H:i:s')
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
