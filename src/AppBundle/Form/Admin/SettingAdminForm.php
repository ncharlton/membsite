<?php

namespace AppBundle\Form\Admin;

use AppBundle\Entity\Setting;
use AppBundle\Entity\SettingCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SettingAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('settingKey', TextType::class)
            ->add('settingValue', TextType::class)
            ->add('settingDescription', TextareaType::class)
            ->add('settingCategory', EntityType::class, [
                "placeholder" => "choose a category",
                "class" => SettingCategory::class,
                "choice_label" => "setting_category_name"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Setting::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_setting_admin_form';
    }
}
