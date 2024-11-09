<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {

    #[Route("/", name: "home")]
    function index (Request $request): Response {
        
        return new Response('salut je suis ' . $request->query->get('name', 'Iconnu'));
    }
}

## Analyser un obj par ex:
## dump() //  vardump() amélioré 
## dd() // // vardumps amélioré et die;