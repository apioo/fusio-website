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
            'description' => 'Discover partners of Fusio, an open-source API & AI management platform. Learn how JetBrains and other collaborators support Fusio to advance API development.',
            'keywords' => 'Fusio, API management, open-source API platform, Fusio partners, JetBrains, Fusio collaboration, API development, Fusio project partners, Fusio sponsorship, open-source collaboration',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/partner.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
