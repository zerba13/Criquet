<?php

namespace App\Controller\Admin;

use App\Entity\IdentitéWebsite;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class IdentitéWebsiteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return IdentitéWebsite::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
