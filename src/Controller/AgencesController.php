<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AgencesController extends AbstractController
{
    #[Route('/agences', name: 'agences')]
    public function index(): Response
    {
        fetch('/api/agences');
        return $this->render('agences.twig', [
            'titre' => 'Les Agences',
        ]);
    }
}
