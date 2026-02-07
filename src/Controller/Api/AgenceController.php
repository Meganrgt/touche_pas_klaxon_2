<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Agences;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;


final class AgenceController extends AbstractController
{
    #[Route('/api/agences', methods:["GET"])]
    public function index(EntityManagerInterface $em): JsonResponse
    {
        $agences = $em->getRepository(Agences::class)->findAll();
        
        return $this->json($agences);
    }

    #[Route('/api/agences', methods:["POST"])]
    public function create(Request $request,SerializerInterface $serializer,EntityManagerInterface $em): JsonResponse
    {
        $content = $request->getContent();
        $agence = $serializer->deserialize($content, Agences::class, "json");
        $em->persist($agence);
        $em->flush();
        return $this->json($agence, 201);
    }
    
    #[Route('/api/agences/{id}', methods:["GET"])]
    public function show(Agences $agence): JsonResponse
    {
        return $this->json($agence);
    }

    #[Route('/api/agences/{id}', methods:["PUT"])]
    public function update(Request $request,Agences $agence,SerializerInterface $serializer,EntityManagerInterface $em): JsonResponse
    {
        $serializer->deserialize($request->getContent(),Agences::class, "json",["object_to_populate"=>$agence]);
        $em->flush();
        return $this->json($agence, 201);
    }

    #[Route('/api/agences/{id}', methods:["DELETE"])]
    public function delete(User $user,EntityManagerInterface $em): JsonResponse
    {
        $em->remove($agence);
        $em->flush();
        return $this->json(null, 204);
    }

    
}
