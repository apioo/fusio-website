<?php

namespace App\Controller\Project;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Plant extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/plant')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Plant',
            'description' => 'Fusio Plant is an open-source server panel to self-host Fusio and other apps on your own infrastructure, a lightweight alternative to cPanel or Plesk.',
            'keywords' => 'Fusio Plant, Server Panel, Self-Hosting, Docker Hosting, cPanel Alternative, Plesk Alternative, Automatic SSL',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Plant',
            'tagline' => 'Server panel to easily self-host Fusio and other apps on your own infrastructure with one click.',
        ];

        $templateFile = __DIR__ . '/../../../resources/template/project/plant.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
