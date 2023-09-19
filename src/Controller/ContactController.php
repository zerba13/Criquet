<?php

namespace App\Controller;

use App\Repository\IdentitéWebsiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(IdentitéWebsiteRepository $idWebsiteRepo,): Response
    {
        $idWebsite = $idWebsiteRepo->findAll();

        return $this->render('contact/index.html.twig', [
            'idWebsite' => $idWebsite,
        ]);
    }
}
