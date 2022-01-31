<?php

namespace App\Website\Documentation;

use Psr\Cache\CacheItemPoolInterface;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception as StatusCode;
use Symfony\Component\Yaml;

class Videos extends ViewAbstract
{
    #[Inject]
    private CacheItemPoolInterface $cache;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $videos = $this->getVideo();

        $this->template->assign('videos', $videos);
    }

    protected function getVideo()
    {
        $item = $this->cache->getItem('videos');

        if (!$item->isHit()) {
            $parser = new Yaml\Parser();
            $file   = __DIR__ . '/../../Resource/videos/videos.yaml';
            $video  = $parser->parse(file_get_contents($file));

            $item->set($video);

            $this->cache->save($item);

            return $video;
        } else {
            return $item->get();
        }
    }
}
