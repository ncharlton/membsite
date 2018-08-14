<?php

namespace AppBundle\Form\Admin;

use AppBundle\Entity\Rank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RankAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rankName', TextType::class)
            ->add('rankScore', IntegerType::class)
            ->add('rankBadge', FileType::class, [
                'label' => 'Badge (PNG file)'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Rank::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_rank_admin_form';
    }
}
