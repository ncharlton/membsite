<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7080b3e3448b30c2607591486801491f2ea1b8572cba4dafeefe2ce79f7ea719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2162dd0d057971359574a2b3842c361fa59cfb2b373e787b65064ca7b86210e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2162dd0d057971359574a2b3842c361fa59cfb2b373e787b65064ca7b86210e2->enter($__internal_2162dd0d057971359574a2b3842c361fa59cfb2b373e787b65064ca7b86210e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_aa7e01dfa031dba01599cc3f1f69c4c40c737504247ea76cb5943288a7653fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7e01dfa031dba01599cc3f1f69c4c40c737504247ea76cb5943288a7653fe7->enter($__internal_aa7e01dfa031dba01599cc3f1f69c4c40c737504247ea76cb5943288a7653fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2162dd0d057971359574a2b3842c361fa59cfb2b373e787b65064ca7b86210e2->leave($__internal_2162dd0d057971359574a2b3842c361fa59cfb2b373e787b65064ca7b86210e2_prof);

        
        $__internal_aa7e01dfa031dba01599cc3f1f69c4c40c737504247ea76cb5943288a7653fe7->leave($__internal_aa7e01dfa031dba01599cc3f1f69c4c40c737504247ea76cb5943288a7653fe7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\membsite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
