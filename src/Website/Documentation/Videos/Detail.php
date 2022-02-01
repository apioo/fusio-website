<?php

namespace App\Website\Documentation\Videos;

use App\Service\VideoReader;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\BadRequestException;
use PSX\Http\Exception\NotFoundException;

class Detail extends ViewAbstract
{
    #[Inject]
    private VideoReader $videoReader;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $videos = $this->videoReader->findAll();
        $video  = $context->getUriFragment('video');

        if (!preg_match('/^[A-Za-z0-9\-\_]{3,32}$/', $video)) {
            throw new BadRequestException('Invalid request');
        }

        if (!isset($videos[$video])) {
            throw new NotFoundException('Invalid video');
        }

        return $this->render(__DIR__ . '/../../resource/documentation/videos.php', [
            'video' => $videos[$video],
            'videos' => $videos,
        ]);
    }

}
