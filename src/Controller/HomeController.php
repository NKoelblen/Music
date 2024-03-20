<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\PlaylistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route("/", "home")]
    function index(
        Request $request,
        PlaylistRepository $repository,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $hasher
    ): Response {
        // $user = new User();
        // $user->setUsername('')
        //     ->setPassword($hasher->hashPassword($user, ''))
        //     ->setRoles([]);
        // $em->persist($user);
        // $em->flush();
        $playlists = $repository->findAll();
        return $this->render(
            'home/index.html.twig',
            [
                'playlists' => $playlists
            ]
        );
    }
}
