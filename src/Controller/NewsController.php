<?php

namespace App\Controller;

use App\Repository\ActualityRepository;
use App\Repository\IdentitéWebsiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsController extends AbstractController
{
    #[Route('/actualite', name: 'app_news')]
    public function index(ActualityRepository $ActualityRepo, IdentitéWebsiteRepository $idWebsiteRepo, ): Response
    {
        $actuality = $ActualityRepo->findAll();
        $idWebsite = $idWebsiteRepo->findAll();
        
        return $this->render('news/index.html.twig', [
            'actuality' => $actuality,
            'idWebsite' => $idWebsite,

        ]);
    }
}
