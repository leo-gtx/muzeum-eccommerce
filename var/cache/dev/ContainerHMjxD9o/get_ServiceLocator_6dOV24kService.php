<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.6dOV24k' shared service.

return $this->privates['.service_locator.6dOV24k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'comment' => ['privates', '.errored..service_locator.6dOV24k.App\\Entity\\Admin\\Comment', NULL, 'Cannot autowire service ".service_locator.6dOV24k": it references class "App\\Entity\\Admin\\Comment" but no such service exists.'],
], [
    'comment' => 'App\\Entity\\Admin\\Comment',
]);
