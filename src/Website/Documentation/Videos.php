<?php

namespace App\Website\Documentation;

use App\Service\VideoReader;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Videos extends ViewAbstract
{
    #[Inject]
    private VideoReader $videoReader;

    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/../resource/documentation/videos.php', [
            'videos' => $this->videoReader->findAll(),
        ]);
    }
}
