<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return function (ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $services
        ->load('Bigoen\\ApiBridge\\HttpClient\\', '../../HttpClient/*')
        ->arg('$httpClient', service('http_client'));
};
