<?php

namespace App\Form;

use App\Entity\Song;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\PostSubmitEvent;
use Symfony\Component\Form\Event\PreSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\String\Slugger\AsciiSlugger;

class SongType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('slug', TextType::class, ['required' => false])
            ->add('link')
            ->add('save', SubmitType::class)
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->autoslug(...))
            ->addEventListener(FormEvents::POST_SUBMIT, $this->autoCreatedAt(...))
        ;
    }

    public function autoslug(PreSubmitEvent $event): void
    {
        $data = $event->getData();
        if (empty($date['slug'])):
            $slugger = new AsciiSlugger();
            $data['slug'] = strtolower($slugger->slug($data['title']));
            $event->setData($data);
        endif;
    }

    public function autoCreatedAt(PostSubmitEvent $event): void
    {
        $data = $event->getData();
        if (!($data instanceof Song)):
            return;
        endif;
        if (!$data->getId()):
            $data->setCreatedAt(new \DateTimeImmutable());
        endif;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Song::class,
        ]);
    }
}
