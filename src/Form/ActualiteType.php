<?php

namespace App\Form;

use App\Form\CategorieType;
use App\Entity\Actualite;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ActualiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Titre', TextType::class, [
            'attr' => [
                'required' => false,
                
            ],
        ])
        ->add('Image', FileType::class, [
            'label' => 'Image (JPG, JPEG, PNG file)',
            'mapped' => false,
            'required' => false,
            'attr' => [
                'accept' => 'image/*',
                'required' => false,
            ],
        ])
        ->add('Contenu', TextareaType::class, [
            'attr' => [
                'placeholder' => 'Saisir le contenu ici',
                'required' => false,
            ],
        ])
        ->add('Auteur', TextType::class, [
            'attr' => [
                'required' => false,
            ],
        ])
        ->add('Date', DateTimeType::class, [
            'widget' => 'single_text',
            'empty_data' => null,
            'attr' => [
                'placeholder' => 'Saisir la date ici',
                'required' => false,
            ],
        ])
        ->add('categorie', EntityType::class, [
            'class' => Categorie::class,
            'choice_label' => 'nom',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actualite::class,
        ]);
    }
}
