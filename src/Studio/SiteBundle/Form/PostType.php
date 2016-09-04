<?php

namespace Studio\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('description', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('content', \Symfony\Component\Form\Extension\Core\Type\TextareaType::class)
            ->add('date', \Symfony\Component\Form\Extension\Core\Type\DateTimeType::class)
            ->add('published', \Symfony\Component\Form\Extension\Core\Type\CheckboxType::class)
            ->add('author', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('image', \Symfony\Component\Form\Extension\Core\Type\TextType::class) 
            ->add('alt', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Studio\SiteBundle\Entity\Post'
        ));
    }
}
