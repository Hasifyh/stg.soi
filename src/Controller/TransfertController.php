<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransfertController extends AbstractController
{
    #[Route('/transfert', name: 'transfert')]
    public function index(): Response
    {
        return $this->render('transfert/index.html.twig', [
            'controller_name' => 'TransfertController',
        ]);
    }

    #[Route('/transfertAttenteCouverture', name: 'transfertAttenteCouverture')]
    public function transfertAttente(): Response
    {
        return $this->render('transfert/transfertAttenteCouverture.html.twig', [
            'controller_name' => 'TransfertController',
        ]);
    }

    #[Route('/couvertureEffectue', name: 'couvertureEffectue')]
    public function couvertureEffectue(): Response
    {
        return $this->render('transfert/couvertureEffectue.html.twig', [
            'controller_name' => 'TransfertController',
        ]);
    }

    #[Route('/attenteTransfert', name: 'attenteTransfert')]
    public function attenteTransfert(): Response
    {
        return $this->render('transfert/attenteTransfert.html.twig', [
            'controller_name' => 'TransfertController',
        ]);
    }

    #[Route('/transfertEnvoye', name: 'transfertEnvoye')]
    public function transfertEnvoye(): Response
    {
        return $this->render('transfert/transfertEnvoye.html.twig', [
            'controller_name' => 'TransfertController',
        ]);
    }

    #[Route('/tableauRecapitulatif', name: 'tableauRecapitulatif')]
    public function tableauRecapitulatif(): Response
    {
        return $this->render('transfert/tableauRecapitulatif.html.twig', [
            'controller_name' => 'TransfertController',
        ]);
    }
}
