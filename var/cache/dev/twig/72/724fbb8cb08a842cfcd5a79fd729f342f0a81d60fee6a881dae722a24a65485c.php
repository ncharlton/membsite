<?php

/* main/index.html.twig */
class __TwigTemplate_fdac95f30ac93e335d9d4c04481d790ee834fc50814b67e6482e93061cfdd87b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a59e83c0a75e78179c7e33c03d4acc4ee42b281edb36a722e9da1af794e9457e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59e83c0a75e78179c7e33c03d4acc4ee42b281edb36a722e9da1af794e9457e->enter($__internal_a59e83c0a75e78179c7e33c03d4acc4ee42b281edb36a722e9da1af794e9457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_ba49e641d652f34c54e0d3313c52cc8dbf0743da400c2f450060093868650718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba49e641d652f34c54e0d3313c52cc8dbf0743da400c2f450060093868650718->enter($__internal_ba49e641d652f34c54e0d3313c52cc8dbf0743da400c2f450060093868650718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59e83c0a75e78179c7e33c03d4acc4ee42b281edb36a722e9da1af794e9457e->leave($__internal_a59e83c0a75e78179c7e33c03d4acc4ee42b281edb36a722e9da1af794e9457e_prof);

        
        $__internal_ba49e641d652f34c54e0d3313c52cc8dbf0743da400c2f450060093868650718->leave($__internal_ba49e641d652f34c54e0d3313c52cc8dbf0743da400c2f450060093868650718_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc4a65a29b94c59dc4f66d9ec4bb444fdd0474a34e5b94adc9bb8707d6c8b0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4a65a29b94c59dc4f66d9ec4bb444fdd0474a34e5b94adc9bb8707d6c8b0eb->enter($__internal_dc4a65a29b94c59dc4f66d9ec4bb444fdd0474a34e5b94adc9bb8707d6c8b0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_634b757d06a630103e0b6657588d1a75421e66aa32d9ad1803672a9ba7ae8573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634b757d06a630103e0b6657588d1a75421e66aa32d9ad1803672a9ba7ae8573->enter($__internal_634b757d06a630103e0b6657588d1a75421e66aa32d9ad1803672a9ba7ae8573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array())) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
";
        }
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["n"], "newsTitle", array()), "html", null, true);
            echo "<br>
    ";
            // line 12
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["n"], "newsContent", array());
            echo "<br>
    ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["n"], "game", array()), "gameName", array()), "html", null, true);
            echo "
    <hr/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        
        $__internal_634b757d06a630103e0b6657588d1a75421e66aa32d9ad1803672a9ba7ae8573->leave($__internal_634b757d06a630103e0b6657588d1a75421e66aa32d9ad1803672a9ba7ae8573_prof);

        
        $__internal_dc4a65a29b94c59dc4f66d9ec4bb444fdd0474a34e5b94adc9bb8707d6c8b0eb->leave($__internal_dc4a65a29b94c59dc4f66d9ec4bb444fdd0474a34e5b94adc9bb8707d6c8b0eb_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  77 => 13,  73 => 12,  68 => 11,  64 => 10,  61 => 9,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


{% if app.user %}
    {{ app.user.username }}
{% endif %}

{% for n in news %}
    {{ n.newsTitle }}<br>
    {{ n.newsContent | raw }}<br>
    {{ n.game.gameName }}
    <hr/>
{% endfor %}

{% endblock %}", "main/index.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\main\\index.html.twig");
    }
}
