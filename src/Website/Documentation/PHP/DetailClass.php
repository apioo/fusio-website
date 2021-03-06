<?php

namespace App\Website\Documentation\PHP;

use App\Website\Documentation\PHP;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\NotFoundException;

class DetailClass extends PHP
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $data = $this->apiReader->getApi($this->getName());
        $class = $context->getUriFragment('class');

        if (!isset($data['api'][$class])) {
            throw new NotFoundException('Class not available');
        }

        return $this->render(__DIR__ . '/../../resource/documentation/api.php', [
            'className' => $class,
            'api' => $data['api'],
            'class' => $data['api'][$class],
            'name' => $this->getName(),
        ]);
    }
}
