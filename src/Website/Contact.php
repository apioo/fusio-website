<?php

namespace App\Website;

use App\Service\CaptchaVerifier;
use PSX\Api\Attribute\Incoming;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Framework\Schema\Passthru;
use PSX\Http\Environment\HttpContextInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

class Contact extends ViewAbstract
{
    private const TO_RECEIVER = 'christoph.kappestein@gmail.com';

    #[Inject]
    private CaptchaVerifier $captchaVerifier;

    #[Inject]
    private Mailer $mailer;

    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/resource/contact.php', [
            'canonical' => $this->reverseRouter->getUrl(self::class),
        ]);
    }

    #[Incoming(schema: Passthru::class)]
    protected function doPost(mixed $body, HttpContextInterface $context): mixed
    {
        try {
            if (!$this->captchaVerifier->verify($body->{'g-recaptcha-response'})) {
                throw new \RuntimeException('Invalid captcha');
            }

            $message = 'Email: ' . $body->email . "\n";
            $message.= 'Message: ' . $body->message;

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

        return $this->render(__DIR__ . '/resource/contact.php', [
            'success' => $success,
            'error' => $error,
        ]);
    }
}
