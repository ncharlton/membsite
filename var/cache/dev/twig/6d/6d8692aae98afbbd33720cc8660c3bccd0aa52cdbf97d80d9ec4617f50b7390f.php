<?php

/* admin/clip/new.html.twig */
class __TwigTemplate_2d9f5e97c5014cbb934f11e06e51a25431449cb0bb359143bfa3828f6184c511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/clip/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fc3b399c8d2bac5904083d579c7d56ced6631e7d7dcb8b18452c7c7864ca43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc3b399c8d2bac5904083d579c7d56ced6631e7d7dcb8b18452c7c7864ca43b->enter($__internal_4fc3b399c8d2bac5904083d579c7d56ced6631e7d7dcb8b18452c7c7864ca43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clip/new.html.twig"));

        $__internal_b3d5424850cb02df78fe626bfdd6f6fbbfe40671c9592969173cfc41d788ec95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d5424850cb02df78fe626bfdd6f6fbbfe40671c9592969173cfc41d788ec95->enter($__internal_b3d5424850cb02df78fe626bfdd6f6fbbfe40671c9592969173cfc41d788ec95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clip/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc3b399c8d2bac5904083d579c7d56ced6631e7d7dcb8b18452c7c7864ca43b->leave($__internal_4fc3b399c8d2bac5904083d579c7d56ced6631e7d7dcb8b18452c7c7864ca43b_prof);

        
        $__internal_b3d5424850cb02df78fe626bfdd6f6fbbfe40671c9592969173cfc41d788ec95->leave($__internal_b3d5424850cb02df78fe626bfdd6f6fbbfe40671c9592969173cfc41d788ec95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c81fc3471aba2842a8af7e69fe32b8a711dcc7183e17b2c92a26bb930a96fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c81fc3471aba2842a8af7e69fe32b8a711dcc7183e17b2c92a26bb930a96fba->enter($__internal_2c81fc3471aba2842a8af7e69fe32b8a711dcc7183e17b2c92a26bb930a96fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d134faf8d5465bbc12d5d7ea2a04d154524960196ee47039deab51699c5b1537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d134faf8d5465bbc12d5d7ea2a04d154524960196ee47039deab51699c5b1537->enter($__internal_d134faf8d5465bbc12d5d7ea2a04d154524960196ee47039deab51699c5b1537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "clips list";
        
        $__internal_d134faf8d5465bbc12d5d7ea2a04d154524960196ee47039deab51699c5b1537->leave($__internal_d134faf8d5465bbc12d5d7ea2a04d154524960196ee47039deab51699c5b1537_prof);

        
        $__internal_2c81fc3471aba2842a8af7e69fe32b8a711dcc7183e17b2c92a26bb930a96fba->leave($__internal_2c81fc3471aba2842a8af7e69fe32b8a711dcc7183e17b2c92a26bb930a96fba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b4d3216dd24cab91de86627dbbbb7111dfe8fc0c97a5f145a03d34ac7f988cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4d3216dd24cab91de86627dbbbb7111dfe8fc0c97a5f145a03d34ac7f988cb->enter($__internal_4b4d3216dd24cab91de86627dbbbb7111dfe8fc0c97a5f145a03d34ac7f988cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63e6df518932426148df210d5c0d73e5498991ec6c93a45be9325c1c8690d366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e6df518932426148df210d5c0d73e5498991ec6c93a45be9325c1c8690d366->enter($__internal_63e6df518932426148df210d5c0d73e5498991ec6c93a45be9325c1c8690d366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
    <button type=\"submit\">Add clips</button>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_63e6df518932426148df210d5c0d73e5498991ec6c93a45be9325c1c8690d366->leave($__internal_63e6df518932426148df210d5c0d73e5498991ec6c93a45be9325c1c8690d366_prof);

        
        $__internal_4b4d3216dd24cab91de86627dbbbb7111dfe8fc0c97a5f145a03d34ac7f988cb->leave($__internal_4b4d3216dd24cab91de86627dbbbb7111dfe8fc0c97a5f145a03d34ac7f988cb_prof);

    }

    public function getTemplateName()
    {
        return "admin/clip/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}

{% block title %}clips list{% endblock %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <button type=\"submit\">Add clips</button>
    {{ form_end(form) }}
{% endblock %}", "admin/clip/new.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\admin\\clip\\new.html.twig");
    }
}
