<?php

namespace App\Controller\Admin;

use App\Entity\Commentary;
use DateTimeImmutable;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class CommentaryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commentary::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            IdField::new('Id_Product')->setLabel('Catégorie de produit: 1=Formation 2=Intervention')->hideOnIndex(),
            TextField::new('author')->setLabel('Auteur'),
            TextEditorField::new('content')->setLabel('Contenu'),
            ImageField::new('images')->hideOnIndex()->setUploadDir('public/assets/img/commentaire'),
            DateTimeField::new('publish_at')->setLabel('Date de publication'),
        ];
    }
}
