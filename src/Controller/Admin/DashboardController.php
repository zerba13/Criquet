<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\ProductCrudController;
use App\Entity\Actuality;
use App\Entity\Category;
use App\Entity\Commentary;
use App\Entity\IdentitéWebsite;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    // public function __construct(
    //     private AdminUrlGenerator $adminUrlGenerator
    // ){
        
    // }


    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
       return $this->redirect($adminUrlGenerator->setController(ProductCrudController::class)->generateUrl());

        
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('CriquetAndCo - Administration')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
     
        yield MenuItem::linkToCrud('Identité du site', 'fas fa-id-card', IdentitéWebsite::class);
        yield MenuItem::linkToCrud('Catégorie', 'fas fa-boxes-stacked', Category::class);
        yield MenuItem::linkToCrud('Formation', 'fas fa-book', Product::class);
        yield MenuItem::linkToCrud('Actualité', 'fas fa-newspaper', Actuality::class);
        yield MenuItem::linkToCrud('Commentaires', 'fas fa-comment', Commentary::class);
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', User::class);


        



    }
}
