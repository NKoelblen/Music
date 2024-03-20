<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use App\Repository\TrackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/tracks', name: 'tracks.')]
class TrackController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, TrackRepository $repository): Response
    {
        $tracks = $repository->findAll();
        return $this->render(
            'track/index.html.twig',
            [
                'tracks' => $tracks
            ]
        );
    }
    #[Route('/{slug}-{id}', name: 'single', requirements: ['slug' => Requirement::ASCII_SLUG, 'id' => Requirement::DIGITS])]
    public function single(Request $request, string $slug, int $id, TrackRepository $repository, GenreRepository $genreRepository): Response
    {
        $track = $repository->find($id);
        return $this->render(
            'track/single.html.twig',
            [
                'track' => $track,
            ]
        );
    }

}