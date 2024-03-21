<?php

namespace ContainerHOf4bZ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Form\\AlbumType' => ['privates', 'App\\Form\\AlbumType', 'getAlbumTypeService', true],
            'App\\Form\\ArtistType' => ['privates', 'App\\Form\\ArtistType', 'getArtistTypeService', true],
            'App\\Form\\AutocompleteField\\AlbumAutocompleteField' => ['privates', 'App\\Form\\AutocompleteField\\AlbumAutocompleteField', 'getAlbumAutocompleteFieldService', true],
            'App\\Form\\AutocompleteField\\ArtistAutocompleteField' => ['privates', 'App\\Form\\AutocompleteField\\ArtistAutocompleteField', 'getArtistAutocompleteFieldService', true],
            'App\\Form\\AutocompleteField\\GenreAutocompleteField' => ['privates', 'App\\Form\\AutocompleteField\\GenreAutocompleteField', 'getGenreAutocompleteFieldService', true],
            'App\\Form\\AutocompleteField\\PlaylistAutocompleteField' => ['privates', 'App\\Form\\AutocompleteField\\PlaylistAutocompleteField', 'getPlaylistAutocompleteFieldService', true],
            'App\\Form\\AutocompleteField\\TrackAutocompleteField' => ['privates', 'App\\Form\\AutocompleteField\\TrackAutocompleteField', 'getTrackAutocompleteFieldService', true],
            'App\\Form\\GenreType' => ['privates', 'App\\Form\\GenreType', 'getGenreTypeService', true],
            'App\\Form\\PlaylistType' => ['privates', 'App\\Form\\PlaylistType', 'getPlaylistTypeService', true],
            'App\\Form\\TrackType' => ['privates', 'App\\Form\\TrackType', 'getTrackTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
            'Symfony\\UX\\Autocomplete\\Form\\BaseEntityAutocompleteType' => ['privates', 'ux.autocomplete.base_entity_type', 'getUx_Autocomplete_BaseEntityTypeService', true],
            'Symfony\\UX\\Autocomplete\\Form\\ParentEntityAutocompleteType' => ['privates', 'ux.autocomplete.entity_type', 'getUx_Autocomplete_EntityTypeService', true],
        ], [
            'App\\Form\\AlbumType' => '?',
            'App\\Form\\ArtistType' => '?',
            'App\\Form\\AutocompleteField\\AlbumAutocompleteField' => '?',
            'App\\Form\\AutocompleteField\\ArtistAutocompleteField' => '?',
            'App\\Form\\AutocompleteField\\GenreAutocompleteField' => '?',
            'App\\Form\\AutocompleteField\\PlaylistAutocompleteField' => '?',
            'App\\Form\\AutocompleteField\\TrackAutocompleteField' => '?',
            'App\\Form\\GenreType' => '?',
            'App\\Form\\PlaylistType' => '?',
            'App\\Form\\TrackType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'Symfony\\UX\\Autocomplete\\Form\\BaseEntityAutocompleteType' => '?',
            'Symfony\\UX\\Autocomplete\\Form\\ParentEntityAutocompleteType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['form.type_extension.form.password_hasher'] ?? $container->load('getForm_TypeExtension_Form_PasswordHasherService'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.password.password_hasher'] ?? $container->load('getForm_TypeExtension_Password_PasswordHasherService'));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['ux.autocomplete.choice_type_extension'] ?? $container->load('getUx_Autocomplete_ChoiceTypeExtensionService'));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['ux.autocomplete.choice_type_extension'] ?? $container->load('getUx_Autocomplete_ChoiceTypeExtensionService'));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? self::getDataCollector_FormService($container))));
    }
}
