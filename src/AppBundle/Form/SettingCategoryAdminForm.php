<?php

namespace AppBundle\Form;

use AppBundle\Entity\SettingCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SettingCategoryAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('settingCategoryName', TextType::class)
            ->add('settingCategoryDescription', TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SettingCategory::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_setting_category_admin_form';
    }
}
