<?php

namespace App\Controller;

use App\Repository\SongRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SongController extends AbstractController
{
    #[Route('/song', name: 'song.index')]
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

    #[Route('/song/{slug}-{id}', name: 'song.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
        return $this->render(
            'song/show.html.twig',
            [
                'slug' => $slug,
                'id' => $id
            ]
        );
    }
}
