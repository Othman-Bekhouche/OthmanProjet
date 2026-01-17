<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\User;

class AddUserController extends AbstractController
{
    #[Route('/add-user', name: 'app_add_user')]
    public function index(): Response
    {
        $user = new User();
        $userForm = $this->createForm(UserType::class, $user);

        return $this->render('add_user/index.html.twig', [
            "userForm" => $userForm
        ]);
    }
}
