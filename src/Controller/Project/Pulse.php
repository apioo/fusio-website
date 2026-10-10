<?php

namespace App\Controller\Project;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Pulse extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/pulse')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Pulse',
            'description' => 'Fusio Pulse is an open-source, self-hosted notification gateway to send chat, email, push and SMS messages through a single REST API.',
            'keywords' => 'Fusio Pulse, Notification API, Notification Gateway, Self-Hosted, SMS API, Email API, Push Notifications, Symfony Notifier, Novu Alternative',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Pulse',
            'tagline' => 'Self-hosted notification gateway to send chat, email, push and SMS messages through a single API.',
        ];

        $templateFile = __DIR__ . '/../../../resources/template/project/pulse.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
