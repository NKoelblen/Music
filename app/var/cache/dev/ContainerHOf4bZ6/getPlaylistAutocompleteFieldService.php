<?php

namespace ContainerHOf4bZ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlaylistAutocompleteFieldService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AutocompleteField\PlaylistAutocompleteField' shared autowired service.
     *
     * @return \App\Form\AutocompleteField\PlaylistAutocompleteField
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AutocompleteField/PlaylistAutocompleteField.php';

        return $container->privates['App\\Form\\AutocompleteField\\PlaylistAutocompleteField'] = new \App\Form\AutocompleteField\PlaylistAutocompleteField();
    }
}
