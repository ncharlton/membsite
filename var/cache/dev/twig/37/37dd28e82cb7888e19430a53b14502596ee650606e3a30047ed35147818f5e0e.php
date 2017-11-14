<?php

/* admin/main/index.html.twig */
class __TwigTemplate_04e983b5f20c39d43e89a005b6ffa10ecbea00419f36b6e8098785c364a23028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/main/index.html.twig", 1);
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
        $__internal_a0d9d204a1279d6dec66502bacc54d4fd5e7847ab57a91516e35b754fae55c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d9d204a1279d6dec66502bacc54d4fd5e7847ab57a91516e35b754fae55c1c->enter($__internal_a0d9d204a1279d6dec66502bacc54d4fd5e7847ab57a91516e35b754fae55c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/main/index.html.twig"));

        $__internal_0e3ff2f8e092f6bf1cbc1b0a4e282efa890162139f1ec0d29a0d5bf7b2be9fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3ff2f8e092f6bf1cbc1b0a4e282efa890162139f1ec0d29a0d5bf7b2be9fe0->enter($__internal_0e3ff2f8e092f6bf1cbc1b0a4e282efa890162139f1ec0d29a0d5bf7b2be9fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/main/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d9d204a1279d6dec66502bacc54d4fd5e7847ab57a91516e35b754fae55c1c->leave($__internal_a0d9d204a1279d6dec66502bacc54d4fd5e7847ab57a91516e35b754fae55c1c_prof);

        
        $__internal_0e3ff2f8e092f6bf1cbc1b0a4e282efa890162139f1ec0d29a0d5bf7b2be9fe0->leave($__internal_0e3ff2f8e092f6bf1cbc1b0a4e282efa890162139f1ec0d29a0d5bf7b2be9fe0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9b559cb74e0f62d8ced210664ce1a82acea27492c2a7f2e2cbdf4a8ebca4d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b559cb74e0f62d8ced210664ce1a82acea27492c2a7f2e2cbdf4a8ebca4d60->enter($__internal_c9b559cb74e0f62d8ced210664ce1a82acea27492c2a7f2e2cbdf4a8ebca4d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_766c9c10effd5cb6b776abba13d4c786d3bac030430eff28b57fe01869c174e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766c9c10effd5cb6b776abba13d4c786d3bac030430eff28b57fe01869c174e3->enter($__internal_766c9c10effd5cb6b776abba13d4c786d3bac030430eff28b57fe01869c174e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Dashboard";
        
        $__internal_766c9c10effd5cb6b776abba13d4c786d3bac030430eff28b57fe01869c174e3->leave($__internal_766c9c10effd5cb6b776abba13d4c786d3bac030430eff28b57fe01869c174e3_prof);

        
        $__internal_c9b559cb74e0f62d8ced210664ce1a82acea27492c2a7f2e2cbdf4a8ebca4d60->leave($__internal_c9b559cb74e0f62d8ced210664ce1a82acea27492c2a7f2e2cbdf4a8ebca4d60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a5f15db341f4b7841a4816c6a30337bdb51ec1336cfe5bfaef934127c861ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5f15db341f4b7841a4816c6a30337bdb51ec1336cfe5bfaef934127c861ee1->enter($__internal_9a5f15db341f4b7841a4816c6a30337bdb51ec1336cfe5bfaef934127c861ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e1badff6d29e46d68c981257fd9439869a6467367b68d8137bb18d6386656db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1badff6d29e46d68c981257fd9439869a6467367b68d8137bb18d6386656db->enter($__internal_8e1badff6d29e46d68c981257fd9439869a6467367b68d8137bb18d6386656db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    Welcome to the Admin Dashboard of membsite 0.1 dev.
    <br>
    Your logged in as ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "

";
        
        $__internal_8e1badff6d29e46d68c981257fd9439869a6467367b68d8137bb18d6386656db->leave($__internal_8e1badff6d29e46d68c981257fd9439869a6467367b68d8137bb18d6386656db_prof);

        
        $__internal_9a5f15db341f4b7841a4816c6a30337bdb51ec1336cfe5bfaef934127c861ee1->leave($__internal_9a5f15db341f4b7841a4816c6a30337bdb51ec1336cfe5bfaef934127c861ee1_prof);

    }

    public function getTemplateName()
    {
        return "admin/main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

{% block body %}
    Welcome to the Admin Dashboard of membsite 0.1 dev.
    <br>
    Your logged in as {{ user.username }}

{% endblock %}", "admin/main/index.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\admin\\main\\index.html.twig");
    }
}
