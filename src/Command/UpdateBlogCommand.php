<?php

namespace App\Command;

use App\Service\BlogUpdater;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateBlogCommand extends Command
{
    private BlogUpdater $blogUpdater;

    public function __construct(BlogUpdater $blogUpdater)
    {
        parent::__construct();

        $this->blogUpdater = $blogUpdater;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:update_blog')
            ->setDescription('Updates all entries from the blog xml feed into an sqlite database')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Forces the update of all entries');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        foreach ($this->blogUpdater->updateAll($input->getOption('force')) as $message) {
            $output->writeln($message);
        }

        return 0;
    }
}
