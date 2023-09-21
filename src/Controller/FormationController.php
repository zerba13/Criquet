<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\IdentitéWebsiteRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    #[Route('/formation', name: 'app_formation')]
    public function index(ProductRepository $productRepo, CategoryRepository $categoryRepo, ): Response
    {
        $products = $productRepo ->findAll();
        $category = $categoryRepo->findAll();


        return $this->render('formation/index.html.twig', [
            'products' => $products, 
            'category' => $category,

        ]);
    }
}
