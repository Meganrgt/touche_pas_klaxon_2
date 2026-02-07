<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TrajetAddController extends AbstractController
{
    #[Route('/creer-trajet', name: 'creer-trajet')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'titre' => 'Créer un trajet',
            'contenu' => 'Bienvenue'
        ]);
    }
}