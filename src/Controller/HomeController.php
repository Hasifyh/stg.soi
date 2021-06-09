<?php

namespace App\Controller;

use App\Entity\SituationData;
use App\Repository\SituationDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(SituationData::class);
        //$nombre = $repository->findBy(['status' => 'Supprimé']);
        if ($repository instanceof SituationDataRepository) {
            $supprime = $repository->countBy(['id' => 16, 'status' => 'Supprimé']);
            $validé = $repository->countBy(['status' => 'Validé']);
            $dévalidé = $repository->countBy(['status' => 'Dévalidé']);
            $attente = $repository->countBy(['status' => 'En attente']);
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'supprime' => $supprime,
            'validé' => $validé,
            'dévalidé' => $dévalidé,
            'attente' => $attente,
        ]);
    }
}
