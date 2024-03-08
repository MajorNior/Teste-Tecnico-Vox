<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authUlt): Response
    {
        
        $err = $authUlt->getLastAuthenticationError();
        
        $Username = $authUlt->getLastUsername();

        return $this->render('login/index.html.twig', [
            'erro' => $err,
            'Username' => $Username,
            'titulo' => '',
        ]);
    }
}
