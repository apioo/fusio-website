<?php

namespace App\Website;

use PSX\Framework\Controller\ControllerAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Ping extends ControllerAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        return [
            'success' => true
        ];
    }
}
