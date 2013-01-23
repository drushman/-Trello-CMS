<?php

$app['guzzle.base_url'] = 'https://api.trello.com/1/';
$app['guzzle.key'] = '26f4fc70dd860868414a625c5f06c007';

// Cache
$app['cache.path'] = __DIR__ . '/../cache';

// Http cache
$app['http_cache.cache_dir'] = $app['cache.path'] . '/http';

// Twig cache
$app['twig.options.cache'] = $app['cache.path'] . '/twig';