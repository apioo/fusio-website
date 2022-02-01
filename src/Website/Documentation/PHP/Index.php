<?php

namespace App\Website\Documentation\PHP;

use App\Website\Documentation\PHP;
use PSX\Http\Environment\HttpContextInterface;

class Index extends PHP
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $data = $this->apiReader->getApi($this->getName());

        return $this->render(__DIR__ . '/../../resource/documentation/api.php', [
            'api' => $data['api'],
            'name' => $this->getName(),
        ]);
    }
}
