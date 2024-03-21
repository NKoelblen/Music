<?php

namespace ContainerHOf4bZ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F9ykaqUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F9ykaqU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F9ykaqU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'track' => ['privates', '.errored..service_locator.F9ykaqU.App\\Entity\\Track', NULL, 'Cannot autowire service ".service_locator.F9ykaqU": it needs an instance of "App\\Entity\\Track" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'track' => 'App\\Entity\\Track',
        ]);
    }
}
