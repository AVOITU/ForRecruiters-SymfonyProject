<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api', name: 'api_')]
class EventController extends AbstractController
{

    #[Route('/list', name: 'listApi')]
    public function listApi(SerializerInterface $serializer,
                            PokemonRepository $pokemonRepository,
    ):JsonResponse
    {
        $pokemons=$pokemonRepository->findAll();
        $result=$serializer-> serialize($pokemons,'json',['groups'=>'getPokemons']);

        $headers=[];
        $isJson=true;

//        return new JsonResponse($result,
//            Response::HTTP_OK,
//            $headers,
//            $isJson);
//    }
        return $this->json($pokemons,
            Response::HTTP_OK,
            $headers,['groups'=>'getPokemons']);
    }
}