<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parent', EntityType::class, [
                'class' => Category::class, // Refers to the Category entity
                'choice_label' => 'title', // Use 'title' field of Category entity for displaying the label
                'placeholder' => 'Select Parent Category', // Optional: To add a placeholder
                'required' => false, // Parent category is not mandatory
                'empty_data' => null, // Allow null value if no parent is selected
            ])
            ->add('title')
            ->add('keywords')
            ->add('description')
            ->add('image')
            ->add('isActive')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
            'csrf_protection' => false,
        ]);
    }
}
