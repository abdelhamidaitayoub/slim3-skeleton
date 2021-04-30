<?php

namespace Controller;

use Psr\Container\ContainerInterface;

class Controller
{
  protected $container;

  // constructor receives container instance
  public function __construct(ContainerInterface $container) {
      $this->container = $container;
  }

  public function __get(string $name)
  {
      if($this->container->{$name}) {
          return $this->container->get($name);
      }
  }
}
