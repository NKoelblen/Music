<?php

namespace App\Form\AutocompleteField;

use App\Entity\Album;
use App\Repository\AlbumRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Autocomplete\Form\AsEntityAutocompleteField;
use Symfony\UX\Autocomplete\Form\BaseEntityAutocompleteType;

#[AsEntityAutocompleteField]
class AlbumAutocompleteField extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'class' => Album::class,
            'placeholder' => 'Choose an Album',
            'choice_label' => 'title',

            'query_builder' => function (AlbumRepository $albumRepository) {
                return $albumRepository->createQueryBuilder('album');
            },
            // 'security' => 'ROLE_SOMETHING',
        ]);
    }

    public function getParent(): string
    {
        return BaseEntityAutocompleteType::class;
    }
}
