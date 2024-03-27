<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
      return $crud
          ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
          ->setEntityLabelInPlural('Produits')
          ->setEntityLabelInSingular('Produit');
    }
    
    

  
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('ID')->hideOnForm(),
            IdField::new('id_category')->hideOnIndex()->setLabel('formation=1 intervention=2'),
            TextField::new('title')->setLabel('Titre'),
            TextField::new('trainer')->setLabel('Formateur'),
            TextField::new('places')->setLabel('Lieux'),
            TextField::new('diploma')->setLabel('Diplôme'),
            TextField::new('price')->setLabel('Prix'),
            TextEditorField::new('description_short')->setLabel('Description courte')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('duration_description')->setLabel('Organisations des heures')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('full_description')->setLabel('Description complète')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('Handicap_condition')->setLabel('Information handicap')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('investment')->setLabel('Financement')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('required')->setLabel('Requis')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('access')->setLabel("Modalités d'accès")->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('calendar')->setLabel('Calendrier')->setFormType(CKEditorType::class)->hideOnIndex(),
            ImageField::new('img')->setLabel('Image')->setuploadDir('public/assets/img/formation')->hideOnindex(),

        ];
    }
   
}

