<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use App\Repository\SongRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/genre', name: 'genre.')]
class GenreController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, GenreRepository $repository): Response
    {
        $genres = $repository->findAll();
        return $this->render(
            'genre/index.html.twig',
            [
                'genres' => $genres
            ]
        );
    }

    #[Route('/{slug}-{id}', name: 'show', requirements: ['id' => Requirement::POSITIVE_INT, 'slug' => Requirement::ASCII_SLUG])]
    public function show(Request $request, string $slug, int $id, GenreRepository $repository, SongRepository $songRepository): Response
    {
        $genre = $repository->find($id);
        if ($genre->getSlug() !== $slug) {
            return $this->redirectToRoute('genre.show', ['slug' => $genre->getSlug(), 'id' => $genre->getId()]);
        }
        return $this->render(
            'genre/show.html.twig',
            [
                'genre' => $genre,
            ]
        );
    }
}
