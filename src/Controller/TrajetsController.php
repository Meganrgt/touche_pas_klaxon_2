<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TrajetsController extends AbstractController
{
    #[Route('/trajets', name: 'trajets')]
    public function index(): Response
    {
        return $this->render('trajets.twig', [
            'titre' => 'Les trajets',
        ]);
    }
}