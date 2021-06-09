<?php

namespace App\Controller;

use App\Entity\SituationData;
use App\Repository\SituationDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    // #[Route('/test2', name: 'test2')]
    // public function index2(Request $request): Response
    // {

    //     $data = $request->request->all();
    //     $d1 = strtotime($data['from']);
    //     $d2 = strtotime($data['to']);
    //     $repository = $this->getDoctrine()->getRepository(SituationData::class);
    //     $donnees = $repository->getByDate($d1, $d2);
    //     // $donnees = $this->findAllBtwnDate(DateTime $d1)

    //     return $this->render('test/index2.html.twig', [
    //         'controller_name' => 'TestController',
    //         'donnees' => $donnees,
    //     ]);
    // }



    #[Route('/test', name: 'test')]
    public function index(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(SituationData::class);
        //$nombre = $repository->findBy(['status' => 'Supprimé']);
        if ($repository instanceof SituationDataRepository)
            $nombreCompte = $repository->countBy(['status' => 'Supprimé']);
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'nombre' => $nombreCompte
        ]);
    }
}
