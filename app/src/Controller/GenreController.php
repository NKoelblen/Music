<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/genres', name: 'genres.')]
class GenreController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, GenreRepository $repository): Response
    {
        $primarygenres = $repository->findPrimaryGenres();
        $groups = $repository->findGroups();
        return $this->render(
            'genre/index.html.twig',
            [
                'genres' => $primarygenres,
                'groups' => $groups
            ]
        );
    }

    #[Route('/{slug}-{id}', name: 'single', requirements: ['slug' => Requirement::ASCII_SLUG, 'id' => Requirement::DIGITS])]
    public function single(Request $request, string $slug, int $id, GenreRepository $repository): Response
    {
        $genre = $repository->find($id);
        $parents = $repository->findGenreParents($id);
        $siblings = $repository->findGenreSiblings($id);
        $children = $repository->findGenreChildren($id);
        // dd($siblings);
        return $this->render(
            'genre/single.html.twig',
            [
                'genre' => $genre,
                'parents' => $parents,
                'siblings' => $siblings,
                'children' => $children
            ]
        );
    }
}
