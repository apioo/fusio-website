<?php

namespace App\Controller;

use App\Service\CaptchaVerifier;
use Exception;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Incoming;
use PSX\Api\Attribute\Path;
use PSX\Api\Attribute\Post;
use PSX\Api\Model\Passthru;
use PSX\Framework\Config\ConfigInterface;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use RuntimeException;
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
            'title' => 'Contact the Fusio Team | Developer Support & Inquiries',
            'description' => 'Get in touch with the creators of Fusio. Contact our development team for project inquiries, technical feedback, or partnership opportunities.',
            'keywords' => 'Contact Fusio, API Support, Developer Feedback, Project Inquiries, Fusio Team, Open Source Contact, Technical Support',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Contact',
            'tagline' => 'Have questions or feedback? Reach out to the Fusio development team directly for support or inquiries.',
            'recaptcha_key' => $this->config->get('google_recaptcha_key'),
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
            $captcha = $payload->captcha ?? null;

            if (!$this->captchaVerifier->verify($captcha)) {
                throw new RuntimeException('Invalid captcha');
            }

            if (!filter_var($payload->email, FILTER_VALIDATE_EMAIL)) {
                throw new RuntimeException('Provided an invalid email');
            }

            if (empty($payload->message)) {
                throw new RuntimeException('Provided an invalid message');
            }

            if (preg_match('/^[A-Za-z0-9]+$/', $payload->message)) {
                throw new RuntimeException('Provided an invalid message');
            }

            $message = (new Email())
                ->subject('[Fusio] Contact')
                ->from('info@fusio-project.org')
                ->to(self::TO_RECEIVER)
                ->replyTo($payload->email)
                ->text($payload->message);
            $this->mailer->send($message);

            $success = true;
            $error = null;
        } catch (Exception $e) {
            $success = false;

            $error = $e->getMessage();
            if ($this->config->get('psx_debug')) {
                $error.= '<pre>' . $e->getTraceAsString() . '</pre>';
            }
        }

        $data = [
            'title' => 'Contact the Fusio Team | Developer Support & Inquiries',
            'description' => 'Get in touch with the creators of Fusio. Contact our development team for project inquiries, technical feedback, or partnership opportunities.',
            'keywords' => 'Contact Fusio, API Support, Developer Feedback, Project Inquiries, Fusio Team, Open Source Contact, Technical Support',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Contact',
            'tagline' => 'Have questions or feedback? Reach out to the Fusio development team directly for support or inquiries.',
            'success' => $success,
            'error' => $error,
            'recaptcha_key' => $this->config->get('google_recaptcha_key'),
        ];

        $templateFile = __DIR__ . '/../../resources/template/contact.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
