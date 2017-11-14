<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_06fd383ac0d953820603c7c91228a8067d34dcb1faccdef8f5e3c2aaecb6343e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_67b0a8931213ad41e59443e41ebd56578fbfa16ce4f23557c4fff538b79fff66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b0a8931213ad41e59443e41ebd56578fbfa16ce4f23557c4fff538b79fff66->enter($__internal_67b0a8931213ad41e59443e41ebd56578fbfa16ce4f23557c4fff538b79fff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c3ced9ecc199b69875511edbbcc3e218c66b8373bbb14478e609088d70d96548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ced9ecc199b69875511edbbcc3e218c66b8373bbb14478e609088d70d96548->enter($__internal_c3ced9ecc199b69875511edbbcc3e218c66b8373bbb14478e609088d70d96548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b0a8931213ad41e59443e41ebd56578fbfa16ce4f23557c4fff538b79fff66->leave($__internal_67b0a8931213ad41e59443e41ebd56578fbfa16ce4f23557c4fff538b79fff66_prof);

        
        $__internal_c3ced9ecc199b69875511edbbcc3e218c66b8373bbb14478e609088d70d96548->leave($__internal_c3ced9ecc199b69875511edbbcc3e218c66b8373bbb14478e609088d70d96548_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_514279393a57c8575e6dab1baca3c3dce097cf3b27d465a6d996241870c42f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514279393a57c8575e6dab1baca3c3dce097cf3b27d465a6d996241870c42f38->enter($__internal_514279393a57c8575e6dab1baca3c3dce097cf3b27d465a6d996241870c42f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_32331c691a2097e2bce8041bfbed15af6119cdaffed562dd62e4e2091971ac5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32331c691a2097e2bce8041bfbed15af6119cdaffed562dd62e4e2091971ac5b->enter($__internal_32331c691a2097e2bce8041bfbed15af6119cdaffed562dd62e4e2091971ac5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32331c691a2097e2bce8041bfbed15af6119cdaffed562dd62e4e2091971ac5b->leave($__internal_32331c691a2097e2bce8041bfbed15af6119cdaffed562dd62e4e2091971ac5b_prof);

        
        $__internal_514279393a57c8575e6dab1baca3c3dce097cf3b27d465a6d996241870c42f38->leave($__internal_514279393a57c8575e6dab1baca3c3dce097cf3b27d465a6d996241870c42f38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d72d29f3e192994a2f3da7017c9a5a70bbe3814cce656690f74504a5a80f6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d72d29f3e192994a2f3da7017c9a5a70bbe3814cce656690f74504a5a80f6b1->enter($__internal_9d72d29f3e192994a2f3da7017c9a5a70bbe3814cce656690f74504a5a80f6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b77e74aee9c365c973eff252077bc29ff8900bf21235df08802c4264c7db368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b77e74aee9c365c973eff252077bc29ff8900bf21235df08802c4264c7db368->enter($__internal_5b77e74aee9c365c973eff252077bc29ff8900bf21235df08802c4264c7db368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b77e74aee9c365c973eff252077bc29ff8900bf21235df08802c4264c7db368->leave($__internal_5b77e74aee9c365c973eff252077bc29ff8900bf21235df08802c4264c7db368_prof);

        
        $__internal_9d72d29f3e192994a2f3da7017c9a5a70bbe3814cce656690f74504a5a80f6b1->leave($__internal_9d72d29f3e192994a2f3da7017c9a5a70bbe3814cce656690f74504a5a80f6b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02fb3a5e2f265fbb290fe4ab111be7c924f9f22cd3658ed61140921ee9ae4ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fb3a5e2f265fbb290fe4ab111be7c924f9f22cd3658ed61140921ee9ae4ed1->enter($__internal_02fb3a5e2f265fbb290fe4ab111be7c924f9f22cd3658ed61140921ee9ae4ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9199db20bedba5027ee38f797c9e572d79726d6c5b222447f0f3f9b0c1a6990a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9199db20bedba5027ee38f797c9e572d79726d6c5b222447f0f3f9b0c1a6990a->enter($__internal_9199db20bedba5027ee38f797c9e572d79726d6c5b222447f0f3f9b0c1a6990a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9199db20bedba5027ee38f797c9e572d79726d6c5b222447f0f3f9b0c1a6990a->leave($__internal_9199db20bedba5027ee38f797c9e572d79726d6c5b222447f0f3f9b0c1a6990a_prof);

        
        $__internal_02fb3a5e2f265fbb290fe4ab111be7c924f9f22cd3658ed61140921ee9ae4ed1->leave($__internal_02fb3a5e2f265fbb290fe4ab111be7c924f9f22cd3658ed61140921ee9ae4ed1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\membsite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
