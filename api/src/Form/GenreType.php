<?php

namespace App\Form;

use App\Entity\Genre;
use App\Form\AutocompleteField\GenreAutocompleteField;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\PreSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenreType extends AbstractType
{
    public function __construct(private FormListenerFactory $formListenerFactory, private EntityManagerInterface $entityManager)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('slug', TextType::class, ['required' => false])
            ->add('color', ColorType::class, ['attr' => ['value' => '#FFFFFF']])
            ->add('transverse', CheckboxType::class, ['required' => false])
            ->add('order_number')
            ->add('hierarchy')
            ->add('parents', GenreAutocompleteField::class, [
                'multiple' => 'true',
                'required' => false,
                'empty_data' => [],
            ])
            ->add('year')
            ->add('description')
            ->add('liked', CheckboxType::class, ['required' => false])
            ->add('save', SubmitType::class)
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->formListenerFactory->autoslug('title'))
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->autoHierarchy())
        ;
    }

    public function autoHierarchy(): callable
    {
        return function (PreSubmitEvent $event) {
            $repository = $this->entityManager->getRepository('App\Entity\Genre');
            $data = $event->getData();
            if ($data['order_number']):
                if (isset ($data['parents'])):
                    foreach ($data['parents'] as $parent):
                        $hierarchy[] = $repository->find($parent)->getHierarchy() . '.' . sprintf('%04u', $data['order_number']);
                    endforeach;
                    $data['hierarchy'] = implode(',', $hierarchy);
                else:
                    $data['hierarchy'] = sprintf('%04u', $data['order_number']);
                endif;
            elseif ($data['year']):
                if (isset ($data['parents'])):
                    foreach ($data['parents'] as $parent):
                        $hierarchy[] = $repository->find($parent)->getHierarchy() . '.' . sprintf('%04u', $data['year']);
                    endforeach;
                    $data['hierarchy'] = implode(',', $hierarchy);
                else:
                    $data['hierarchy'] = sprintf('%04u', $data['year']);
                endif;
            else:
                if (isset ($data['parents'])):
                    foreach ($data['parents'] as $parent):
                        $hierarchy[] = $repository->find($parent)->getHierarchy();
                    endforeach;
                    $data['hierarchy'] = implode(',', $hierarchy);
                else:
                    $data['hierarchy'] = null;
                endif;
            endif;
            $event->setData($data);
        };
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Genre::class,
        ]);
    }
}