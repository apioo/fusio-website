<?php

use App\Service\AdapterFetcher;
use App\Service\ApiReader;
use App\Service\BlogUpdater;
use App\Service\CaptchaVerifier;
use App\Service\ReleaseFetcher;
use App\Slugify;
use PSX\Framework\Dependency\Configurator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {
    $services = Configurator::services($container->services());

    $services->load('App\\Command\\', __DIR__ . '/../src/Command')
        ->public();

    $services->load('App\\Controller\\', __DIR__ . '/../src/Controller')
        ->public();

    $services->load('App\\Table\\', __DIR__ . '/../src/Table/*.php');

    $services->set(Slugify::class);
    $services->set(AdapterFetcher::class);
    $services->set(BlogUpdater::class);
    $services->set(CaptchaVerifier::class);
    $services->set(ReleaseFetcher::class);

};
