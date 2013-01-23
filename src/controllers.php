<?php


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

$app->match('/boards', function() use ($app) {
  
  return "callback";
});

$app->get('/', function() use ($app) {
  $subRequest = Request::create('/boards', 'GET');
  return $app->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
});
  

return $app;