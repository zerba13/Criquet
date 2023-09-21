<?php

namespace App\Controller;

use App\Repository\CommentaryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    #[Route('/notre-mission', name: 'app_about')]
    public function index(CommentaryRepository $commentaryRepository,  ): Response
    {
        $comments=$commentaryRepository->findAll();
      


        return $this->render('about/about.html.twig', [
            'comments' => $comments,
          
        ]);
    }
}
