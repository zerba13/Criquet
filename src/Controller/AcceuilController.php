<?php

namespace App\Controller;

use App\Repository\IdentitéWebsiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    #[Route('/', name: 'app_acceuil')]
    public function index( IdentitéWebsiteRepository $idWebsiteRepo ): Response
    {
        $idWebsite = $idWebsiteRepo->find();

        return $this->render('accueil/index.html.twig', [
            'idWebsite' => $idWebsite,
        ]);
    }
}
