<?php

use PSX\Framework\Dependency\Configurator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {
    $services = Configurator::services($container->services());

    $services->load('App\\Command\\', __DIR__ . '/../src/Command')
        ->public();

    $services->load('App\\Controller\\', __DIR__ . '/../src/Controller')
        ->public();

    $services->load('App\\Service\\', __DIR__ . '/../src/Service');
    $services->load('App\\Table\\', __DIR__ . '/../src/Table/*.php');

};
