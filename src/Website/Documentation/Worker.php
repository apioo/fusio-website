<?php

namespace App\Website\Documentation;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\MovedPermanentlyException;

class Worker extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        throw new MovedPermanentlyException('https://docs.fusio-project.org/docs/concepts/worker_api');
    }
}
