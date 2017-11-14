<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d613f1ce28345a3578a1bc5343cc3676bd9878a1d884acb5e46307f787471e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa75fe1099011e8ce6c95cb44d809bea89eb5766de654529ada5ae1df858a82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa75fe1099011e8ce6c95cb44d809bea89eb5766de654529ada5ae1df858a82b->enter($__internal_fa75fe1099011e8ce6c95cb44d809bea89eb5766de654529ada5ae1df858a82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_eea14ea742b16f38bceee383b0517b30b635a7221971ac7df7da2426d5c7d154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea14ea742b16f38bceee383b0517b30b635a7221971ac7df7da2426d5c7d154->enter($__internal_eea14ea742b16f38bceee383b0517b30b635a7221971ac7df7da2426d5c7d154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa75fe1099011e8ce6c95cb44d809bea89eb5766de654529ada5ae1df858a82b->leave($__internal_fa75fe1099011e8ce6c95cb44d809bea89eb5766de654529ada5ae1df858a82b_prof);

        
        $__internal_eea14ea742b16f38bceee383b0517b30b635a7221971ac7df7da2426d5c7d154->leave($__internal_eea14ea742b16f38bceee383b0517b30b635a7221971ac7df7da2426d5c7d154_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f30c06b762a8bf9c4a063ceabc2296e60ae884be9fe938d34eea07b858b4629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f30c06b762a8bf9c4a063ceabc2296e60ae884be9fe938d34eea07b858b4629->enter($__internal_3f30c06b762a8bf9c4a063ceabc2296e60ae884be9fe938d34eea07b858b4629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_669ce2b505d2de53ef3160ef4c19b7f537e0f5486bda986ee8d72ab42f5c49b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669ce2b505d2de53ef3160ef4c19b7f537e0f5486bda986ee8d72ab42f5c49b5->enter($__internal_669ce2b505d2de53ef3160ef4c19b7f537e0f5486bda986ee8d72ab42f5c49b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_669ce2b505d2de53ef3160ef4c19b7f537e0f5486bda986ee8d72ab42f5c49b5->leave($__internal_669ce2b505d2de53ef3160ef4c19b7f537e0f5486bda986ee8d72ab42f5c49b5_prof);

        
        $__internal_3f30c06b762a8bf9c4a063ceabc2296e60ae884be9fe938d34eea07b858b4629->leave($__internal_3f30c06b762a8bf9c4a063ceabc2296e60ae884be9fe938d34eea07b858b4629_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\membsite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
