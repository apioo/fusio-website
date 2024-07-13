<?php

namespace App\Controller;

use Fusio\Marketplace\Client;
use Fusio\Marketplace\MarketplaceActionCollection;
use Fusio\Marketplace\MarketplaceAppCollection;
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
            'title' => 'Marketplace | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'actions' => $this->getActions(),
            'apps' => $this->getApps(),
            'bootstrap_icons' => true,
        ];

        $templateFile = __DIR__ . '/../../resources/template/marketplace.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    private function getActions(): MarketplaceActionCollection
    {
        $item = $this->cache->getItem('fusio-marketplace-actions');

        if ($item->isHit()) {
            $data = $item->get();
        } else {
            $data = $this->client->marketplace()->directory()->action()->getAll(0, 16);

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
