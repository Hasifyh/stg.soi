<?php

namespace App\Controller;

use App\Entity\SituationData;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutController extends AbstractController
{
    #[Route('/ajout', name: 'ajout')]
    public function index(): Response
    {
        return $this->render('ajout/index.html.twig', [
            'controller_name' => 'AjoutController',
        ]);
    }

    #[Route('/ajouter', name: 'ajouter')]
    public function ajouter(): Response
    {
        $var = $this->getDoctrine()->getManager();
        $situationdata = new SituationData();
        for ($i = 0; $i < 10; $i++) {
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $situationdata->setLibelle("Compte " . $i)
                ->setMontant(mt_rand(1000000, 9000000))
                ->setNombre(0, 12)
                ->setCreatedAt($randomDate)
                ->setStatus("Validé");
        }
        $var->persist($situationdata);
        $var->flush();
        // $situationdata->setLibelle("Test");
        // $var->persist($situationdata);


        return $this->render('ajout/index.html.twig', [
            'controller_name' => 'AjoutController',
        ]);
    }
}
