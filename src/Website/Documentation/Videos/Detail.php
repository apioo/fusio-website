<?php

namespace App\Website\Documentation\Videos;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Detail extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $videos = $this->getVideo();
        $video  = $this->getUriFragment('video');

        if (!preg_match('/^[A-Za-z0-9\-\_]{3,32}$/', $video)) {
            throw new StatusCode\BadRequestException('Invalid request');
        }

        if (!isset($videos[$video])) {
            throw new StatusCode\NotFoundException('Invalid video');
        }

        $this->template->assign('video', $videos[$video]);
        $this->template->assign('videos', $videos);
    }

}
