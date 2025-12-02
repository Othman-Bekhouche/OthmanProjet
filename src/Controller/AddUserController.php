<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AddUserController extends AbstractController
{
    #[Route('/add/user', name: 'app_add_user')]
    public function index(): Response
    {

        $user= new user (); 
        
        $userForm= $this->createForm(type:UserType::class, data:$user);
        


        return $this->render('add_user/index.html.twig', [
            'controller_name' => 'AddUserController',
        ]);
    }
    }
