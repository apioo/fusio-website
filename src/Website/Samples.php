<?php

namespace App\Website;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Samples extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/resource/samples.php', [
            'canonical' => $this->reverseRouter->getUrl(self::class),
        ]);
    }
}
