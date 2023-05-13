<?php

namespace App\Command;

use App\Service\AdapterFetcher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FetchAdapterCommand extends Command
{
    private AdapterFetcher $adapterFetcher;

    public function __construct(AdapterFetcher $adapterFetcher)
    {
        parent::__construct();

        $this->adapterFetcher = $adapterFetcher;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:fetch_adapter')
            ->setDescription('Fetches all available Fusio adapters from packagist');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        foreach ($this->adapterFetcher->fetchAll() as $type => $message) {
            $output->writeln($type . ': ' . $message);
        }

        return 0;
    }
}
