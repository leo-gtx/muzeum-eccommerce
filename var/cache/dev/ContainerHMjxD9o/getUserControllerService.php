<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\UserController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/Admin/UserController.php';

$this->services['App\\Controller\\Admin\\UserController'] = $instance = new \App\Controller\Admin\UserController();

$instance->setContainer(($this->privates['.service_locator.AVaUqzz'] ?? $this->load('get_ServiceLocator_AVaUqzzService.php'))->withContext('App\\Controller\\Admin\\UserController', $this));

return $instance;
