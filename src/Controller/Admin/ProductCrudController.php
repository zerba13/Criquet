<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
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
          ->setEntityLabelInSingular('Produits');
    }
    
    

  
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('ID')->hideOnForm(),
            TextField::new('title')->setLabel('Titre'),
            TextEditorField::new('description_short')->setLabel('Description courte')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextField::new('trainer')->setLabel('Formateur'),
            TextField::new('places')->setLabel('Lieux'),
            TextField::new('diploma')->setLabel('Diplôme'),
            TextField::new('price')->setLabel('Prix'),
            TextEditorField::new('full_description')->setLabel('Description complète')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('Handicap_condition')->setLabel('Information handicap')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('investment')->setLabel('Financement')->setFormType(CKEditorType::class)->hideOnIndex(),
            TextEditorField::new('required')->setLabel('Requis')->setFormType(CKEditorType::class)->hideOnIndex(),


        ];
    }
   
}

