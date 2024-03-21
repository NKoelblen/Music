<?php

namespace App\Controller\Admin;

use App\Entity\Track;
use App\Form\TrackType;
use App\Repository\GenreRepository;
use App\Repository\TrackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('admin/tracks', name: 'admin.tracks.')]
#[IsGranted('ROLE_USER')]
class TrackController extends AbstractController
{
    #[Route(name: 'index')]
    public function index(Request $request, TrackRepository $repository, GenreRepository $genreRepository): Response
    {
        $tracks = $repository->findAll();
        return $this->render(
            'admin/track/index.html.twig',
            [
                'tracks' => $tracks
            ]
        );
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $track = new Track();
        $form = $this->createForm(TrackType::class, $track);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->persist($track);
            $em->flush();
            $this->addFlash('success', 'The track has been successfully added.');
            return $this->redirectToRoute('admin.tracks.index');
        endif;
        return $this->render(
            'admin/track/create.html.twig',
            [
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'update', methods: ['GET', 'POST'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function update(Track $track, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(TrackType::class, $track);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()):
            $em->flush();
            $this->addFlash('success', 'The track has been successfully updated.');
            return $this->redirectToRoute('admin.tracks.index');
        endif;
        return $this->render(
            'admin/track/update.html.twig',
            [
                'track' => $track,
                'form' => $form
            ]
        );
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'], requirements: ['id' => Requirement::POSITIVE_INT])]
    public function delete(Track $track, EntityManagerInterface $em)
    {
        $em->remove($track);
        $em->flush();
        $this->addFlash('success', 'The track has been successfully deleted.');
        return $this->redirectToRoute('admin.tracks.index');
    }

}
