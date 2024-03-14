<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SongController extends AbstractController
{
    #[Route('/song', name: 'song.index')]
    public function index(Request $request): Response
    {
    }

    #[Route('/song/{slug}-{id}', name: 'song.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
        return new Response('Song: ' . $slug);
    }
}
