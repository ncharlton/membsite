<?php

namespace AppBundle\Form\Admin;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", TextType::class)
            ->add("email", EmailType::class )
            ->add(
                'roles', ChoiceType::class, [
                    'choices' => [
                        'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN',
                        'ROLE_ADMIN' => 'ROLE_ADMIN',
                        'ROLE_MOD' => 'ROLE_MOD'
                    ],
                    'expanded' => true,
                    'multiple' => true,
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'validation_groups' => ['Default', 'UserAdminEdit']
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_user_admin_form';
    }
}
