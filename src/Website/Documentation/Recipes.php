<?php

namespace App\Website\Documentation;

use Psr\Cache\CacheItemPoolInterface;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception as StatusCode;
use Symfony\Component\Yaml;

class Recipes extends ViewAbstract
{
    #[Inject]
    private CacheItemPoolInterface $cache;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $recipes = $this->getRecipes();

        $this->template->assign('recipes', $recipes);
    }

    protected function getRecipes()
    {
        $item = $this->cache->getItem('recipes');

        if (!$item->isHit()) {
            $parser   = new Yaml\Parser();
            $basePath = __DIR__ . '/../../Resource/recipes';
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
        } else {
            return $item->get();
        }
    }
}
