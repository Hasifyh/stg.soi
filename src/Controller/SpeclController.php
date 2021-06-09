<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpeclController extends AbstractController
{
    #[Route('/specl', name: 'specl')]
    public function index(): Response
    {
        return $this->render('specl/index.html.twig', [
            'controller_name' => 'SpeclController',
        ]);
    }
}
