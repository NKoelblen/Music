<?php

namespace App\Form;

use App\Entity\Album;
use App\Entity\Artist;
use App\Entity\Genre;
use App\Entity\Playlist;
use App\Entity\Track;
use App\Form\AutocompleteField\AlbumAutocompleteField;
use App\Form\AutocompleteField\ArtistAutocompleteField;
use App\Form\AutocompleteField\GenreAutocompleteField;
use App\Form\AutocompleteField\PlaylistAutocompleteField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\PreSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Positive;

class TrackType extends AbstractType
{

    public function __construct(private FormListenerFactory $formListenerFactory)
    {
    }

    public function autoMood(): callable
    {
        return function (PreSubmitEvent $event) {
            $data = $event->getData();
            switch (true) {
                case ($data['valence'] <= 0.2): {
                    switch (true) {
                        case ($data['energy'] <= 0.2): {
                            $data['mood'] = "Somber";
                            break;
                        }
                        case ($data['energy'] <= 0.4): {
                            $data['mood'] = "Gritty";
                            break;
                        }
                        case ($data['energy'] <= 0.6): {
                            $data['mood'] = "Serious";
                            break;
                        }
                        case ($data['energy'] <= 0.8): {
                            $data['mood'] = "Brooding";
                            break;
                        }
                        case ($data['energy'] <= 1): {
                            $data['mood'] = "Aggressive";
                            break;
                        }
                    }
                }
                case ($data['valence'] <= 0.4): {
                    switch (true) {
                        case ($data['energy'] <= 0.2): {
                            $data['mood'] = "Melancholy";
                            break;
                        }
                        case ($data['energy'] <= 0.4): {
                            $data['mood'] = "Cool";
                            break;
                        }
                        case ($data['energy'] <= 0.6): {
                            $data['mood'] = "Yearning";
                            break;
                        }
                        case ($data['energy'] <= 0.8): {
                            $data['mood'] = "Urgent";
                            break;
                        }
                        case ($data['energy'] <= 1): {
                            $data['mood'] = "Defiant";
                            break;
                        }
                    }
                }
                case ($data['valence'] <= 0.6): {
                    switch (true) {
                        case ($data['energy'] <= 0.2): {
                            $data['mood'] = "Sentimental";
                            break;
                        }
                        case ($data['energy'] <= 0.4): {
                            $data['mood'] = "Sophisticated";
                            break;
                        }
                        case ($data['energy'] <= 0.6): {
                            $data['mood'] = "Sensual";
                            break;
                        }
                        case ($data['energy'] <= 0.8): {
                            $data['mood'] = "Fiery";
                            break;
                        }
                        case ($data['energy'] <= 1): {
                            $data['mood'] = "Energizing";
                            break;
                        }
                    }
                }
                case ($data['valence'] <= 0.8): {
                    switch (true) {
                        case ($data['energy'] <= 0.2): {
                            $data['mood'] = "Tender";
                            break;
                        }
                        case ($data['energy'] <= 0.4): {
                            $data['mood'] = "Romantic";
                            break;
                        }
                        case ($data['energy'] <= 0.6): {
                            $data['mood'] = "Empowering";
                            break;
                        }
                        case ($data['energy'] <= 0.8): {
                            $data['mood'] = "Stirring";
                            break;
                        }
                        case ($data['energy'] <= 1): {
                            $data['mood'] = "Rowdy";
                            break;
                        }
                    }
                }
                case ($data['valence'] <= 1): {
                    switch (true) {
                        case ($data['energy'] <= 0.2): {
                            $data['mood'] = "Peaceful";
                            break;
                        }
                        case ($data['energy'] <= 0.4): {
                            $data['mood'] = "Easygoing";
                            break;
                        }
                        case ($data['energy'] <= 0.6): {
                            $data['mood'] = "Upbeat";
                            break;
                        }
                        case ($data['energy'] <= 0.8): {
                            $data['mood'] = "Lively";
                            break;
                        }
                        case ($data['energy'] <= 1): {
                            $data['mood'] = "Excited";
                            break;
                        }
                    }
                }
            }
            $event->setData($data);
        };
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('slug', TextType::class, ['required' => false])
            ->add('duration', IntegerType::class, [
                'constraints' => [new Positive()],
                'attr' => ['min' => 1],
                'empty_data' => 1
            ])
            ->add('artists', ArtistAutocompleteField::class, [
                'multiple' => 'true',
                'required' => false,
                'empty_data' => []
            ])
            ->add('album', AlbumAutocompleteField::class)
            ->add('disc_number', IntegerType::class, [
                'constraints' => [new Positive()],
                'attr' => ['min' => 1],
                'empty_data' => 1
            ])
            ->add('track_number', IntegerType::class, [
                'constraints' => [new Positive()],
                'attr' => ['min' => 1],
                'empty_data' => 1
            ])
            ->add('genres', GenreAutocompleteField::class, [
                'multiple' => 'true',
                'required' => false,
                'empty_data' => []
            ])
            ->add('spotify_id')
            ->add('valence')
            ->add('energy')
            ->add('loudness')
            ->add('danceability')
            ->add('speechiness')
            ->add('instrumentalness')
            ->add('accousticness')
            ->add('liveness')
            ->add('music_key')
            ->add('modality')
            ->add('tempo')
            ->add('time_signature')
            ->add('liked', CheckboxType::class, ['required' => false])
            ->add('playlist', PlaylistAutocompleteField::class, [
                'multiple' => 'true',
                'required' => false,
                'empty_data' => []
            ])
            ->add('save', SubmitType::class)
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->formListenerFactory->autoslug('title'))
            ->addEventListener(FormEvents::PRE_SUBMIT, $this->autoMood())
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Track::class,
            'allow_extra_fields' => true
        ]);
    }
}
