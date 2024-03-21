<?php

namespace App\Controller\API;

use App\Repository\GenreRepository;
use App\Repository\TrackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('api/tracks', name: 'api.tracks.')]
class TrackController extends AbstractController
{
    #[Route(name: 'index', methods: ['GET'])]
    public function index(Request $request, TrackRepository $repository): Response
    {
        $tracks = $repository->findAll();
        return $this->json($tracks, Response::HTTP_OK, [], [
            'groups' => ['tracks.index']
        ]);
    }

    #[Route('/{id}', name: 'single', methods: ['GET'], requirements: ['id' => Requirement::DIGITS])]
    public function single(Request $request, int $id, TrackRepository $repository, GenreRepository $genreRepository): Response
    {
        $track = $repository->find($id);
        return $this->json($track, Response::HTTP_OK, [], [
            'groups' => ['tracks.index', 'tracks.single']
        ]);
    }

}