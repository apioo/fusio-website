<?php

namespace App\Website;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\MovedPermanentlyException;

class Bootstrap extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        throw new MovedPermanentlyException('https://docs.fusio-project.org/');
    }
}
