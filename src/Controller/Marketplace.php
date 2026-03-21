<?php

namespace App\Controller;

use Fusio\Marketplace\Client;
use Fusio\Marketplace\MarketplaceAppCollection;
use Fusio\Marketplace\MarketplaceBundleCollection;
use Psr\Cache\CacheItemPoolInterface;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use Sdkgen\Client\Credentials\Anonymous;

class Marketplace extends ControllerAbstract
{
    private CacheItemPoolInterface $cache;
    private ReverseRouter $reverseRouter;
    private Client $client;

    public function __construct(CacheItemPoolInterface $cache, ReverseRouter $reverseRouter)
    {
        $this->cache = $cache;
        $this->reverseRouter = $reverseRouter;
        $this->client = new Client('https://api.fusio-project.org', new Anonymous());
    }

    #[Get]
    #[Path('/marketplace')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Marketplace | Fusio Extensions, Apps & API Bundles',
            'description' => 'Browse the Fusio Marketplace to find community-built frontend apps, modular bundles, and custom actions. Accelerate your API development with ready-to-use extensions.',
            'keywords' => 'Fusio Marketplace, Fusio apps, API extensions, Fusio actions, community apps, Fusio backend, Fusio CLI, API management tools, Fusio integrations, open-source API apps, Fusio developer portal, Fusio extensions',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Marketplace',
            'tagline' => 'The central exchange for the Fusio ecosystem where the community shares frontend apps and modular bundles.',
            'bundles' => $this->getBundles(),
            'apps' => $this->getApps(),
        ];

        $templateFile = __DIR__ . '/../../resources/template/marketplace.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    private function getBundles(): MarketplaceBundleCollection
    {
        $item = $this->cache->getItem('fusio-marketplace-bundles');

        if ($item->isHit()) {
            $data = $item->get();
        } else {
            $data = $this->client->marketplace()->directory()->bundle()->getAll(0, 16);

            $item->expiresAfter(60 * 60 * 24);
            $item->set($data);
            $this->cache->save($item);
        }

        return $data;
    }

    private function getApps(): MarketplaceAppCollection
    {
        $item = $this->cache->getItem('fusio-marketplace-apps');

        if ($item->isHit()) {
            $data = $item->get();
        } else {
            $data = $this->client->marketplace()->directory()->app()->getAll(0, 16);

            $item->expiresAfter(60 * 60 * 24);
            $item->set($data);
            $this->cache->save($item);
        }

        return $data;
    }
}
