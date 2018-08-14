<?php

namespace AppBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserBanAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("banTime", ChoiceType::class,[
                'choices' => [
                    'Non Ban' => null,
                    '15 minutes' => new \DateTime('+15 minutes'),
                    '30 minutes' => new \DateTime('+30 minutes'),
                    '1 hour' => new \DateTime('+1 hour'),
                    '4 hours' => new \DateTime('+4 hours'),
                    '1 day' => new \DateTime('+1 day'),
                    '4 days' => new \DateTime('+4 days'),
                    'Unlimited' => new \DateTime('+1 year')
                ]
            ])
            ->add("banReason", TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_user_ban_admin_form';
    }
}
