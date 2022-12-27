<?php

namespace App\Website;

use Psr\Cache\CacheItemPoolInterface;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use Symfony\Component\Yaml\Yaml;

class Marketplace extends ViewAbstract
{
    #[Inject]
    private CacheItemPoolInterface $cache;

    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/resource/marketplace.php', [
            'canonical' => $this->reverseRouter->getUrl(self::class),
            'apps'      => $this->getApps()
        ]);
    }

    private function getApps()
    {
        $item = $this->cache->getItem('fusio-marketplace');

        if ($item->isHit()) {
            $data = $item->get();
        } else {
            $data = $this->request();

            $item->expiresAfter(60 * 60 * 24);
            $item->set($data);
            $this->cache->save($item);
        }

        return $data;
    }

    private function request()
    {
        return Yaml::parse(file_get_contents(__DIR__ . '/../../public/marketplace.yaml'));
    }
}
