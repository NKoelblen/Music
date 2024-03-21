<?php

namespace App\Controller\Admin;

use App\Entity\Playlist;
use App\Form\PlaylistType;
use App\Repository\PlaylistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('admin/playlists', name: 'admin.playlists.')]
#[IsGranted('ROLE_USER')]
class PlaylistController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, PlaylistRepository $repository): Response
    {
        $playlists = $repository->findAll();
        return $this->render(
            'admin/playlist/index.html.twig',
            [
                'playlists' => $playlists
            ]
        );
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $playlist = new Playlist();
        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->persist($playlist);
            $em->flush();
            $this->addFlash('success', 'The playlist has been successfully created.');
            return $this->redirectToRoute('admin.playlists.index');
        endif;
        return $this->render(
            'admin/playlist/create.html.twig',
            [
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'update', methods: ['GET', 'POST'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function update(Playlist $playlist, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->flush();
            $this->addFlash('success', 'The playlist has been successfully updated.');
            return $this->redirectToRoute('admin.playlists.index');
        endif;
        return $this->render(
            'admin/playlist/update.html.twig',
            [
                'playlist' => $playlist,
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function delete(Playlist $playlist, EntityManagerInterface $em)
    {
        $em->remove($playlist);
        $em->flush();
        $this->addFlash('success', 'The playlist has been successfully deleted.');
        return $this->redirectToRoute('admin.playlists.index');
    }

}
