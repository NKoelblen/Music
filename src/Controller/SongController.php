<?php

namespace App\Controller;

use App\Entity\Song;
use App\Form\SongType;
use App\Repository\SongRepository;
use Doctrine\ORM\EntityManagerInterface;
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
    public function show(Request $request, string $slug, int $id, SongRepository $repository): Response
    {
        $song = $repository->find($id);
        if ($song->getSlug() !== $slug) {
            return $this->redirectToRoute('song.show', ['slug' => $song->getSlug(), 'id' => $song->getId()]);
        }
        return $this->render(
            'song/show.html.twig',
            [
                'song' => $song,
            ]
        );
    }

    #[Route('/song/{id}-edit', name: 'song.edit', methods: ['GET', 'POST'])]
    public function edit(Song $song, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(SongType::class, $song);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->flush();
            $this->addFlash('success', 'The song has been successfully updated.');
            return $this->redirectToRoute('song.index');
        endif;
        return $this->render(
            'song/edit.html.twig',
            [
                'song' => $song,
                'form' => $form
            ]
        );
    }

    #[Route('/song/create', name: 'song.create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $song = new Song();
        $form = $this->createForm(SongType::class, $song);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->persist($song);
            $em->flush();
            $this->addFlash('success', 'The song has been successfully created.');
            return $this->redirectToRoute('song.index');
        endif;
        return $this->render(
            'song/create.html.twig',
            [
                'form' => $form
            ]
        );
    }

    #[Route('/song/{id}*delete', name: 'song.delete', methods: ['DELETE'])]
    public function delete(Song $song, EntityManagerInterface $em)
    {
        $em->remove($song);
        $em->flush();
        $this->addFlash('success', 'The song has been successfully deleted.');
        return $this->redirectToRoute('song.index');
    }

}
