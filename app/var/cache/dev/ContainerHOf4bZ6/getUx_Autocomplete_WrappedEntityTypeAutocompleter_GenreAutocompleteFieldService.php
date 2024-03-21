<?php

namespace ContainerHOf4bZ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_Autocomplete_WrappedEntityTypeAutocompleter_GenreAutocompleteFieldService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.autocomplete.wrapped_entity_type_autocompleter.genre_autocomplete_field' shared service.
     *
     * @return \Symfony\UX\Autocomplete\Form\WrappedEntityTypeAutocompleter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-autocomplete/src/EntityAutocompleterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-autocomplete/src/OptionsAwareEntityAutocompleterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-autocomplete/src/Form/WrappedEntityTypeAutocompleter.php';

        return $container->privates['ux.autocomplete.wrapped_entity_type_autocompleter.genre_autocomplete_field'] = new \Symfony\UX\Autocomplete\Form\WrappedEntityTypeAutocompleter('App\\Form\\AutocompleteField\\GenreAutocompleteField', ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->privates['ux.autocomplete.entity_metadata_factory'] ?? $container->load('getUx_Autocomplete_EntityMetadataFactoryService')), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ($container->privates['ux.autocomplete.entity_search_util'] ?? $container->load('getUx_Autocomplete_EntitySearchUtilService')));
    }
}
