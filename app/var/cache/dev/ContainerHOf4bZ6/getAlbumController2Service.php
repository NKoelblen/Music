<?php

namespace ContainerHOf4bZ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAlbumController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AlbumController' shared autowired service.
     *
     * @return \App\Controller\AlbumController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AlbumController.php';

        $container->services['App\\Controller\\AlbumController'] = $instance = new \App\Controller\AlbumController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\AlbumController', $container));

        return $instance;
    }
}
