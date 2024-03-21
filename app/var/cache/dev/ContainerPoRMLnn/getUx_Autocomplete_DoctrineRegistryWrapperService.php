<?php

namespace ContainerPoRMLnn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_Autocomplete_DoctrineRegistryWrapperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.autocomplete.doctrine_registry_wrapper' shared service.
     *
     * @return \Symfony\UX\Autocomplete\Doctrine\DoctrineRegistryWrapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-autocomplete/src/Doctrine/DoctrineRegistryWrapper.php';

        return $container->privates['ux.autocomplete.doctrine_registry_wrapper'] = new \Symfony\UX\Autocomplete\Doctrine\DoctrineRegistryWrapper(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
