<?php

namespace App\Controller\Admin;

use App\Entity\Artist;
use App\Form\ArtistType;
use App\Repository\ArtistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('admin/artists', name: 'admin.artists.')]
#[IsGranted('ROLE_USER')]
class ArtistController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, ArtistRepository $repository): Response
    {
        $artists = $repository->findAll();
        return $this->render(
            'admin/artist/index.html.twig',
            [
                'artists' => $artists
            ]
        );
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $artist = new Artist();
        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->persist($artist);
            $em->flush();
            $this->addFlash('success', 'The artist has been successfully created.');
            return $this->redirectToRoute('admin.artists.index');
        endif;
        return $this->render(
            'admin/artist/create.html.twig',
            [
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'update', methods: ['GET', 'POST'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function update(Artist $artist, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->flush();
            $this->addFlash('success', 'The artist has been successfully updated.');
            return $this->redirectToRoute('admin.artists.index');
        endif;
        return $this->render(
            'admin/artist/update.html.twig',
            [
                'artist' => $artist,
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function delete(Artist $artist, EntityManagerInterface $em)
    {
        $em->remove($artist);
        $em->flush();
        $this->addFlash('success', 'The artist has been successfully deleted.');
        return $this->redirectToRoute('admin.artists.index');
    }

}
