<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InterventionController extends AbstractController
{
    #[Route('/intervention', name: 'app_intervention')]
    public function index(): Response
    {


        return $this->render('intervention/index.html.twig', [
        ]);
    }
}
