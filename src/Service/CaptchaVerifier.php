<?php

namespace App\Service;

use GuzzleHttp\Client;
use PSX\Framework\Config\ConfigInterface;
use PSX\Framework\Environment\IPResolver;
use PSX\Json;

readonly class CaptchaVerifier
{
    private Client $httpClient;
    private string $secret;

    public function __construct(ConfigInterface $config, private IPResolver $ipResolver)
    {
        $this->httpClient = new Client();
        $this->secret = $config->get('recaptcha_secret');
    }

    public function verify(?string $recaptchaResponse): bool
    {
        if (empty($this->secret)) {
            // in case at our local instance is no secret configured we ignore it
            return true;
        }

        if (empty($recaptchaResponse)) {
            return false;
        }

        $response = $this->httpClient->post('https://www.google.com/recaptcha/api/siteverify', [
            'headers' => [
                'User-Agent' => 'fusio-project.org'
            ],
            'form_params' => [
                'secret'   => $this->secret,
                'response' => $recaptchaResponse,
                'remoteip' => $this->ipResolver->resolveByEnvironment(),
            ],
            'verify' => false
        ]);

        if ($response->getStatusCode() == 200) {
            $data = Json\Parser::decode((string) $response->getBody());
            if (isset($data->success) && $data->success === true) {
                return true;
            }
        }

        return false;
    }
}
