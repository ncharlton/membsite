<?php

/* admin/game/index.html.twig */
class __TwigTemplate_f3a90a6738a89fb3650521cf74dd9eb0429cf4080389423f72f1dc414b1c44b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b3413985264dc2c220a9ccdee02785379dcc6637772e215bd1832d7917a8f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3413985264dc2c220a9ccdee02785379dcc6637772e215bd1832d7917a8f27->enter($__internal_5b3413985264dc2c220a9ccdee02785379dcc6637772e215bd1832d7917a8f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/game/index.html.twig"));

        $__internal_af79814f563eb94ebe61f7816c34e4568f8380eb332af0eb1b254ecdee88ecb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af79814f563eb94ebe61f7816c34e4568f8380eb332af0eb1b254ecdee88ecb7->enter($__internal_af79814f563eb94ebe61f7816c34e4568f8380eb332af0eb1b254ecdee88ecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/game/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "admin/base.html.twig");
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5b3413985264dc2c220a9ccdee02785379dcc6637772e215bd1832d7917a8f27->leave($__internal_5b3413985264dc2c220a9ccdee02785379dcc6637772e215bd1832d7917a8f27_prof);

        
        $__internal_af79814f563eb94ebe61f7816c34e4568f8380eb332af0eb1b254ecdee88ecb7->leave($__internal_af79814f563eb94ebe61f7816c34e4568f8380eb332af0eb1b254ecdee88ecb7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_56942384cec1a8b86ea2d72006287387ab7a726fa37e7835c19a30fea06f74a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56942384cec1a8b86ea2d72006287387ab7a726fa37e7835c19a30fea06f74a1->enter($__internal_56942384cec1a8b86ea2d72006287387ab7a726fa37e7835c19a30fea06f74a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b31ae084afd7dd60fc8c2d7102dd9751d66f510e764dc5165e4b1b0f4444ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b31ae084afd7dd60fc8c2d7102dd9751d66f510e764dc5165e4b1b0f4444ed1->enter($__internal_4b31ae084afd7dd60fc8c2d7102dd9751d66f510e764dc5165e4b1b0f4444ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_game_new");
        echo "\">New Game</a>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>slug</th>
            <th>description</th>
            <th>image</th>
            <th>buy_link</th>
            <th>link</th>
            <th>genre</th>
            <th>mode</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new Twig_Error_Runtime('Variable "games" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameId", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_game_view", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameSlug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameName", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameSlug", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameImage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameBuyLink", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameLink", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameGenre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameMode", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_game_edit", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameSlug", array()))), "html", null, true);
            echo "\">Edit</a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_game_delete", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["game"], "gameSlug", array()))), "html", null, true);
            echo "\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
        
        $__internal_4b31ae084afd7dd60fc8c2d7102dd9751d66f510e764dc5165e4b1b0f4444ed1->leave($__internal_4b31ae084afd7dd60fc8c2d7102dd9751d66f510e764dc5165e4b1b0f4444ed1_prof);

        
        $__internal_56942384cec1a8b86ea2d72006287387ab7a726fa37e7835c19a30fea06f74a1->leave($__internal_56942384cec1a8b86ea2d72006287387ab7a726fa37e7835c19a30fea06f74a1_prof);

    }

    public function getTemplateName()
    {
        return "admin/game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  120 => 34,  116 => 33,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  81 => 24,  77 => 23,  74 => 22,  70 => 21,  49 => 4,  31 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('admin/base.html.twig') }}

{% block body %}
    <a href=\"{{ path('admin_game_new') }}\">New Game</a>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>slug</th>
            <th>description</th>
            <th>image</th>
            <th>buy_link</th>
            <th>link</th>
            <th>genre</th>
            <th>mode</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for game in games %}
            <tr>
                <td>{{ game.gameId }}</td>
                <td><a href=\"{{ path('admin_game_view', {'slug': game.gameSlug}) }}\">{{ game.gameName }}</a></td>
                <td>{{ game.gameSlug }}</td>
                <td>{{ game.gameDescription }}</td>
                <td>{{ game.gameImage }}</td>
                <td>{{ game.gameBuyLink }}</td>
                <td>{{ game.gameLink }}</td>
                <td>{{ game.gameGenre }}</td>
                <td>{{ game.gameMode }}</td>
                <td>
                    <a href=\"{{ path('admin_game_edit', {'slug': game.gameSlug}) }}\">Edit</a>
                    <a href=\"{{ path('admin_game_delete', {'slug': game.gameSlug}) }}\">Delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "admin/game/index.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\admin\\game\\index.html.twig");
    }
}
