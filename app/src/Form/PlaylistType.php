<?php

namespace App\Form;

use App\Entity\Playlist;
use App\Entity\Track;
use App\Form\AutocompleteField\TrackAutocompleteField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlaylistType extends AbstractType
{
    public function __construct(private FormListenerFactory $formListenerFactory)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('slug', \Symfony\Component\Form\Extension\Core\Type\TextType::class, ['required' => false])
            ->add('tracks', TrackAutocompleteField::class, [
                'multiple' => 'true',
                'required' => false,
                'empty_data' => [],
                'by_reference' => false
            ])
            ->add('save', SubmitType::class)
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->formListenerFactory->autoslug('title'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Playlist::class,
        ]);
    }
}
