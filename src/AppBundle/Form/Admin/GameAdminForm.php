<?php

namespace AppBundle\Form\Admin;

use AppBundle\Entity\Game;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("gameName", TextType::class)
            ->add("gameDescription", TextareaType::class)
            ->add("gameImage", TextType::class)
            ->add("gameBuyLink", TextType::class)
            ->add("gameLink", TextType::class)
            ->add("gameGenre", ChoiceType::class, [
                'choices' => array(
                    'Adventure' => 'Adventure',
                    'Horror' => 'Horror',
                    'Sport' => 'Sport',
                    'Action' => 'Action'
                )

            ])
            ->add("gameMode",  ChoiceType::class, [
                'choices' => array(
                    'Singleplayer' => 'Singleplayer',
                    'Multiplayer' => 'Multiplayer',
                    'Single & Multi' => 'Single & Multi'
                )
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Game'
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_game_admin_form';
    }
}
