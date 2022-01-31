<?php

namespace App\Service;

use App\Table;
use DateTime;
use PSX\Http\Client\ClientInterface;
use PSX\Http\Client\GetRequest;
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
        $request = new GetRequest($url, [
            'Accept'     => 'application/json',
            'User-Agent' => self::USER_AGENT,
        ]);
        $response = $this->httpClient->request($request);
        if ($response->getStatusCode() !== 200) {
            return;
        }

        $data = Parser::decode((string) $response->getBody(), false);

        if (isset($data->results) && is_array($data->results)) {
            foreach ($data->results as $package) {
                // get all capabilties of the definition
                try {
                    $capabilities = $this->getDefinitionCapabilities($package->repository);
                } catch (\Exception $e) {
                    continue;
                }

                if (empty($capabilities)) {
                    continue;
                }

                $existingPackage = $this->adapterTable->findByName($package->name);
                if (empty($existingPackage)) {
                    $this->adapterTable->create([
                        'name'         => $package->name,
                        'description'  => $package->description,
                        'url'          => $package->url,
                        'repository'   => $package->repository,
                        'downloads'    => $package->downloads,
                        'favers'       => $package->favers,
                        'capabilities' => implode(',', $capabilities),
                        'updateDate'   => new DateTime(),
                        'insertDate'   => new DateTime(),
                    ]);

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

        if (isset($data->next) && $data->next != $url) {
            yield from $this->fetch($data->next);
        }
    }

    protected function getDefinitionCapabilities(string $githubUrl): array
    {
        if (!str_contains($githubUrl, 'github.com')) {
            // @TODO at the moment we support only github we should clone the
            // repo and look for the file for a more general approach
            return [];
        }

        $types     = ['actionClass', 'connectionClass', 'routes', 'action', 'schema', 'database', 'connection'];
        $provides  = [];

        $githubUrl = str_replace('https://github.com/', 'https://api.github.com/repos/', $githubUrl);
        $githubUrl = $githubUrl . '/contents/definition.json';

        $request = new GetRequest($githubUrl, [
            'Accept'     => 'application/json',
            'User-Agent' => self::USER_AGENT,
            'X-GitHub-Media-Type' => 'github.v3',
        ]);
        $response = $this->httpClient->request($request);

        if ($response->getStatusCode() !== 200) {
            return [];
        }

        $file = Parser::decode((string) $response->getBody(), false);
        if ($file instanceof \stdClass && isset($file->content)) {
            $definition = Parser::decode(base64_decode($file->content), false);
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
