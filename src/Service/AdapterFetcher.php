<?php

namespace App\Service;

use App\Table;
use DateTime;
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
                // get all capabilities of the definition
                $capabilities = $this->getDefinitionCapabilities($package->repository);
                if (empty($capabilities)) {
                    continue;
                }

                $existingPackage = $this->adapterTable->findOneByName($package->name);
                if (empty($existingPackage)) {
                    $this->adapterTable->create(new Table\Generated\AdapterRow([
                        'name'         => $package->name,
                        'description'  => $package->description,
                        'url'          => $package->url,
                        'repository'   => $package->repository,
                        'downloads'    => $package->downloads,
                        'favers'       => $package->favers,
                        'capabilities' => implode(',', $capabilities),
                        'updateDate'   => new DateTime(),
                        'insertDate'   => new DateTime(),
                    ]));

                    yield 'created' => $package->name;
                } else {
                    $existingPackage['description']  = $package->description;
                    $existingPackage['url']          = $package->url;
                    $existingPackage['repository']   = $package->repository;
                    $existingPackage['downloads']    = $package->downloads;
                    $existingPackage['favers']       = $package->favers;
                    $existingPackage['capabilities'] = implode(',', $capabilities);
                    $existingPackage['updateDate']   = new DateTime();

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

    private function getDefinitionCapabilities(string $githubUrl): array
    {
        if (!str_contains($githubUrl, 'github.com')) {
            // @TODO at the moment we support only github we should clone the
            // repo and look for the file for a more general approach
            return [];
        }

        $types     = ['actionClass', 'connectionClass', 'paymentClass', 'userClass', 'routesClass'];
        $provides  = [];

        $githubUrl = str_replace('https://github.com/', 'https://api.github.com/repos/', $githubUrl);
        $githubUrl = $githubUrl . '/contents/definition.json';

        $options = new Options();
        $options->setVerify(false);

        $request = new GetRequest($githubUrl, [
            'Accept'     => 'application/json',
            'User-Agent' => self::USER_AGENT,
            'X-GitHub-Media-Type' => 'github.v3',
        ]);
        $response = $this->httpClient->request($request, $options);

        if ($response->getStatusCode() !== 200) {
            return [];
        }

        $file = Parser::decode((string) $response->getBody());
        if ($file instanceof \stdClass && isset($file->content)) {
            $definition = Parser::decode(base64_decode($file->content));
            if ($definition instanceof \stdClass) {
                foreach ($types as $type) {
                    if (isset($definition->$type) && is_array($definition->$type)) {
                        $provides[] = $type;
                    }
                }
            }
        }

        return $provides;
    }
}
