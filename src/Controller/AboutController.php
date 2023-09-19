<?php

namespace App\Controller;

use App\Repository\CommentaryRepository;
use App\Repository\IdentitéWebsiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    #[Route('/notre-mission', name: 'app_about')]
    public function index(CommentaryRepository $commentaryRepository, IdentitéWebsiteRepository $idWebsiteRepo, ): Response
    {
        $comments=$commentaryRepository->findAll();
        $idWebsite = $idWebsiteRepo->find();


        return $this->render('about/about.html.twig', [
            'comments' => $comments,
            'idWebsite' => $idWebsite,

        ]);
    }
}
