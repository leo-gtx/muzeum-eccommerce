<?php

namespace App\Form\User;

use App\Entity\Admin\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('rate',ChoiceType::class,[
            'label'=>'Your rating',
            'attr'=>[
                'class'=> 'col-12'
            ],
            'choices'=>[
                '<i class="fa fa-star"></i>'=>1,
                '<i class="fa fa-star"></i><i class="fa fa-star"></i>' =>2,
                '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' =>3,
                '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' =>4,
                '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' => 5]
        ])
        ->add('subject',TextType::class,[
                'attr' => [
                    'placeholder' => 'Objet',
                ]
        ])
        ->add('comment', TextareaType::class,[
            'attr' => [
                'placeholder' => 'Votre commentaire'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class
        ]);
    }
}
