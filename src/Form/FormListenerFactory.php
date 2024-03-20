<?php
namespace App\Form;

use Symfony\Component\Form\Event\PostSetDataEvent;
use Symfony\Component\Form\Event\PostSubmitEvent;
use Symfony\Component\Form\Event\PreSetDataEvent;
use Symfony\Component\Form\Event\PreSubmitEvent;
use Symfony\Component\String\Slugger\AsciiSlugger;

class FormListenerFactory
{
    public function autoSlug(string $field): callable
    {
        return function (PreSubmitEvent $event) use ($field) {
            $data = $event->getData();
            if (empty ($data['slug'])):
                $slugger = new AsciiSlugger();
                $data['slug'] = strtolower($slugger->slug($data[$field]));
                $event->setData($data);
            endif;
        };
    }

    public function autoCreatedAt(): callable
    {
        return function (PostSubmitEvent $event) {
            $data = $event->getData();
            if (!$data->getId()):
                $data->setCreatedAt(new \DateTimeImmutable());
            endif;
        };
    }

    public function autoColor(): callable
    {
        return function (PostSetDataEvent $event) {
            $data = $event->getData();
            if (empty ($data['color'])):
                $data->setColor('#FFFFFF');
            endif;
        };
    }

}