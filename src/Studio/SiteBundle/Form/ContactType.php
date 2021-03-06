<?php

namespace Studio\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('phone', \Symfony\Component\Form\Extension\Core\Type\NumberType::class)
            ->add('email', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('subject', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('message', \Symfony\Component\Form\Extension\Core\Type\TextareaType::class)
            ->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Studio\SiteBundle\Entity\Contact'
        ));
    }
}
