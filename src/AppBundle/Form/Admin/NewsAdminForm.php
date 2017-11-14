<?php

namespace AppBundle\Form\Admin;

use AppBundle\Entity\Game;
use AppBundle\Entity\News;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsAdminForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("newsTitle", TextType::class)
            ->add("newsKeywords", TextType::class)
            ->add("newsContent", CKEditorType::class, [
                "config" => [
                    "toolbar" => "full"
                ]
            ])
            ->add("game", EntityType::class, [
                "placeholder" => "Please choose a game",
                "class" => Game::class,
                "choice_label" => "game_name"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => News::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_news_admin_form';
    }
}
