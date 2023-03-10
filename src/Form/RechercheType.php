<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Form\CategorieType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('mots', SearchType::class, [
        'label' => false,
        'attr' => [
        'class' => 'form-control',
        'placeholder' => 'Entrez un ou plusieurs mots-clés'
        ],
        'required' => false
        ])
        ->add('categorie', EntityType::class, [
            'class' => Categorie::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                    ->leftJoin('c.actualites', 'a')
                    ->addSelect('COUNT(a.id) AS HIDDEN actualites_count')
                    ->groupBy('c.id');
            },
            'choice_label' => function (Categorie $categorie) {
                return sprintf('%s (%d actualités)', $categorie->getNom(), $categorie->getActualitesCount());
            },
            'attr' => [
                'class' => 'form-control',
            ],
            'required' => false
        ])
        ->add('Rechercher',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
