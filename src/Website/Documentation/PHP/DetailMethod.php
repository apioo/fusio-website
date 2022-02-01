<?php

namespace App\Website\Documentation\PHP;

use App\Website\Documentation\PHP;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\NotFoundException;

class DetailMethod extends PHP
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $data = $this->apiReader->getApi($this->getName());
        $class  = $context->getUriFragment('class');
        $method = $context->getUriFragment('method');

        if (!isset($data['api'][$class]['methods'][$method])) {
            throw new NotFoundException('Method not available');
        }

        return $this->render(__DIR__ . '/../../resource/documentation/api.php', [
            'className' => $class,
            'methodName' => $method,
            'api' => $data['api'],
            'method' => $data['api'][$class]['methods'][$method],
            'name' => $this->getName(),
        ]);
    }
}
