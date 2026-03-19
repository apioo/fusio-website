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
            'title' => 'Partner',
            'description' => 'A dedicated list of partners and organizations who actively support the development and growth of the Fusio open-source API management platform.',
            'keywords' => 'Fusio, API management, open-source API platform, Fusio partners, JetBrains, Fusio collaboration, API development, Fusio project partners, Fusio sponsorship, open-source collaboration',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/partner.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
