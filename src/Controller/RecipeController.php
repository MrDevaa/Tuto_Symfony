<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipeController extends AbstractController
{

    #[Route('/recette', name: 'recipe.index')]    
    public function index (Request $request): Response
    {
        return new Response('Recettes');
    }

    #[Route('/recette/{slug}-{id}', name: 'recipe.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]    
    public function show (Request $request, string $slug, int $id): Response
    {
        ## MAnière de return en Json
        // return new JsonResponse([
        //     'slug' => $slug
        // ]);
        ## 2 !manière de return Json
        // return $this->json([
        //     'slug' => $slug
        //  ]);

        return new Response('Recette : ' . $slug);
    }
}