<?php

use Silex\Application;

class Trello {
  
  private $app;

  public function __construct(Application $app) {
    $this->app = $app;
  }
  
  public function BoardGet($boardId = null, $fields = array()) {
    return $this->app['guzzle.client']->get();
  }
  
  public function CardGet($fillter) {
    return $this->app['guzzle.client']->get();
  }
  
  public function OrganizationGet($fillter) {
    return $this->app['guzzle.client']->get();
  }
  
  public function NotificationGet($fillter) {
    return $this->app['guzzle.client']->get();
  }
  
  public function MemberGet($fillter) {
    return $this->app['guzzle.client']->get();
  }
}