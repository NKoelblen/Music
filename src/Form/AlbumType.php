<?php

namespace App\Form;

use App\Entity\Album;
use App\Entity\Artist;
use App\Form\AutocompleteField\ArtistAutocompleteField;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlbumType extends AbstractType
{
    public function __construct(private FormListenerFactory $formListenerFactory)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('slug', TextType::class, ['required' => false])
            ->add('type', TextType::class)
            ->add('artists', ArtistAutocompleteField::class, [
                'multiple' => 'true',
                'required' => false,
                'empty_data' => []
            ])
            ->add('release_date', TextType::class)
            ->add('relase_date_precision', TextType::class)
            ->add('label', TextType::class)
            ->add('spotify_id')
            ->add('liked', CheckboxType::class, ['required' => false])
            ->add('save', SubmitType::class)
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->formListenerFactory->autoslug('title'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Album::class,
        ]);
    }
}
