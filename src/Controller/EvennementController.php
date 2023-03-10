<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvennementController extends AbstractController
{
    #[Route('/evennement', name: 'app_evennement')]
    public function index(): Response
    {
        return $this->render('evennement/index.html.twig', [
            'controller_name' => 'EvennementController',
        ]);
    }
}
