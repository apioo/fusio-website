<?php

namespace App\Service;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Yaml\Parser;

class ApiReader
{
    private CacheItemPoolInterface $cache;

    public function __construct(CacheItemPoolInterface $cache)
    {
        $this->cache = $cache;
    }

    public function getApi(string $name)
    {
        $file = $name . '_v1.yaml';
        $item = $this->cache->getItem($file);
        if ($item->isHit()) {
            return $item->get();
        }

        $parser = new Parser();
        $data   = $parser->parse(file_get_contents(__DIR__ . '/../Website/resource/api/' . $file));

        $item->set($data);

        $this->cache->save($item);

        return $data;
    }
}