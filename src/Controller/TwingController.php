<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TwingController extends AbstractController
{
    #[Route('/twing/{var}', name: 'app_twing')]
    public function index( string $var): Response
    {
        return $this->render('twing/index.html.twig', [
            'var' => $var ,
        ]);
    }
}
