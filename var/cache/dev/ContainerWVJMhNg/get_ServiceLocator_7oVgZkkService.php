<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.7oVgZkk' shared service.

return $this->privates['.service_locator.7oVgZkk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'ordersRepository' => ['privates', 'App\\Repository\\OrdersRepository', 'getOrdersRepositoryService.php', true],
], [
    'ordersRepository' => 'App\\Repository\\OrdersRepository',
]);
