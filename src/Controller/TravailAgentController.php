<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravailAgentController extends AbstractController
{
    #[Route('/travail/agent', name: 'travail_agent')]
    public function index(): Response
    {
        return $this->render('travail_agent/index.html.twig', [
            'controller_name' => 'TravailAgentController',
        ]);
    }
    #[Route('/dossierEnCours', name: 'dossierEnCours')]
    public function dossierEnCours(): Response
    {
        return $this->render('travail_agent/dossierEnCours.html.twig', [
            'controller_name' => 'TravailAgentController',
        ]);
    }

    #[Route('/dossierTraite', name: 'dossierTraite')]
    public function dossierTraite(): Response
    {
        return $this->render('travail_agent/dossierTraite.html.twig', [
            'controller_name' => 'TravailAgentController',
        ]);
    }

    #[Route('/situationConge', name: 'situationConge')]
    public function situationConge(): Response
    {
        return $this->render('travail_agent/situationConge.html.twig', [
            'controller_name' => 'TravailAgentController',
        ]);
    }
}
