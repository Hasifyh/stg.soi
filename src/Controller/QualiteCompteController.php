<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QualiteCompteController extends AbstractController
{
    #[Route('/qualite/compte', name: 'qualite_compte')]
    public function index(): Response
    {
        return $this->render('qualite_compte/index.html.twig', [
            'controller_name' => 'QualiteCompteController',
        ]);
    }

    #[Route('/qualite/compte', name: 'qualite_compte')]
    public function recup(): Response
    {
        return $this->render('qualite_compte/FILTRE.html.twig', [
            'controller_name' => 'QualiteCompteController',
        ]);
    }
}
