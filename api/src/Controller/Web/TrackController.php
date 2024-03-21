<?php

namespace App\Controller\Web;

use App\Entity\Track;
use App\Repository\GenreRepository;
use App\Repository\TrackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('web/tracks', name: 'web.tracks.')]
class TrackController extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route(name: 'index', methods: ['GET', 'POST'])]
    public function index(Request $request)
    {
        $tracks = $this->client->request(
            'GET',
            'http://music_httpd24/api/tracks'
            // 'https://jsonplaceholder.typicode.com/posts/1'
        );
        $tracks = $tracks->toArray();
        dd($tracks);
        return $this->render(
            'track/index.html.twig',
            [
                'tracks' => $tracks
            ]
        );
    }

    #[Route('/{slug}-{id}', name: 'single', methods: ['GET', 'POST'], requirements: ['slug' => Requirement::ASCII_SLUG, 'id' => Requirement::DIGITS])]
    public function single(Request $request, string $slug, int $id, SerializerInterface $serializer): Response
    {
        $track = json_decode($request->getContent(), true);
        //     $track = $this->client->request(
        //         'GET',
        //         //     'http://127.0.0.1/api/tracks/ . $slug . '-' . $id
        //         'https://jsonplaceholder.typicode.com/posts/1'
        //     );
        //     $track = $track->toArray();
        return $this->render(
            'track/single.html.twig',
            [
                'track' => $track,
            ]
        );
    }
}