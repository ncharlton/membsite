<?php

/* admin/news/index.html.twig */
class __TwigTemplate_d7530ee05f3123ad4c308bb73a61918825f9fe3fbe92b8af8dceb97e5cfc8583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/news/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5ee3540840eac464175bad98ee833d3854b9d4c212a4312997b794a11dd883f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ee3540840eac464175bad98ee833d3854b9d4c212a4312997b794a11dd883f->enter($__internal_e5ee3540840eac464175bad98ee833d3854b9d4c212a4312997b794a11dd883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/news/index.html.twig"));

        $__internal_d2a097b40cd9e69b5d2086ae4d7be000fcf1b65d2e1eb4cbdcdd26814d0fd32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a097b40cd9e69b5d2086ae4d7be000fcf1b65d2e1eb4cbdcdd26814d0fd32e->enter($__internal_d2a097b40cd9e69b5d2086ae4d7be000fcf1b65d2e1eb4cbdcdd26814d0fd32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/news/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ee3540840eac464175bad98ee833d3854b9d4c212a4312997b794a11dd883f->leave($__internal_e5ee3540840eac464175bad98ee833d3854b9d4c212a4312997b794a11dd883f_prof);

        
        $__internal_d2a097b40cd9e69b5d2086ae4d7be000fcf1b65d2e1eb4cbdcdd26814d0fd32e->leave($__internal_d2a097b40cd9e69b5d2086ae4d7be000fcf1b65d2e1eb4cbdcdd26814d0fd32e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e582c0eaf8f67ee8a9fd027681fe0ce9e607c3210bc8203700eb256033f976e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e582c0eaf8f67ee8a9fd027681fe0ce9e607c3210bc8203700eb256033f976e->enter($__internal_9e582c0eaf8f67ee8a9fd027681fe0ce9e607c3210bc8203700eb256033f976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4f559bc664a059d3f4fc62b7ee8ec2bfb62f43b6cf4b296b0b8bdd616ff3ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f559bc664a059d3f4fc62b7ee8ec2bfb62f43b6cf4b296b0b8bdd616ff3ac0->enter($__internal_d4f559bc664a059d3f4fc62b7ee8ec2bfb62f43b6cf4b296b0b8bdd616ff3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "All news";
        
        $__internal_d4f559bc664a059d3f4fc62b7ee8ec2bfb62f43b6cf4b296b0b8bdd616ff3ac0->leave($__internal_d4f559bc664a059d3f4fc62b7ee8ec2bfb62f43b6cf4b296b0b8bdd616ff3ac0_prof);

        
        $__internal_9e582c0eaf8f67ee8a9fd027681fe0ce9e607c3210bc8203700eb256033f976e->leave($__internal_9e582c0eaf8f67ee8a9fd027681fe0ce9e607c3210bc8203700eb256033f976e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e0181af9b04f28a7e07edb3bee71eaf89f6929e5431f7483f11e1d664db2d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0181af9b04f28a7e07edb3bee71eaf89f6929e5431f7483f11e1d664db2d89->enter($__internal_6e0181af9b04f28a7e07edb3bee71eaf89f6929e5431f7483f11e1d664db2d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f2c43263e6dffb4725b669915b6bb8c683f0dfbf6c78cfdad8a76c328068941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2c43263e6dffb4725b669915b6bb8c683f0dfbf6c78cfdad8a76c328068941->enter($__internal_6f2c43263e6dffb4725b669915b6bb8c683f0dfbf6c78cfdad8a76c328068941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_news_new");
        echo "\">New News</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>News Title</th>
                <th>News keywords</th>
                <th>Game</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allnews"]) || array_key_exists("allnews", $context) ? $context["allnews"] : (function () { throw new Twig_Error_Runtime('Variable "allnews" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "newsId", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_news_view", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "newsSlug", array()))), "html", null, true);
            echo "\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "newsTitle", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "newsKeywords", array()), "html", null, true);
            echo "</td>
                    <td>
                        <b>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_game_view", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "game", array()), "gameSlug", array()))), "html", null, true);
            echo "\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "game", array()), "gameName", array()), "html", null, true);
            echo "
                            </a>
                        </b>
                    </td>
                    <td>
                        <b>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_view", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "author", array()), "username", array()))), "html", null, true);
            echo "\">
                                ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "author", array()), "username", array()), "html", null, true);
            echo "
                            </a>
                        </b>
                    </td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "updatedAt", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_news_delete", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "newsSlug", array()))), "html", null, true);
            echo "\">
                            Delete
                        </a>
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_news_edit", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "newsSlug", array()))), "html", null, true);
            echo "\">
                            Edit
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
";
        
        $__internal_6f2c43263e6dffb4725b669915b6bb8c683f0dfbf6c78cfdad8a76c328068941->leave($__internal_6f2c43263e6dffb4725b669915b6bb8c683f0dfbf6c78cfdad8a76c328068941_prof);

        
        $__internal_6e0181af9b04f28a7e07edb3bee71eaf89f6929e5431f7483f11e1d664db2d89->leave($__internal_6e0181af9b04f28a7e07edb3bee71eaf89f6929e5431f7483f11e1d664db2d89_prof);

    }

    public function getTemplateName()
    {
        return "admin/news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  155 => 51,  149 => 48,  144 => 46,  140 => 45,  133 => 41,  129 => 40,  120 => 34,  116 => 33,  110 => 30,  104 => 27,  100 => 26,  95 => 24,  92 => 23,  88 => 22,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/base.html.twig\" %}

{% block title %}All news{% endblock %}

{% block body %}
    <a href=\"{{ path('admin_news_new') }}\">New News</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>News Title</th>
                <th>News keywords</th>
                <th>Game</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for news in allnews %}
                <tr>
                    <td>{{ news.newsId }}</td>
                    <td>
                        <a href=\"{{ path('admin_news_view', {'slug' : news.newsSlug}) }}\">
                            {{ news.newsTitle }}
                        </a>
                    </td>
                    <td>{{ news.newsKeywords }}</td>
                    <td>
                        <b>
                            <a href=\"{{ path('admin_game_view', {'slug' : news.game.gameSlug}) }}\">
                                {{ news.game.gameName }}
                            </a>
                        </b>
                    </td>
                    <td>
                        <b>
                            <a href=\"{{ path('admin_user_view', {'user' : news.author.username}) }}\">
                                {{ news.author.username }}
                            </a>
                        </b>
                    </td>
                    <td>{{ news.createdAt | date(\"d/m/Y\") }}</td>
                    <td>{{ news.updatedAt | date(\"d/m/Y\") }}</td>
                    <td>
                        <a href=\"{{ path('admin_news_delete', {'slug' : news.newsSlug}) }}\">
                            Delete
                        </a>
                        <a href=\"{{ path('admin_news_edit', {'slug' : news.newsSlug}) }}\">
                            Edit
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "admin/news/index.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\admin\\news\\index.html.twig");
    }
}
