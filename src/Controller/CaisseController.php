<?php

namespace App\Controller;

use App\Entity\SituationData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CaisseController extends AbstractController
{
    #[Route('/caisse', name: 'caisse')]
    public function index(): Response
    {
        return $this->render('caisse/index.html.twig', [
            'controller_name' => 'CaisseController',
        ]);
    }

    #[Route('/decadaire', name: 'decadaire')]
    public function decadaire(): Response
    {
        $repo = $this->getDoctrine()->getRepository(SituationData::class);
        $datas = $repo->findAll();
        return $this->render('caisse/decadaire.html.twig', [
            'controller_name' => 'CaisseController',
            'datas' => $datas,
        ]);
    }

    #[Route('/solde', name: 'solde')]
    public function solde(): Response
    {
        return $this->render('caisse/solde.html.twig', [
            'controller_name' => 'CaisseController',
        ]);
    }

    #[Route('/souscaisse', name: 'souscaisse')]
    public function souscaisse(): Response
    {
        return $this->render('caisse/souscaisse.html.twig', [
            'controller_name' => 'CaisseController',
        ]);
    }

    #[Route('/encaissement', name: 'encaissement')]
    public function encaissement(): Response
    {
        return $this->render('caisse/encaissement.html.twig', [
            'controller_name' => 'CaisseController',
        ]);
    }

    #[Route('/decaissement', name: 'decaissement')]
    public function decaissement(): Response
    {
        return $this->render('caisse/decaissement.html.twig', [
            'controller_name' => 'CaisseController',
        ]);
    }
}
