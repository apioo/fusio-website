<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Ecosystem extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/ecosystem')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Ecosystem',
            'description' => 'Besides our core product, we offer additional services and open-source projects to augment the functionality of Fusio.',
            'keywords' => 'Fusio, API management, SDKgen, APIgen, APImon, TypeHub, TypeAPI, TypeSchema, PSX, Fusio Marketplace, Fusio Framework, Plant server panel, API tools, API integrations, open-source API tools, API development ecosystem',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/ecosystem.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
