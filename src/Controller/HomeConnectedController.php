<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeConnectedController extends AbstractController
{
    #[Route('/home', name: 'home-connected')]
    public function index(): Response
    {
        return $this->render('home-connected.twig', [
            'titre' => 'Home connecté',
            'contenu' => 'Bienvenue'
        ]);
    }
}