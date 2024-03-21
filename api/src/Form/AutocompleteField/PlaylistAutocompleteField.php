<?php

namespace App\Form\AutocompleteField;

use App\Entity\Playlist;
use App\Repository\PlaylistRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Autocomplete\Form\AsEntityAutocompleteField;
use Symfony\UX\Autocomplete\Form\BaseEntityAutocompleteType;

#[AsEntityAutocompleteField]
class PlaylistAutocompleteField extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'class' => Playlist::class,
            'placeholder' => 'Choose a Playlist',
            'choice_label' => 'title',

            'query_builder' => function (PlaylistRepository $playlistRepository) {
                return $playlistRepository->createQueryBuilder('playlist');
            },
            // 'security' => 'ROLE_SOMETHING',
        ]);
    }

    public function getParent(): string
    {
        return BaseEntityAutocompleteType::class;
    }
}
