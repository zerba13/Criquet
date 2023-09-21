<?php

namespace App\Controller\Admin;

use App\Entity\IdentitéWebsite;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class IdentitéWebsiteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return IdentitéWebsite::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('name'),
            TextField::new('adress'),
            TextField::new('city'),
            TextField::new('country'),
            TextField::new('email'),
            TextField::new('phone'),
            TextField::new('phone'),
            TextField::new('phone'),
        ];
    }

}
