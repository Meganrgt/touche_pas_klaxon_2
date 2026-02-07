<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;


final class UserController extends AbstractController
{
    #[Route('/api/users', methods:["GET"])]
    public function index(EntityManagerInterface $em): JsonResponse
    {
        $users = $em->getRepository(User::class)->findAll();
        
        return $this->json($users);
    }

    #[Route('/api/users', methods:["POST"])]
    public function create(Request $request,SerializerInterface $serializer,EntityManagerInterface $em): JsonResponse
    {
        $content = $request->getContent();
        $user = $serializer->deserialize($content, User::class, "json");
        $em->persist($user);
        $em->flush();
        return $this->json($user, 201);
    }
    
    #[Route('/api/users/{id}', methods:["GET"])]
    public function show(User $user): JsonResponse
    {
        return $this->json($user);
    }

    #[Route('/api/users/{id}', methods:["PUT"])]
    public function update(Request $request,User $user,SerializerInterface $serializer,EntityManagerInterface $em): JsonResponse
    {
        $serializer->deserialize($request->getContent(),User::class, "json",["object_to_populate"=>$user]);
        $em->flush();
        return $this->json($user, 201);
    }

    #[Route('/api/users/{id}', methods:["DELETE"])]
    public function delete(User $user,EntityManagerInterface $em): JsonResponse
    {
        $em->remove($user);
        $em->flush();
        return $this->json(null, 204);
    }

    
}
