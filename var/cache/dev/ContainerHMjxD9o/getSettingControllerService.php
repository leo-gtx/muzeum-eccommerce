<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\SettingController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/Admin/SettingController.php';

$this->services['App\\Controller\\Admin\\SettingController'] = $instance = new \App\Controller\Admin\SettingController();

$instance->setContainer(($this->privates['.service_locator.AVaUqzz'] ?? $this->load('get_ServiceLocator_AVaUqzzService.php'))->withContext('App\\Controller\\Admin\\SettingController', $this));

return $instance;
