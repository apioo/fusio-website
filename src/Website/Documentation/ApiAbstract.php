<?php

namespace App\Website\Documentation;

use App\Service\ApiReader;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;

abstract class ApiAbstract extends ViewAbstract
{
    #[Inject]
    protected ApiReader $apiReader;

    abstract protected function getName(): string;
}
