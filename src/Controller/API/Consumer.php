<?php

namespace App\Controller\API;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Consumer extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/api/consumer')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Consumer API | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'filter' => 'consumer',
        ];

        $templateFile = __DIR__ . '/../../../resources/template/api.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
