<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c56a22b7b3dd72ff8d15e5d06e81b9d3ddc4aae0377d9b37f0d960a9a9d7884a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff8911c1a198d43e07cfacb367982717cb5a7aeebe28a94a5d1bbfa51815a0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8911c1a198d43e07cfacb367982717cb5a7aeebe28a94a5d1bbfa51815a0c2->enter($__internal_ff8911c1a198d43e07cfacb367982717cb5a7aeebe28a94a5d1bbfa51815a0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5a69d1c5f4bbbc541d45e08a47d4ce3c7d9bcb461e39e0568121d0a28a102437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a69d1c5f4bbbc541d45e08a47d4ce3c7d9bcb461e39e0568121d0a28a102437->enter($__internal_5a69d1c5f4bbbc541d45e08a47d4ce3c7d9bcb461e39e0568121d0a28a102437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8911c1a198d43e07cfacb367982717cb5a7aeebe28a94a5d1bbfa51815a0c2->leave($__internal_ff8911c1a198d43e07cfacb367982717cb5a7aeebe28a94a5d1bbfa51815a0c2_prof);

        
        $__internal_5a69d1c5f4bbbc541d45e08a47d4ce3c7d9bcb461e39e0568121d0a28a102437->leave($__internal_5a69d1c5f4bbbc541d45e08a47d4ce3c7d9bcb461e39e0568121d0a28a102437_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6837ac55df7b9294f39f5ef39c54a9c1670992fec7ef7917d821d9b22f99c003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6837ac55df7b9294f39f5ef39c54a9c1670992fec7ef7917d821d9b22f99c003->enter($__internal_6837ac55df7b9294f39f5ef39c54a9c1670992fec7ef7917d821d9b22f99c003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22dcb3e6a3acde80ade9274419cc23194c6c641388a8d70ee86bda2396de4a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dcb3e6a3acde80ade9274419cc23194c6c641388a8d70ee86bda2396de4a9e->enter($__internal_22dcb3e6a3acde80ade9274419cc23194c6c641388a8d70ee86bda2396de4a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_22dcb3e6a3acde80ade9274419cc23194c6c641388a8d70ee86bda2396de4a9e->leave($__internal_22dcb3e6a3acde80ade9274419cc23194c6c641388a8d70ee86bda2396de4a9e_prof);

        
        $__internal_6837ac55df7b9294f39f5ef39c54a9c1670992fec7ef7917d821d9b22f99c003->leave($__internal_6837ac55df7b9294f39f5ef39c54a9c1670992fec7ef7917d821d9b22f99c003_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fe53b323235643e31b69242f21f9a318d4cf866bdcb59b00b29e4b9e9f601af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe53b323235643e31b69242f21f9a318d4cf866bdcb59b00b29e4b9e9f601af->enter($__internal_3fe53b323235643e31b69242f21f9a318d4cf866bdcb59b00b29e4b9e9f601af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c480e1c1e37da4fa7785a83150ce47d1594a219c32bcd5b4f5e421eb53e2d464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c480e1c1e37da4fa7785a83150ce47d1594a219c32bcd5b4f5e421eb53e2d464->enter($__internal_c480e1c1e37da4fa7785a83150ce47d1594a219c32bcd5b4f5e421eb53e2d464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c480e1c1e37da4fa7785a83150ce47d1594a219c32bcd5b4f5e421eb53e2d464->leave($__internal_c480e1c1e37da4fa7785a83150ce47d1594a219c32bcd5b4f5e421eb53e2d464_prof);

        
        $__internal_3fe53b323235643e31b69242f21f9a318d4cf866bdcb59b00b29e4b9e9f601af->leave($__internal_3fe53b323235643e31b69242f21f9a318d4cf866bdcb59b00b29e4b9e9f601af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_762842312c5e748cac98756ad6cc4db8c728a5c2a2d5ab97fd94c42994863f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762842312c5e748cac98756ad6cc4db8c728a5c2a2d5ab97fd94c42994863f2b->enter($__internal_762842312c5e748cac98756ad6cc4db8c728a5c2a2d5ab97fd94c42994863f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7828ff9ade01316f0a2723e13a6fed1a8730a681d0b3d3accc407c65028eb193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7828ff9ade01316f0a2723e13a6fed1a8730a681d0b3d3accc407c65028eb193->enter($__internal_7828ff9ade01316f0a2723e13a6fed1a8730a681d0b3d3accc407c65028eb193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7828ff9ade01316f0a2723e13a6fed1a8730a681d0b3d3accc407c65028eb193->leave($__internal_7828ff9ade01316f0a2723e13a6fed1a8730a681d0b3d3accc407c65028eb193_prof);

        
        $__internal_762842312c5e748cac98756ad6cc4db8c728a5c2a2d5ab97fd94c42994863f2b->leave($__internal_762842312c5e748cac98756ad6cc4db8c728a5c2a2d5ab97fd94c42994863f2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\membsite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
