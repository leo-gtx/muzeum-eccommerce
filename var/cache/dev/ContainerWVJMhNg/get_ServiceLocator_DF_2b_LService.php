<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.DF.2b.L' shared service.

return $this->privates['.service_locator.DF.2b.L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'orderDetailRepository' => ['privates', 'App\\Repository\\OrderDetailRepository', 'getOrderDetailRepositoryService.php', true],
    'orders' => ['privates', '.errored..service_locator.DF.2b.L.App\\Entity\\Orders', NULL, 'Cannot autowire service ".service_locator.DF.2b.L": it references class "App\\Entity\\Orders" but no such service exists.'],
], [
    'orderDetailRepository' => 'App\\Repository\\OrderDetailRepository',
    'orders' => 'App\\Entity\\Orders',
]);
