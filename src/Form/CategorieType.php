<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextareaType::class, [
                "label" => "nom de la catégorie", // par default la a pour valeur le nom de la propriété on peut le passer à false
                "required" => false, // par défault true,
                "attr" => [ // tableau des attributs
                    "placeholder" => "Saisir le nom de la catégorie",
                    "class" => "border border-primary"

                    
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
