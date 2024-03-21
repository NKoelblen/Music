<?php

namespace ContainerPoRMLnn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E5Mqoq_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e5Mqoq.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e5Mqoq.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'genre' => ['privates', '.errored..service_locator.e5Mqoq..App\\Entity\\Genre', NULL, 'Cannot autowire service ".service_locator.e5Mqoq.": it needs an instance of "App\\Entity\\Genre" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'genre' => 'App\\Entity\\Genre',
        ]);
    }
}
