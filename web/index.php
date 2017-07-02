<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// ... definitions
$app->get('/api/third', function() {
    return new \Symfony\Component\HttpFoundation\JsonResponse(['Third api response!']);
});

$app->run();
