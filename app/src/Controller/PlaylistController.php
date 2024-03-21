<?php

namespace App\Controller;

use App\Repository\PlaylistRepository;
use App\Repository\TrackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/playlists', name: 'playlists.')]
class PlaylistController extends AbstractController
{
    #[Route('/{slug}-{id}', name: 'single', requirements: ['slug' => Requirement::ASCII_SLUG, 'id' => Requirement::DIGITS])]
    public function single(Request $request, string $slug, int $id, PlaylistRepository $repository, TrackRepository $trackRepository): Response
    {
        $playlist = $repository->find($id);
        return $this->render(
            'playlist/single.html.twig',
            [
                'playlist' => $playlist,
            ]
        );
    }
}
