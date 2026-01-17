<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        // 1. Définition des variables attendues par le template twig
        $text = "Hello This is home !"; 
        $tabYear = [2020, 2021, 2022, 2023]; 

        // 2. Passage des variables au template index.html.twig
        return $this->render('home/index.html.twig', [
            'text' => $text,    // Cette clé doit correspondre à {{ text }} dans Twig [cite: 17, 18]
            'years' => $tabYear, // Cette clé doit correspondre à years dans le {% for %} [cite: 82]
        ]);
    }
}