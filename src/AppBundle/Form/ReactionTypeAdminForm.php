<?php

namespace AppBundle\Form;

use AppBundle\Entity\ReactionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReactionTypeAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("reactionTypeName", TextType::class)
            ->add("reactionTypeIcon", FileType::class, [
                'label' => 'Reaction Icon (png only)'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReactionType::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_reaction_type_admin_form';
    }
}
