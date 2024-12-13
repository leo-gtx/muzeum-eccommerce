<?php

namespace App\Form;

use App\Entity\Module;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ModuleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title')
        ->add('description')
        ->add('file', FileType::class, [
            'label' => 'Upload Downlodable File (pdf, zip, audio, video), <= 2 GB',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '2048M',
                    'mimeTypes' => [
                        'application/pdf',
                        'application/zip',
                        'audio/*',
                        'video/*',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid File less or equal than 2GB',
                ])
            ],
        ])
           
            ->add('products')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Module::class,
        ]);
    }
}
