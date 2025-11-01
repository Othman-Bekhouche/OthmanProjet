<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RequirementsController extends AbstractController
{
    #[Route('/requirements/{var}', name: 'app_requirements', requirements: ['var' => '\d+'])]
    public function index(int $var=20): Response
    {
        return new Response("hey".$var ."!");
    }
}
