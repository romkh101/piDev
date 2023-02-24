<?php

namespace App\Form;

use App\Entity\Forum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('sujet')
            ->add('Date',DateType::class, array(
                'required' => false,
                'widget' => 'single_text',

                'empty_data' => null,
                'attr' => array(
                    'placeholder' => 'Date Match mm/dd/yyyy'
                )))
            ->add('description')
            ->add('nb_like')
            ->add('nb_commentaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Forum::class,
        ]);
    }
}
