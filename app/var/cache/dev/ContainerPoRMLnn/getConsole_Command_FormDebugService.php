<?php

namespace ContainerPoRMLnn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), ['Symfony\\Component\\Form\\Extension\\Core\\Type', 'App\\Form', 'App\\Form\\AutocompleteField', 'Symfony\\Bridge\\Doctrine\\Form\\Type', 'Symfony\\UX\\Autocomplete\\Form'], ['App\\Form\\AlbumType', 'App\\Form\\ArtistType', 'App\\Form\\AutocompleteField\\AlbumAutocompleteField', 'App\\Form\\AutocompleteField\\ArtistAutocompleteField', 'App\\Form\\AutocompleteField\\GenreAutocompleteField', 'App\\Form\\AutocompleteField\\PlaylistAutocompleteField', 'App\\Form\\AutocompleteField\\TrackAutocompleteField', 'App\\Form\\GenreType', 'App\\Form\\PlaylistType', 'App\\Form\\TrackType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'Symfony\\UX\\Autocomplete\\Form\\BaseEntityAutocompleteType', 'Symfony\\UX\\Autocomplete\\Form\\ParentEntityAutocompleteType'], ['Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\FormTypePasswordHasherExtension', 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\PasswordTypePasswordHasherExtension', 'Symfony\\UX\\Autocomplete\\Form\\AutocompleteChoiceTypeExtension'], ['Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? self::getDebug_FileLinkFormatterService($container)));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
