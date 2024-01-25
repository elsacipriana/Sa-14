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



    #[Route('/home', name: 'app_home')]

    public function home()

    {

        return $this->render('elsa/home.html.twig', [

            

        ]);

    }



    #[Route('/elsa/loisirs', name: 'Loisirs')]

    public function loisirs()

    {

        return $this->render('elsa/loisirs.html.twig', [

            

        ]);

    }



    #[Route('/elsa/competences', name: 'Competences')]

    public function competences()

    {

        return $this->render('elsa/competences.html.twig', [

            

        ]);

    }

}
