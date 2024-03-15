<?php

namespace App\Controller\Admin;

use App\Entity\Song;
use App\Form\SongType;
use App\Repository\GenreRepository;
use App\Repository\SongRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('admin/song', name: 'admin.song.')]
class SongController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(
        Request $request,
        SongRepository $repository,
        GenreRepository $genreRepository
    ): Response {
        $songs = $repository->findAllSongs();
        return $this->render(
            'admin/song/index.html.twig',
            [
                'songs' => $songs
            ]
        );
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $song = new Song();
        $form = $this->createForm(SongType::class, $song);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->persist($song);
            $em->flush();
            $this->addFlash('success', 'The song has been successfully created.');
            return $this->redirectToRoute('admin.song.index');
        endif;
        return $this->render(
            'admin/song/create.html.twig',
            [
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function edit(Song $song, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(SongType::class, $song);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->flush();
            $this->addFlash('success', 'The song has been successfully updated.');
            return $this->redirectToRoute('admin.song.index');
        endif;
        return $this->render(
            'admin/song/edit.html.twig',
            [
                'song' => $song,
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function delete(Song $song, EntityManagerInterface $em)
    {
        $em->remove($song);
        $em->flush();
        $this->addFlash('success', 'The song has been successfully deleted.');
        return $this->redirectToRoute('admin.song.index');
    }

}
