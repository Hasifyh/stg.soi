<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MandatementController extends AbstractController
{
    #[Route('/mandatement', name: 'mandatement')]
    public function index(): Response
    {
        return $this->render('mandatement/index.html.twig', [
            'controller_name' => 'MandatementController',
        ]);
    }

    #[Route('/mandatRecupere', name: 'mandatRecupere')]
    public function mandatementRecupere(): Response
    {
        return $this->render('mandatement/mandatRecupere.html.twig', [
            'controller_name' => 'MandatementController',
        ]);
    }

    #[Route('/mandatEnCours', name: 'mandatEnCours')]
    public function mandatEnCours(): Response
    {
        return $this->render('mandatement/mandatEnCours.html.twig', [
            'controller_name' => 'MandatementController',
        ]);
    }

    #[Route('/mandatVise', name: 'mandatVise')]
    public function mandatVise(): Response
    {
        return $this->render('mandatement/mandatVise.html.twig', [
            'controller_name' => 'MandatementController',
        ]);
    }

    #[Route('/mandatValide', name: 'mandatValide')]
    public function mandatValide(): Response
    {
        return $this->render('mandatement/mandatValide.html.twig', [
            'controller_name' => 'MandatementController',
        ]);
    }
}
