<?php

namespace App\Service;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Yaml\Parser;

class VideoReader
{
    private CacheItemPoolInterface $cache;

    public function __construct(CacheItemPoolInterface $cache)
    {
        $this->cache = $cache;
    }

    public function findAll(): array
    {
        $item = $this->cache->getItem('videos');
        if ($item->isHit()) {
            return $item->get();
        }

        $parser = new Parser();
        $file   = __DIR__ . '/../Website/resource/videos/videos.yaml';
        $video  = $parser->parse(file_get_contents($file));

        $item->set($video);

        $this->cache->save($item);

        return $video;
    }
}
