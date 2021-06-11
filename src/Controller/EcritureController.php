<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SituationData;
use DateTime;
use App\Repository\SituationDataRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class EcritureController extends AbstractController
{
    #[Route('/ecriture', name: 'ecriture')]
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $repository = $this->getDoctrine()->getRepository(SituationData::class);

        // $donnees = null;
        if ($request->request->get('from') == null || $request->request->get('to') == null) {
            $donnees = $repository->findBy(['status' => 'Supprimé']);
        } else {
            $d1 = new DateTime($request->request->get('from'));
            $d2 = new DateTime($request->request->get('to'));
            if ($repository instanceof SituationDataRepository) $donnees = $repository->getByDate($d1, $d2);
        }

        $donnees = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1),
            20
        );
        // $donnees = $this->findAllBtwnDate(DateTime $d1)
        return $this->render('ecriture/index.html.twig', [
            'controller_name' => 'EcritureController',
            'donnees' => $donnees,
        ]);
    }

    #[Route('/EcritureEnAttente', name: 'EcritureEnAttente')]
    public function enAttente(): Response
    {
        /**
         * COURBE
         * ecriture en attente pendandt 7 mois
         * month_demandé1= month(d1);
         * month_demandé2= month(d2);
         * if(MONTH(createdAt)>=d1)
         * compter les ecritures en attente par mois des 7 mois m1; m2; m3; m4; m5; m6; m7
         * compter la totale des ecritures par mois
         *      total par mois = countBy(['id=>ecriture', 'status=>en attente', 'Month(createdAt)=1'])
         * => pourcentage = (m1 * 100)/total par mois
         * 
         * 
         */

        return $this->render('ecriture/EcritureEnAttente.html.twig', [
            'controller_name' => 'EcritureController',
        ]);
    }

    #[Route('/ecritureValide', name: 'ecritureValide')]
    public function ecritureValide(): Response
    {
        return $this->render('ecriture/ecritureValide.html.twig', [
            'controller_name' => 'EcritureController',
        ]);
    }

    // #[Route('/new', name: 'new')]
    // public function new(): Response
    // {
    //     $lesdates = new LesDates();
    //     $lesdates->setD1(new \DateTime('01/01/2019'));
    //     $lesdates->setD2(new \DateTime('tomorrow'));

    //     $form = $this->createFormBuilder($lesdates)
    //         ->add('d1', TextType::class)
    //         ->add('d2', DateType::class)
    //         ->add('save', SubmitType::class, ['label' => 'Filtrer'])
    //         ->getForm();

    //     return $this->render('ecriture/new.html.twig', [
    //         'controller_name' => 'EcritureController',
    //         'form' => $form->createView(),
    //     ]);
    // }
}
