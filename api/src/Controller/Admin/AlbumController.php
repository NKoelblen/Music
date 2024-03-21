<?php

namespace App\Controller\Admin;

use App\Entity\Album;
use App\Form\AlbumType;
use App\Repository\AlbumRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('admin/albums', name: 'admin.albums.')]
#[IsGranted('ROLE_USER')]
class AlbumController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, AlbumRepository $repository): Response
    {
        $albums = $repository->findAll();
        return $this->render(
            'admin/album/index.html.twig',
            [
                'albums' => $albums
            ]
        );
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $album = new Album();
        $form = $this->createForm(AlbumType::class, $album);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->persist($album);
            $em->flush();
            $this->addFlash('success', 'The album has been successfully created.');
            return $this->redirectToRoute('admin.albums.index');
        endif;
        return $this->render(
            'admin/album/create.html.twig',
            [
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'update', methods: ['GET', 'POST'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function update(Album $album, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(AlbumType::class, $album);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->flush();
            $this->addFlash('success', 'The album has been successfully updated.');
            return $this->redirectToRoute('admin.albums.index');
        endif;
        return $this->render(
            'admin/album/update.html.twig',
            [
                'album' => $album,
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function delete(Album $album, EntityManagerInterface $em)
    {
        $em->remove($album);
        $em->flush();
        $this->addFlash('success', 'The album has been successfully deleted.');
        return $this->redirectToRoute('admin.albums.index');
    }

}
