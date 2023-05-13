<?php

namespace App\Service;

use App\Table;
use DateTime;
use PSX\DateTime\LocalDateTime;
use PSX\Http\Client\ClientInterface;
use PSX\Http\Client\GetRequest;
use PSX\Http\Client\Options;
use PSX\Json\Parser;

class AdapterFetcher
{
    private const USER_AGENT = 'Fusio-Updater (https://www.fusio-project.org)';
    private const PACKAGIST_URL = 'https://packagist.org/search.json?tags=fusio-adapter';

    private Table\Adapter $adapterTable;
    private ClientInterface $httpClient;

    public function __construct(Table\Adapter $adapterTable, ClientInterface $httpClient)
    {
        $this->adapterTable = $adapterTable;
        $this->httpClient = $httpClient;
    }

    public function fetchAll(): \Generator
    {
        yield from $this->fetch(self::PACKAGIST_URL);
    }

    protected function fetch(string $url): \Generator
    {
        $data = $this->request($url);
        if (isset($data->results) && is_array($data->results)) {
            foreach ($data->results as $package) {
                $existingPackage = $this->adapterTable->findOneByName($package->name);
                if (!$existingPackage instanceof Table\Generated\AdapterRow) {
                    $row = new Table\Generated\AdapterRow();
                    $row->setName($package->name);
                    $row->setDescription($package->description);
                    $row->setUrl($package->url);
                    $row->setRepository($package->repository);
                    $row->setDownloads($package->downloads);
                    $row->setFavers($package->favers);
                    $row->setUpdateDate(LocalDateTime::now());
                    $row->setInsertDate(LocalDateTime::now());
                    $this->adapterTable->create($row);

                    yield 'created' => $package->name;
                } else {
                    $existingPackage->setDescription($package->description);
                    $existingPackage->setUrl($package->url);
                    $existingPackage->setRepository($package->repository);
                    $existingPackage->setDownloads($package->downloads);
                    $existingPackage->setFavers($package->favers);
                    $existingPackage->setUpdateDate(LocalDateTime::now());
                    $this->adapterTable->update($existingPackage);

                    yield 'updated' => $package->name;
                }
            }
        }

        if (isset($data->next) && $data->next !== $url) {
            yield from $this->fetch($data->next);
        }
    }

    private function request(string $url): mixed
    {
        $request = new GetRequest($url, [
            'Accept'     => 'application/json',
            'User-Agent' => self::USER_AGENT,
        ]);

        $options = new Options();
        $options->setVerify(false);

        $response = $this->httpClient->request($request, $options);
        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('Could not request url ' . $url);
        }

        return Parser::decode((string) $response->getBody());
    }
}
