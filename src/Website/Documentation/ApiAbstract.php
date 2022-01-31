<?php

namespace App\Website\Documentation;

use Psr\Cache\CacheItemPoolInterface;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception as StatusCode;
use Symfony\Component\Yaml;

abstract class ApiAbstract extends ViewAbstract
{
    #[Inject]
    private CacheItemPoolInterface $cache;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $data = $this->getApi();

        $this->template->assign('api', $data['api']);
        $this->template->assign('name', $this->getName());
        $this->template->set(__DIR__ . '/../../Resource/documentation/api.php');
    }



    protected function getApi()
    {
        $file = $this->getName() . '_v1.yaml';
        $item = $this->cache->getItem($file);

        if (!$item->isHit()) {
            $parser = new Yaml\Parser();
            $data   = $parser->parse(file_get_contents(__DIR__ . '/../../Resource/api/' . $file));

            $item->set($data);

            $this->cache->save($item);

            return $data;
        } else {
            return $item->get();
        }
    }

    abstract protected function getName();
}
