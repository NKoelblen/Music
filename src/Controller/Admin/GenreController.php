<?php

namespace App\Controller\Admin;

use App\Entity\Genre;
use App\Form\GenreType;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('admin/genre', name: 'admin.genre.')]
#[IsGranted('ROLE_USER')]
class GenreController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, GenreRepository $repository): Response
    {
        $genres = $repository->findAll();
        return $this->render(
            'admin/genre/index.html.twig',
            [
                'genres' => $genres
            ]
        );
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->persist($genre);
            $em->flush();
            $this->addFlash('success', 'The genre has been successfully created.');
            return $this->redirectToRoute('admin.genre.index');
        endif;
        return $this->render(
            'admin/genre/create.html.twig',
            [
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function edit(Genre $genre, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->flush();
            $this->addFlash('success', 'The genre has been successfully updated.');
            return $this->redirectToRoute('admin.genre.index');
        endif;
        return $this->render(
            'admin/genre/edit.html.twig',
            [
                'genre' => $genre,
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function delete(Genre $genre, EntityManagerInterface $em)
    {
        $em->remove($genre);
        $em->flush();
        $this->addFlash('success', 'The genre has been successfully deleted.');
        return $this->redirectToRoute('admin.genre.index');
    }

}
