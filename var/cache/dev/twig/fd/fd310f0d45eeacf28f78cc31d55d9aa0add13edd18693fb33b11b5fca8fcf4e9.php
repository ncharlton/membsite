<?php

/* user/login.html.twig */
class __TwigTemplate_bdae7ab59ff74f521987af9a6731bbdd2a74b98d486f694224d7d3e856f52fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f75b9ea3e1cadd177ea37eaeed612669cd07ce9ff99606caba3c338e1acf2f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75b9ea3e1cadd177ea37eaeed612669cd07ce9ff99606caba3c338e1acf2f4f->enter($__internal_f75b9ea3e1cadd177ea37eaeed612669cd07ce9ff99606caba3c338e1acf2f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_130009139af7c363848d788eb9abd7ba73860cf9c583eb606734c03a573b1d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130009139af7c363848d788eb9abd7ba73860cf9c583eb606734c03a573b1d1b->enter($__internal_130009139af7c363848d788eb9abd7ba73860cf9c583eb606734c03a573b1d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75b9ea3e1cadd177ea37eaeed612669cd07ce9ff99606caba3c338e1acf2f4f->leave($__internal_f75b9ea3e1cadd177ea37eaeed612669cd07ce9ff99606caba3c338e1acf2f4f_prof);

        
        $__internal_130009139af7c363848d788eb9abd7ba73860cf9c583eb606734c03a573b1d1b->leave($__internal_130009139af7c363848d788eb9abd7ba73860cf9c583eb606734c03a573b1d1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e747bdeaf5715e1d1ac75853231aabb4ac48c77fa0ff67e4c2af5fc1b55ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e747bdeaf5715e1d1ac75853231aabb4ac48c77fa0ff67e4c2af5fc1b55ed6->enter($__internal_33e747bdeaf5715e1d1ac75853231aabb4ac48c77fa0ff67e4c2af5fc1b55ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6cb67ce2baa4bfb8601b71f59990b58a9b6a93c2912a5847d386141e67d12343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb67ce2baa4bfb8601b71f59990b58a9b6a93c2912a5847d386141e67d12343->enter($__internal_6cb67ce2baa4bfb8601b71f59990b58a9b6a93c2912a5847d386141e67d12343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_6cb67ce2baa4bfb8601b71f59990b58a9b6a93c2912a5847d386141e67d12343->leave($__internal_6cb67ce2baa4bfb8601b71f59990b58a9b6a93c2912a5847d386141e67d12343_prof);

        
        $__internal_33e747bdeaf5715e1d1ac75853231aabb4ac48c77fa0ff67e4c2af5fc1b55ed6->leave($__internal_33e747bdeaf5715e1d1ac75853231aabb4ac48c77fa0ff67e4c2af5fc1b55ed6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8613c8e4a221100bb9aac1e7b58edd39bc309b0a4b13844f372bd8bd0ceab0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8613c8e4a221100bb9aac1e7b58edd39bc309b0a4b13844f372bd8bd0ceab0c->enter($__internal_b8613c8e4a221100bb9aac1e7b58edd39bc309b0a4b13844f372bd8bd0ceab0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_415a00c3acd9f145f86523be195c871ddcbf70a6408db549c23089ac0bbc8197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415a00c3acd9f145f86523be195c871ddcbf70a6408db549c23089ac0bbc8197->enter($__internal_415a00c3acd9f145f86523be195c871ddcbf70a6408db549c23089ac0bbc8197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "_username", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "_password", array()), 'row');
        echo "
        <button type=\"submit\">Login</button>
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end');
        echo "
    <hr>
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\">Login with twitch</a>
";
        
        $__internal_415a00c3acd9f145f86523be195c871ddcbf70a6408db549c23089ac0bbc8197->leave($__internal_415a00c3acd9f145f86523be195c871ddcbf70a6408db549c23089ac0bbc8197_prof);

        
        $__internal_b8613c8e4a221100bb9aac1e7b58edd39bc309b0a4b13844f372bd8bd0ceab0c->leave($__internal_b8613c8e4a221100bb9aac1e7b58edd39bc309b0a4b13844f372bd8bd0ceab0c_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  93 => 14,  88 => 12,  84 => 11,  80 => 10,  77 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
    {% if error %}
        {{ error.messageKey|trans(error.messageData, 'security') }}
    {% endif %}

    {{ form_start(form) }}
        {{ form_row(form._username) }}
        {{ form_row(form._password) }}
        <button type=\"submit\">Login</button>
    {{ form_end(form) }}
    <hr>
    <a href=\"{{ url }}\">Login with twitch</a>
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\user\\login.html.twig");
    }
}
