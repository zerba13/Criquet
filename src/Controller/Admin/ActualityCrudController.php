<?php

namespace App\Controller\Admin;

use App\Entity\Actuality;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ActualityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Actuality::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
      return $crud
          ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
          ->setEntityLabelInPlural('Articles')
          ->setEntityLabelInSingular('Article');
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('ID')->hideOnForm(),
            TextField::new('Title')->setLabel('Titre'),
            ImageField::new('image_card')->hideOnIndex()->setLabel('Image')->setUploadDir('public/assets/img/article'),
            DateTimeField::new('publish_at')->hideOnForm()->setLabel('Publié à'),
            TextEditorField::new('description_courte')->hideOnIndex()->setFormType(CKEditorType::class)->setLabel('Description courte'),
            TextEditorField::new('text_actuality')->hideOnIndex()->setFormType(CKEditorType::class)->setLabel('Article complet'),
        ];
    }


    
    
}
