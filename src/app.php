<?php

use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

require_once __DIR__ . '/GuzzleServiceProvider.php';


$app->register(new HttpCacheServiceProvider());
$app->register(new SessionServiceProvider());
$app->register(new UrlGeneratorServiceProvider());

$app->register(new TwigServiceProvider(), array(
    'twig.options'        => array(
        'cache'            => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
        'strict_variables' => true
    ),
    'twig.form.templates' => array('form_div_layout.html.twig', 'common/form_div_layout.html.twig'),
    'twig.path'           => array(__DIR__ . '/../resources/views')
));

$app->register(new GuzzleServiceProvider());



return $app;