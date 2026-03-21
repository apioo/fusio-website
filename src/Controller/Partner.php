<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Partner extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/partner')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Official Partners | Supporting the Fusio API Ecosystem',
            'description' => 'Meet the organizations and partners driving the growth of the Fusio open-source platform. Join our network of API management specialists and contributors.',
            'keywords' => 'Fusio Partners, Open Source Support, API Ecosystem, Tech Partnerships, Fusio Contributors, Enterprise API Support, Community Partners',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Partner',
            'tagline' => 'Organizations and experts actively contributing to the growth and sustainability of the Fusio platform.',
        ];

        $templateFile = __DIR__ . '/../../resources/template/partner.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
