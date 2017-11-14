<?php

/* base.html.twig */
class __TwigTemplate_caf4bd8c203622214e1e648c3487830b39e02da40410105109535a71a6ee964d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90cf8ac63a8cfbb9c2aa09ac548b5739e3a856bcb06248392d7c06abb2b6f4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cf8ac63a8cfbb9c2aa09ac548b5739e3a856bcb06248392d7c06abb2b6f4af->enter($__internal_90cf8ac63a8cfbb9c2aa09ac548b5739e3a856bcb06248392d7c06abb2b6f4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ca63dcc49f121d6aff759fb2126018bc5ef52e1918f6e6dfacc0cdb710b56c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca63dcc49f121d6aff759fb2126018bc5ef52e1918f6e6dfacc0cdb710b56c0e->enter($__internal_ca63dcc49f121d6aff759fb2126018bc5ef52e1918f6e6dfacc0cdb710b56c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <header>
            ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "user", array())) {
            // line 17
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a>

                ";
            // line 19
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "user", array()), "isSuperAdmin", array()) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "user", array()), "isAdmin", array()))) {
                // line 20
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_main_index");
                echo "\">Admin Dashboard</a>
                ";
            }
            // line 22
            echo "
            ";
        } else {
            // line 24
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a>
            ";
        }
        // line 26
        echo "

        </header>

        <hr>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_90cf8ac63a8cfbb9c2aa09ac548b5739e3a856bcb06248392d7c06abb2b6f4af->leave($__internal_90cf8ac63a8cfbb9c2aa09ac548b5739e3a856bcb06248392d7c06abb2b6f4af_prof);

        
        $__internal_ca63dcc49f121d6aff759fb2126018bc5ef52e1918f6e6dfacc0cdb710b56c0e->leave($__internal_ca63dcc49f121d6aff759fb2126018bc5ef52e1918f6e6dfacc0cdb710b56c0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ca1a3940ad7b691f21f50fdc38571bd8b09c979d0f01473781022f522b2b93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca1a3940ad7b691f21f50fdc38571bd8b09c979d0f01473781022f522b2b93a->enter($__internal_1ca1a3940ad7b691f21f50fdc38571bd8b09c979d0f01473781022f522b2b93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fedf1a603945eb6dd4897b4d35c124ffefc4ca379baab160f2af9b2ac5797a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedf1a603945eb6dd4897b4d35c124ffefc4ca379baab160f2af9b2ac5797a53->enter($__internal_fedf1a603945eb6dd4897b4d35c124ffefc4ca379baab160f2af9b2ac5797a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fedf1a603945eb6dd4897b4d35c124ffefc4ca379baab160f2af9b2ac5797a53->leave($__internal_fedf1a603945eb6dd4897b4d35c124ffefc4ca379baab160f2af9b2ac5797a53_prof);

        
        $__internal_1ca1a3940ad7b691f21f50fdc38571bd8b09c979d0f01473781022f522b2b93a->leave($__internal_1ca1a3940ad7b691f21f50fdc38571bd8b09c979d0f01473781022f522b2b93a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3797ee39f92ab134f140aa3a539e2aa2143d057cd4659daea3a790619f153de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3797ee39f92ab134f140aa3a539e2aa2143d057cd4659daea3a790619f153de->enter($__internal_e3797ee39f92ab134f140aa3a539e2aa2143d057cd4659daea3a790619f153de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98426b5c3c605d01b04c667b8d17b3b8a78af84b8a19b16d5fc9e07872a431cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98426b5c3c605d01b04c667b8d17b3b8a78af84b8a19b16d5fc9e07872a431cb->enter($__internal_98426b5c3c605d01b04c667b8d17b3b8a78af84b8a19b16d5fc9e07872a431cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_98426b5c3c605d01b04c667b8d17b3b8a78af84b8a19b16d5fc9e07872a431cb->leave($__internal_98426b5c3c605d01b04c667b8d17b3b8a78af84b8a19b16d5fc9e07872a431cb_prof);

        
        $__internal_e3797ee39f92ab134f140aa3a539e2aa2143d057cd4659daea3a790619f153de->leave($__internal_e3797ee39f92ab134f140aa3a539e2aa2143d057cd4659daea3a790619f153de_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_e984d384b3a847de99a538172990b2515ab63343df8889ce0d0fc22c978fde9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e984d384b3a847de99a538172990b2515ab63343df8889ce0d0fc22c978fde9e->enter($__internal_e984d384b3a847de99a538172990b2515ab63343df8889ce0d0fc22c978fde9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d770032dcaba6b5937d9629fa3b867b0ea5b85abd7b3aa0196cf62425695cc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d770032dcaba6b5937d9629fa3b867b0ea5b85abd7b3aa0196cf62425695cc5f->enter($__internal_d770032dcaba6b5937d9629fa3b867b0ea5b85abd7b3aa0196cf62425695cc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d770032dcaba6b5937d9629fa3b867b0ea5b85abd7b3aa0196cf62425695cc5f->leave($__internal_d770032dcaba6b5937d9629fa3b867b0ea5b85abd7b3aa0196cf62425695cc5f_prof);

        
        $__internal_e984d384b3a847de99a538172990b2515ab63343df8889ce0d0fc22c978fde9e->leave($__internal_e984d384b3a847de99a538172990b2515ab63343df8889ce0d0fc22c978fde9e_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df2dac73545692559dfd1d983412a1bd916eac8e54d6851bbb448c32311407f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2dac73545692559dfd1d983412a1bd916eac8e54d6851bbb448c32311407f0->enter($__internal_df2dac73545692559dfd1d983412a1bd916eac8e54d6851bbb448c32311407f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95b0ffdfd0bf2bf626b92bb0e609be88755f273c4323df0cd860a0533fdc9f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b0ffdfd0bf2bf626b92bb0e609be88755f273c4323df0cd860a0533fdc9f7d->enter($__internal_95b0ffdfd0bf2bf626b92bb0e609be88755f273c4323df0cd860a0533fdc9f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_95b0ffdfd0bf2bf626b92bb0e609be88755f273c4323df0cd860a0533fdc9f7d->leave($__internal_95b0ffdfd0bf2bf626b92bb0e609be88755f273c4323df0cd860a0533fdc9f7d_prof);

        
        $__internal_df2dac73545692559dfd1d983412a1bd916eac8e54d6851bbb448c32311407f0->leave($__internal_df2dac73545692559dfd1d983412a1bd916eac8e54d6851bbb448c32311407f0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 33,  163 => 32,  146 => 31,  134 => 11,  129 => 10,  120 => 9,  102 => 5,  90 => 35,  87 => 32,  85 => 31,  78 => 26,  72 => 24,  68 => 22,  62 => 20,  60 => 19,  54 => 17,  52 => 16,  47 => 13,  45 => 9,  40 => 7,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/main.css') }}\">
        {% endblock %}
    </head>
    <body>
        <header>
            {% if app.user %}
                <a href=\"{{ path(\"security_logout\") }}\">Logout</a>

                {% if app.user.isSuperAdmin or app.user.isAdmin %}
                    <a href=\"{{ path(\"admin_main_index\") }}\">Admin Dashboard</a>
                {% endif %}

            {% else %}
                <a href=\"{{ path(\"security_login\") }}\">Login</a>
            {% endif %}


        </header>

        <hr>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\base.html.twig");
    }
}
