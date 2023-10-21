<?php

namespace App\Controller;

use Psr\Cache\CacheItemPoolInterface;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use Symfony\Component\Yaml\Yaml;

class Marketplace extends ControllerAbstract
{
    private CacheItemPoolInterface $cache;
    private ReverseRouter $reverseRouter;

    public function __construct(CacheItemPoolInterface $cache, ReverseRouter $reverseRouter)
    {
        $this->cache = $cache;
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/marketplace')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Marketplace | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'apps' => $this->getApps(),
        ];

        $templateFile = __DIR__ . '/../../resources/template/marketplace.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    private function getApps(): array
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

    private function request(): array
    {
        $data = Yaml::parse(file_get_contents(__DIR__ . '/../../public/marketplace.yaml'));
        if (!is_array($data)) {
            throw new \RuntimeException('Could not read data');
        }

        return $data;
    }
}
