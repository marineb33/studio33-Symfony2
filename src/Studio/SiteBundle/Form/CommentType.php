<?php

namespace Studio\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('message', \Symfony\Component\Form\Extension\Core\Type\TextareaType::class)
            ->add('post', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array(
                'class' => 'StudioSiteBundle:Post',
                'label' => false,
                'choice_label' => 'id',
                'attr' => array(
                    'class' => 'hidden'
                )))
            ->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Studio\SiteBundle\Entity\Comment'
        ));
    }
}
