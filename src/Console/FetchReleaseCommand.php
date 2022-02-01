<?php

namespace App\Console;

use App\Service\ReleaseFetcher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FetchReleaseCommand extends Command
{
    private ReleaseFetcher $releaseFetcher;

    public function __construct(ReleaseFetcher $releaseFetcher)
    {
        parent::__construct();

        $this->releaseFetcher = $releaseFetcher;
    }

    protected function configure()
    {
        $this
            ->setName('app:fetch_release')
            ->setDescription('Fetches the latest release from GitHub');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        foreach ($this->releaseFetcher->fetchAll() as $message) {
            $output->writeln($message);
        }

        return 0;
    }
}
