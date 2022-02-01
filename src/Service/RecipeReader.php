<?php

namespace App\Service;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Yaml\Parser;

class RecipeReader
{
    private CacheItemPoolInterface $cache;

    public function __construct(CacheItemPoolInterface $cache)
    {
        $this->cache = $cache;
    }

    public function findAll(): array
    {
        $item = $this->cache->getItem('recipes');
        if ($item->isHit()) {
            return $item->get();
        }

        $parser   = new Parser();
        $basePath = __DIR__ . '/../Website/resource/recipes';
        $types    = scandir($basePath);
        $result   = [];

        foreach ($types as $type) {
            if ($type[0] != '.' && is_dir($basePath . '/' . $type)) {
                $result[$type] = [];

                $files = scandir($basePath . '/' . $type);
                foreach ($files as $file) {
                    if (is_file($basePath . '/' . $type . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) == 'yaml') {
                        $data = $parser->parse(file_get_contents($basePath . '/' . $type . '/' . $file));
                        $name = pathinfo($file, PATHINFO_FILENAME);

                        $result[$type][$name] = $data['title'];
                    }
                }
            }
        }

        $item->set($result);

        $this->cache->save($item);

        return $result;
    }
}
