<?php

namespace App\Command;

use App\Table\Generated\ReleaseTable;
use App\Table\Release;
use PSX\Sql\OrderBy;
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

    protected function configure(): void
    {
        $this
            ->setName('app:show_release')
            ->setDescription('Shows all releases from the sqlite database');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $entries = $this->releaseTable->findAll(sortBy: ReleaseTable::COLUMN_PUBLISHED_AT, sortOrder: OrderBy::DESC);
        $rows    = [];

        foreach ($entries as $entry) {
            $rows[] = [
                $entry->getId(),
                $entry->getTagName(),
                $entry->getPublishedAt()->toString()
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
