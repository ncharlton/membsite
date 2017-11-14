<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_200ed40889bd04488923fb1a10a49e1181c0037374426cf5163d64362c4bc6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32be1e81fd7a7eb18afb7928e3672d497dd7bf0f9edab25ca3ba0ae2764d4118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32be1e81fd7a7eb18afb7928e3672d497dd7bf0f9edab25ca3ba0ae2764d4118->enter($__internal_32be1e81fd7a7eb18afb7928e3672d497dd7bf0f9edab25ca3ba0ae2764d4118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_25dc61aeee2a9640ce15ae62150ca0364f955077c77515b01b918aaf58c52f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dc61aeee2a9640ce15ae62150ca0364f955077c77515b01b918aaf58c52f20->enter($__internal_25dc61aeee2a9640ce15ae62150ca0364f955077c77515b01b918aaf58c52f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32be1e81fd7a7eb18afb7928e3672d497dd7bf0f9edab25ca3ba0ae2764d4118->leave($__internal_32be1e81fd7a7eb18afb7928e3672d497dd7bf0f9edab25ca3ba0ae2764d4118_prof);

        
        $__internal_25dc61aeee2a9640ce15ae62150ca0364f955077c77515b01b918aaf58c52f20->leave($__internal_25dc61aeee2a9640ce15ae62150ca0364f955077c77515b01b918aaf58c52f20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bde4a4edca356dd7deffb2a06ba44ef17c2e3727ef3cc839e423dbf08a0bdf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde4a4edca356dd7deffb2a06ba44ef17c2e3727ef3cc839e423dbf08a0bdf7b->enter($__internal_bde4a4edca356dd7deffb2a06ba44ef17c2e3727ef3cc839e423dbf08a0bdf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_80e911339ac8414eadb6ae820b133d21cbaa7470f6c5b67dd025f078ec27c580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e911339ac8414eadb6ae820b133d21cbaa7470f6c5b67dd025f078ec27c580->enter($__internal_80e911339ac8414eadb6ae820b133d21cbaa7470f6c5b67dd025f078ec27c580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_80e911339ac8414eadb6ae820b133d21cbaa7470f6c5b67dd025f078ec27c580->leave($__internal_80e911339ac8414eadb6ae820b133d21cbaa7470f6c5b67dd025f078ec27c580_prof);

        
        $__internal_bde4a4edca356dd7deffb2a06ba44ef17c2e3727ef3cc839e423dbf08a0bdf7b->leave($__internal_bde4a4edca356dd7deffb2a06ba44ef17c2e3727ef3cc839e423dbf08a0bdf7b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cdf58c04996b7d995164877cc852456826d457ad45a97c5ec5309077be039a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdf58c04996b7d995164877cc852456826d457ad45a97c5ec5309077be039a4->enter($__internal_1cdf58c04996b7d995164877cc852456826d457ad45a97c5ec5309077be039a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_506751f267c53bda54fd115dc4ce67b75f5e163c40865f272407ae996a14031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506751f267c53bda54fd115dc4ce67b75f5e163c40865f272407ae996a14031f->enter($__internal_506751f267c53bda54fd115dc4ce67b75f5e163c40865f272407ae996a14031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_506751f267c53bda54fd115dc4ce67b75f5e163c40865f272407ae996a14031f->leave($__internal_506751f267c53bda54fd115dc4ce67b75f5e163c40865f272407ae996a14031f_prof);

        
        $__internal_1cdf58c04996b7d995164877cc852456826d457ad45a97c5ec5309077be039a4->leave($__internal_1cdf58c04996b7d995164877cc852456826d457ad45a97c5ec5309077be039a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\membsite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
