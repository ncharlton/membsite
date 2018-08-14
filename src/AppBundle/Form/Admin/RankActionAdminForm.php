<?php

namespace AppBundle\Form\Admin;

use AppBundle\Entity\RankAction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RankActionAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("rankActionName", TextType::class)
            ->add("rankActionScore", IntegerType::class)
            ->add("rankActionDescription", TextareaType::class)
            ->add("rankActionMessage", TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RankAction::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_rank_action_admin_form';
    }
}
