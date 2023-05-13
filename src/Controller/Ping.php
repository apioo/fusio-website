<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;

class Ping extends ControllerAbstract
{
    #[Get]
    #[Path('/ping')]
    public function ping(): mixed
    {
        return [
            'success' => true
        ];
    }
}
