<?php

namespace App\Controller;

use App\Repository\ActualityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsDetailController extends AbstractController
{
    #[Route('/actualite_detail/{id}', name: 'app_news_detail')]
    public function index(ActualityRepository $actualityRepository, $id): Response
    {

        $actuality = $actualityRepository->find($id);

        return $this->render('news/detail.html.twig', [
            'actuality' => $actuality,
        ]);
    }
}
