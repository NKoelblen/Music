<?php

namespace App\Controller;

use App\Repository\AlbumRepository;
use App\Repository\TrackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/albums', name: 'albums.')]
class AlbumController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, AlbumRepository $repository): Response
    {
        $albums = $repository->findAll();
        return $this->render(
            'album/index.html.twig',
            [
                'albums' => $albums
            ]
        );
    }

    #[Route('/{slug}-{id}', name: 'single', requirements: ['slug' => Requirement::ASCII_SLUG, 'id' => Requirement::DIGITS])]
    public function single(Request $request, string $slug, int $id, AlbumRepository $repository, TrackRepository $trackRepository): Response
    {
        $album = $repository->find($id);
        return $this->render(
            'album/single.html.twig',
            [
                'album' => $album,
            ]
        );
    }
}
