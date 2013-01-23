<?php


use Silex\Application;
use Silex\ServiceProviderInterface;

class GuzzleServiceProvider implements ServiceProviderInterface {
  public function register(Application $app) {
    
    $app['guzzle.client'] = $app->share(function() use ($app) {
        return new Client($app['guzzle.base_url'], $app['guzzle_key']);
    });
  }
  
  public function boot(Application $app) {
    
  }
}