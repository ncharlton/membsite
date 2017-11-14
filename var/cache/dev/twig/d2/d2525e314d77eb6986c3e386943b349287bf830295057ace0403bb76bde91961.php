<?php

/* admin/base.html.twig */
class __TwigTemplate_15c0db2e316cd24bb442ff2604341354950d79c7cf16574b14f84b8b35befbbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4584b51d80bf4385c1394d8cd19add5e51b696775f2fd67e5d8d682789c6845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4584b51d80bf4385c1394d8cd19add5e51b696775f2fd67e5d8d682789c6845->enter($__internal_c4584b51d80bf4385c1394d8cd19add5e51b696775f2fd67e5d8d682789c6845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_fc3f377d690c6fda53d77de51fbcdfe27f6a91c035dad0518c7af66062ea2dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3f377d690c6fda53d77de51fbcdfe27f6a91c035dad0518c7af66062ea2dd3->enter($__internal_fc3f377d690c6fda53d77de51fbcdfe27f6a91c035dad0518c7af66062ea2dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

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
        ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 29
            echo "            <p>";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "flashes", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 32
            echo "            <p>";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_c4584b51d80bf4385c1394d8cd19add5e51b696775f2fd67e5d8d682789c6845->leave($__internal_c4584b51d80bf4385c1394d8cd19add5e51b696775f2fd67e5d8d682789c6845_prof);

        
        $__internal_fc3f377d690c6fda53d77de51fbcdfe27f6a91c035dad0518c7af66062ea2dd3->leave($__internal_fc3f377d690c6fda53d77de51fbcdfe27f6a91c035dad0518c7af66062ea2dd3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fe0edb492ca5c689894c263adff610127ad6afa925d42d245741c0624c0aa73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe0edb492ca5c689894c263adff610127ad6afa925d42d245741c0624c0aa73->enter($__internal_9fe0edb492ca5c689894c263adff610127ad6afa925d42d245741c0624c0aa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d34ab1412e3e89466f38127756e21b803a31be02110a7e678bd40bb69a135ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34ab1412e3e89466f38127756e21b803a31be02110a7e678bd40bb69a135ece->enter($__internal_d34ab1412e3e89466f38127756e21b803a31be02110a7e678bd40bb69a135ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d34ab1412e3e89466f38127756e21b803a31be02110a7e678bd40bb69a135ece->leave($__internal_d34ab1412e3e89466f38127756e21b803a31be02110a7e678bd40bb69a135ece_prof);

        
        $__internal_9fe0edb492ca5c689894c263adff610127ad6afa925d42d245741c0624c0aa73->leave($__internal_9fe0edb492ca5c689894c263adff610127ad6afa925d42d245741c0624c0aa73_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_799e835e3fa8e7ef92de7074ca7dd04e052e3ba5c3308bf6d601beaca45fa32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799e835e3fa8e7ef92de7074ca7dd04e052e3ba5c3308bf6d601beaca45fa32d->enter($__internal_799e835e3fa8e7ef92de7074ca7dd04e052e3ba5c3308bf6d601beaca45fa32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7615a14bb507f3680d93030ee365c5b96bd21d9580625581cb5732f8d604bd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7615a14bb507f3680d93030ee365c5b96bd21d9580625581cb5732f8d604bd37->enter($__internal_7615a14bb507f3680d93030ee365c5b96bd21d9580625581cb5732f8d604bd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_7615a14bb507f3680d93030ee365c5b96bd21d9580625581cb5732f8d604bd37->leave($__internal_7615a14bb507f3680d93030ee365c5b96bd21d9580625581cb5732f8d604bd37_prof);

        
        $__internal_799e835e3fa8e7ef92de7074ca7dd04e052e3ba5c3308bf6d601beaca45fa32d->leave($__internal_799e835e3fa8e7ef92de7074ca7dd04e052e3ba5c3308bf6d601beaca45fa32d_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_ec14ef82e1b9a9f4e32bc55a00c75f000a285178d53c23dd070a2e1ac09013e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec14ef82e1b9a9f4e32bc55a00c75f000a285178d53c23dd070a2e1ac09013e8->enter($__internal_ec14ef82e1b9a9f4e32bc55a00c75f000a285178d53c23dd070a2e1ac09013e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_86b582aa8706b25dac20461fcafcfaf99298d16e65de8b78230d2740794c0297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b582aa8706b25dac20461fcafcfaf99298d16e65de8b78230d2740794c0297->enter($__internal_86b582aa8706b25dac20461fcafcfaf99298d16e65de8b78230d2740794c0297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "            <header class=\"container-fluid admin-header\">
                <ul>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_index");
        echo "\">Frontpage</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_index");
        echo "\">Users</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_game_index");
        echo "\">Games</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_news_index");
        echo "\">News</a></li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clip_index");
        echo "\">Clips</a></li>
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
        echo "\">Logout</a> </li>
                </ul>
            </header>
        ";
        
        $__internal_86b582aa8706b25dac20461fcafcfaf99298d16e65de8b78230d2740794c0297->leave($__internal_86b582aa8706b25dac20461fcafcfaf99298d16e65de8b78230d2740794c0297_prof);

        
        $__internal_ec14ef82e1b9a9f4e32bc55a00c75f000a285178d53c23dd070a2e1ac09013e8->leave($__internal_ec14ef82e1b9a9f4e32bc55a00c75f000a285178d53c23dd070a2e1ac09013e8_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_9973383232ad37d09888c9ed03554f6d4a89bf4d5a16aa22be2ec8fe5631e7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9973383232ad37d09888c9ed03554f6d4a89bf4d5a16aa22be2ec8fe5631e7a1->enter($__internal_9973383232ad37d09888c9ed03554f6d4a89bf4d5a16aa22be2ec8fe5631e7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e17d9137f40605501460af4c39d62a1da28073100a850c1d9d5e81f4743de94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17d9137f40605501460af4c39d62a1da28073100a850c1d9d5e81f4743de94e->enter($__internal_e17d9137f40605501460af4c39d62a1da28073100a850c1d9d5e81f4743de94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e17d9137f40605501460af4c39d62a1da28073100a850c1d9d5e81f4743de94e->leave($__internal_e17d9137f40605501460af4c39d62a1da28073100a850c1d9d5e81f4743de94e_prof);

        
        $__internal_9973383232ad37d09888c9ed03554f6d4a89bf4d5a16aa22be2ec8fe5631e7a1->leave($__internal_9973383232ad37d09888c9ed03554f6d4a89bf4d5a16aa22be2ec8fe5631e7a1_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e74837e191e182e46cd3a7aca9d6d631574e5c9a39ac7363dd6c715f5f3b74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74837e191e182e46cd3a7aca9d6d631574e5c9a39ac7363dd6c715f5f3b74d->enter($__internal_7e74837e191e182e46cd3a7aca9d6d631574e5c9a39ac7363dd6c715f5f3b74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f34df55dec69ff789376c4e650091976386cc50cdfbb7f402ce004dd95618630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34df55dec69ff789376c4e650091976386cc50cdfbb7f402ce004dd95618630->enter($__internal_f34df55dec69ff789376c4e650091976386cc50cdfbb7f402ce004dd95618630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f34df55dec69ff789376c4e650091976386cc50cdfbb7f402ce004dd95618630->leave($__internal_f34df55dec69ff789376c4e650091976386cc50cdfbb7f402ce004dd95618630_prof);

        
        $__internal_7e74837e191e182e46cd3a7aca9d6d631574e5c9a39ac7363dd6c715f5f3b74d->leave($__internal_7e74837e191e182e46cd3a7aca9d6d631574e5c9a39ac7363dd6c715f5f3b74d_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 37,  211 => 36,  194 => 35,  180 => 23,  176 => 22,  172 => 21,  168 => 20,  164 => 19,  160 => 18,  156 => 16,  147 => 15,  135 => 11,  130 => 10,  121 => 9,  104 => 5,  92 => 39,  89 => 36,  87 => 35,  84 => 34,  75 => 32,  70 => 31,  61 => 29,  57 => 28,  54 => 27,  52 => 15,  48 => 13,  46 => 9,  41 => 7,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/admin.css') }}\">
        {% endblock %}
    </head>
    <body>
        {% block header %}
            <header class=\"container-fluid admin-header\">
                <ul>
                    <li><a href=\"{{ path('main_index') }}\">Frontpage</a></li>
                    <li><a href=\"{{ path('user_admin_index') }}\">Users</a></li>
                    <li><a href=\"{{ path('admin_game_index') }}\">Games</a></li>
                    <li><a href=\"{{ path('admin_news_index') }}\">News</a></li>
                    <li><a href=\"{{ path('admin_clip_index') }}\">Clips</a></li>
                    <li><a href=\"{{ path('security_logout') }}\">Logout</a> </li>
                </ul>
            </header>
        {% endblock %}

        {% for msg in app.flashes('success') %}
            <p>{{ msg }}</p>
        {% endfor %}
        {% for msg in app.flashes('error') %}
            <p>{{ msg }}</p>
        {% endfor %}

        {% block body %}{% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "admin/base.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\admin\\base.html.twig");
    }
}
