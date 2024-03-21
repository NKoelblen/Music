<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use App\Repository\TrackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/artists', name: 'artists.')]
class ArtistController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, ArtistRepository $repository): Response
    {
        $artists = $repository->findAll();
        return $this->render(
            'artist/index.html.twig',
            [
                'artists' => $artists
            ]
        );
    }

    #[Route('/{slug}-{id}', name: 'single', requirements: ['slug' => Requirement::ASCII_SLUG, 'id' => Requirement::DIGITS])]
    public function single(Request $request, string $slug, int $id, ArtistRepository $repository, TrackRepository $trackRepository): Response
    {
        $artist = $repository->find($id);
        return $this->render(
            'artist/single.html.twig',
            [
                'artist' => $artist,
            ]
        );
    }
}
