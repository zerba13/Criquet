<?php

namespace App\Controller;

use App\Repository\IdentitéWebsiteRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationDetailController extends AbstractController
{
    #[Route('/formation_detail/{id}', name: 'app_formation_detail')]
    public function index($id, ProductRepository $productRepo, IdentitéWebsiteRepository $idWebsiteRepo): Response
    {
        // Utilisez $id pour récupérer votre produit par son ID
        $product = $productRepo->find($id);
        $idWebsite = $idWebsiteRepo->findAll();
       
       
        if ($product) {
            return $this->render('formation/detail.html.twig', [
                'product' => $product,
                'idWebsite' => $idWebsite,
            ]);

        }else{
            throw $this->createNotFoundException('Le produit n\'existe pas.');}

        
    }}

