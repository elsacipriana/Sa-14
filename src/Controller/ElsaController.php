<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElsaController extends AbstractController
{
    #[Route('/elsa', name: 'app_elsa')]
    public function index(): Response
    {
        return $this->render('elsa/index.html.twig', [
            'controller_name' => 'ElsaController',
        ]);
    }

    #[Route('/elsa', name: 'app_elsa')]
    public function home()
    {
        return $this->render('elsa/home.html.twig', [
            
        ]);
    }
}
