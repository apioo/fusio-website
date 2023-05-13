<?php

namespace App\Command;

use App\Table\Blog;
use App\Table\Generated\BlogTable;
use PSX\Sql\OrderBy;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowBlogCommand extends Command
{
    private Blog $blogTable;

    public function __construct(Blog $blogTable)
    {
        parent::__construct();

        $this->blogTable = $blogTable;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:show_blog')
            ->setDescription('Shows all entries from the sqlite database');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $entries = $this->blogTable->findAll(sortBy: BlogTable::COLUMN_UPDATED, sortOrder: OrderBy::DESC);
        $rows    = [];

        foreach ($entries as $entry) {
            $rows[] = [
                $entry->getId(),
                $entry->getTitle(),
                $entry->getUpdated()->toString()
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
