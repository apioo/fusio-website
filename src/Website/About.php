<?php

namespace App\Website;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class About extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/resource/about.php', [
            'canonical' => $this->reverseRouter->getUrl(self::class),
        ]);
    }
}
