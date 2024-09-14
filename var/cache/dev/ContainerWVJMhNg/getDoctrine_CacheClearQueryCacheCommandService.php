<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.cache_clear_query_cache_command' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/AbstractEntityManagerCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/CommandCompatibility.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/ClearCache/QueryCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/OrmProxyCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

$this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand(($this->privates['doctrine.orm.command.entity_manager_provider'] ?? $this->load('getDoctrine_Orm_Command_EntityManagerProviderService.php')));

$instance->setName('doctrine:cache:clear-query');

return $instance;
