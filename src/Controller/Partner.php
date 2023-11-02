<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Partner extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/partner')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Partner | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/partner.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
