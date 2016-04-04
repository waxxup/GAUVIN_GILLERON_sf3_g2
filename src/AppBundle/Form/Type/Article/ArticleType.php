<?php

namespace AppBundle\Form\Type\Article;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array('label' => false))
            ->add('content', null, array('label' => false))
            ->add('author', null, array('label' => false))
            ->add('tag', null, array('label' => false))
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_profection' => false,
            'data_class' => 'AppBundle\Entity\Article\Article',
        ]);
    }
}