<?php

namespace App\Service;

use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\Client\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\CreateAssessmentRequest;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use PSX\Framework\Config\ConfigInterface;
use Throwable;

readonly class CaptchaVerifier
{
    public function __construct(private ConfigInterface $config)
    {
    }

    public function verify(?string $recaptchaResponse): bool
    {
        if (empty($recaptchaResponse)) {
            return false;
        }

        $client = new RecaptchaEnterpriseServiceClient(['apiKey' => $this->config->get('google_api_key')]);
        $projectName = $client->projectName($this->config->get('google_project_name'));

        $event = (new Event())
            ->setSiteKey($this->config->get('google_recaptcha_key'))
            ->setToken($recaptchaResponse);

        $assessment = (new Assessment())
            ->setEvent($event);

        $request = (new CreateAssessmentRequest())
            ->setParent($projectName)
            ->setAssessment($assessment);

        try {
            $response = $client->createAssessment($request);

            return $response->getTokenProperties()->getValid() === true;
        } catch (Throwable) {
            return false;
        }
    }
}
