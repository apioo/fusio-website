<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Brand extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/brand')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Brand Assets & Media Kit | Official Fusio Logos & Guidelines',
            'description' => 'Download official Fusio brand assets, logos, and style guides. Ensure consistent communication when featuring the Fusio API platform in your projects.',
            'keywords' => 'Fusio Brand Assets, API Management Logo, Fusio Media Kit, Brand Guidelines, Open Source Branding, Vector Logos, Style Guide',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Brand',
            'tagline' => 'Official logos and brand guidelines for featuring Fusio in your marketing materials and technical content.',
        ];

        $templateFile = __DIR__ . '/../../resources/template/brand.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
