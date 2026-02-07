<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Trajets;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;


final class TrajetController extends AbstractController
{
    #[Route('/api/trajets', methods:["GET"])]
    public function index(EntityManagerInterface $em): JsonResponse
    {
        $trajets = $em->getRepository(Trajets::class)->findAll();
        
        return $this->json($trajets);
    }

    #[Route('/api/trajets', methods:["POST"])]
    public function create(Request $request,SerializerInterface $serializer,EntityManagerInterface $em): JsonResponse
    {
        $content = $request->getContent();
        $trajet = $serializer->deserialize($content, Trajets::class, "json");
        $em->persist($trajet);
        $em->flush();
        return $this->json($trajet, 201);
    }
    
    #[Route('/api/trajets/{id}', methods:["GET"])]
    public function show(Trajets $trajet): JsonResponse
    {
        return $this->json($trajet);
    }

    #[Route('/api/trajets/{id}', methods:["PUT"])]
    public function update(Request $request,Agences $trajet,SerializerInterface $serializer,EntityManagerInterface $em): JsonResponse
    {
        $serializer->deserialize($request->getContent(),Trajets::class, "json",["object_to_populate"=>$trajet]);
        $em->flush();
        return $this->json($trajet, 201);
    }

    #[Route('/api/trajets/{id}', methods:["DELETE"])]
    public function delete(User $trajet,EntityManagerInterface $em): JsonResponse
    {
        $em->remove($trajet);
        $em->flush();
        return $this->json(null, 204);
    }

    
}
