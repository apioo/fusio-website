<?php

namespace App\Controller;

use App\Service\CaptchaVerifier;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Incoming;
use PSX\Api\Attribute\Path;
use PSX\Api\Attribute\Post;
use PSX\Api\Model\Passthru;
use PSX\Framework\Config\ConfigInterface;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class Contact extends ControllerAbstract
{
    private const TO_RECEIVER = 'christoph.kappestein@gmail.com';

    private CaptchaVerifier $captchaVerifier;
    private MailerInterface $mailer;
    private ReverseRouter $reverseRouter;
    private ConfigInterface $config;

    public function __construct(CaptchaVerifier $captchaVerifier, MailerInterface $mailer, ReverseRouter $reverseRouter, ConfigInterface $config)
    {
        $this->captchaVerifier = $captchaVerifier;
        $this->mailer = $mailer;
        $this->reverseRouter = $reverseRouter;
        $this->config = $config;
    }

    #[Get]
    #[Path('/contact')]
    public function show(): mixed
    {
        $data = [
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/contact.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    #[Post]
    #[Path('/contact')]
    #[Incoming(schema: Passthru::class)]
    public function send(mixed $payload): mixed
    {
        try {
            if (!$this->captchaVerifier->verify($payload->{'g-recaptcha-response'})) {
                throw new \RuntimeException('Invalid captcha');
            }

            $message = 'Email: ' . $payload->email . "\n";
            $message.= 'Message: ' . $payload->message;

            $message = (new Email())
                ->subject('[Fusio] Contact')
                ->from('info@fusio-project.org')
                ->to(self::TO_RECEIVER)
                ->text($message);
            $this->mailer->send($message);

            $success = true;
            $error = null;
        } catch (\Exception $e) {
            $success = false;

            $error = $e->getMessage();
            if ($this->config->get('psx_debug')) {
                $error.= '<pre>' . $e->getTraceAsString() . '</pre>';
            }
        }

        $data = [
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'success' => $success,
            'error' => $error,
        ];

        $templateFile = __DIR__ . '/../../resources/template/contact.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}