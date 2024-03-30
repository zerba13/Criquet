<?php

namespace App\Controller;


use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AcceuilController extends AbstractController
{
    #[Route('/', name: 'app_acceuil')]
    public function index( ProductRepository $productRepo,CategoryRepository $categoryRepo ): Response
    {
        $products = $productRepo ->findBy([], ['id' => 'DESC']);
        $category = $categoryRepo->findAll();

        
        return $this->render('accueil/index.html.twig', [
            'products' => $products, 
            'category' => $category,


        ]);
    }
}
