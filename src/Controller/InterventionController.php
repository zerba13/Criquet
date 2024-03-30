<?php

namespace App\Controller;

use App\Repository\CommentaryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InterventionController extends AbstractController
{
    #[Route('/intervention', name: 'app_intervention')]
    public function index(CommentaryRepository $commentaryRepository,): Response
    {
        $comments=$commentaryRepository->findBy(["Id_Product" => 2], ['id' => 'DESC' ]);

        return $this->render('intervention/index.html.twig', [
            'comments' => $comments,
        ]);
    }
}
