<?php

namespace App\Console;

use DateTime;
use PSX\Framework\Config\Config;
use PSX\Http\Client\ClientInterface;
use PSX\Http\Client\GetRequest;
use PSX\Json\Parser;
use PSX\Sql\TableManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FetchAdapterCommand extends Command
{
    protected TableManagerInterface $tableManager;
    protected ClientInterface $httpClient;
    protected Config $config;

    public function __construct(TableManagerInterface $tableManager, ClientInterface $httpClient, Config $config)
    {
        parent::__construct();

        $this->tableManager = $tableManager;
        $this->httpClient = $httpClient;
        $this->config = $config;
    }

    protected function configure()
    {
        $this
            ->setName('website:fetch_adapter')
            ->setDescription('Fetches all available Fusio adapters from packagist');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->fetch('https://packagist.org/search.json?tags=fusio-adapter', $output);
    }

}
