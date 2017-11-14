<?php
namespace AppBundle\Form\Admin;
use AppBundle\Entity\Clip;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClipAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("clipUrl", TextType::class);
    }
//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults([
//            'data_class' => 'AppBundle\Entity\Clip'
//        ]);
//    }
    public function getBlockPrefix()
    {
        return 'app_bundle_clip_admin_form';
    }
}