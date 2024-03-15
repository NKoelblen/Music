<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use App\Repository\SongRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/song', name: 'song.')]
class SongController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, SongRepository $repository): Response
    {
        $songs = $repository->findAll();
        return $this->render(
            'song/index.html.twig',
            [
                'songs' => $songs
            ]
        );
    }

    #[Route('/{slug}-{id}', name: 'show', requirements: ['id' => Requirement::POSITIVE_INT, 'slug' => Requirement::ASCII_SLUG])]
    public function show(Request $request, string $slug, int $id, SongRepository $repository, GenreRepository $genreRepository): Response
    {
        $song = $repository->findSong($id);
        return $this->render(
            'song/show.html.twig',
            [
                'song' => $song[0],
            ]
        );
    }
}
