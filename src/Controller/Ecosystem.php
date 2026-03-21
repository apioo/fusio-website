<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Ecosystem extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/ecosystem')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Ecosystem | Open Source API Tools, TypeAPI & SDKgen',
            'description' => 'Extend Fusio with a powerful ecosystem of open-source tools. From SDKgen for client libraries to TypeAPI for better specifications, discover the projects powering modern API development.',
            'keywords' => 'Fusio Ecosystem, SDKgen, TypeAPI, TypeSchema, API Documentation Tools, Automated SDK Generation, Open Source API Tools, TypeHub, API Monitoring Service, PSX Framework',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Ecosystem',
            'tagline' => 'Besides our core product, we offer additional services and open-source projects to augment the functionality of Fusio.',
        ];

        $templateFile = __DIR__ . '/../../resources/template/ecosystem.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
