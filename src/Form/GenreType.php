<?php

namespace App\Form;

use App\Entity\Genre;
use App\Form\Type\WhiteColorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenreType extends AbstractType
{
    public function __construct(private FormListenerFactory $formListenerFactory)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('slug', TextType::class, ['required' => false])
            ->add('color', ColorType::class, [
                'attr' => ['value' => '#FFFFFF']
            ])
            ->add('transverse', CheckboxType::class, ['required' => false])
            ->add('order_number')
            ->add('parent', EntityType::class, [
                'class' => Genre::class,
                'choice_label' => 'title',
                'multiple' => true,
                'required' => false
            ])
            ->add('year')
            ->add('description')
            ->add('liked', CheckboxType::class, ['required' => false])
            ->add('save', SubmitType::class)
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->formListenerFactory->autoslug('title'))
            // ->addEventListener(FormEvents::POST_SET_DATA, $this->formListenerFactory->autoColor())
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Genre::class,
        ]);
    }
}