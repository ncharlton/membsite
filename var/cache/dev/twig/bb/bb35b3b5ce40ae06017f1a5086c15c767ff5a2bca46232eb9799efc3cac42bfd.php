<?php

/* admin/user/index.html.twig */
class __TwigTemplate_ada4e07a9d320474b7069628379b4955373beef257c016e40a887e8a9b19199d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_618d9e2fada73d3b3178dd7b9db942187137359eebb3cadea9a60012504ca4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618d9e2fada73d3b3178dd7b9db942187137359eebb3cadea9a60012504ca4de->enter($__internal_618d9e2fada73d3b3178dd7b9db942187137359eebb3cadea9a60012504ca4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6e563793d39819969ef17ec92e6298daf0514dd7c706b791105cf518392aa348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e563793d39819969ef17ec92e6298daf0514dd7c706b791105cf518392aa348->enter($__internal_6e563793d39819969ef17ec92e6298daf0514dd7c706b791105cf518392aa348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "admin/base.html.twig");
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_618d9e2fada73d3b3178dd7b9db942187137359eebb3cadea9a60012504ca4de->leave($__internal_618d9e2fada73d3b3178dd7b9db942187137359eebb3cadea9a60012504ca4de_prof);

        
        $__internal_6e563793d39819969ef17ec92e6298daf0514dd7c706b791105cf518392aa348->leave($__internal_6e563793d39819969ef17ec92e6298daf0514dd7c706b791105cf518392aa348_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66e51a2fa1abe6c8de81d32e77dc9c37aa68c8b7af4f0b2eaf7dc0a0fdcea54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e51a2fa1abe6c8de81d32e77dc9c37aa68c8b7af4f0b2eaf7dc0a0fdcea54f->enter($__internal_66e51a2fa1abe6c8de81d32e77dc9c37aa68c8b7af4f0b2eaf7dc0a0fdcea54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa64860f1b38ddf65b230f6908e8d7cb7bdef206121c9c95ec8fc97ef754a1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa64860f1b38ddf65b230f6908e8d7cb7bdef206121c9c95ec8fc97ef754a1c8->enter($__internal_fa64860f1b38ddf65b230f6908e8d7cb7bdef206121c9c95ec8fc97ef754a1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User list";
        
        $__internal_fa64860f1b38ddf65b230f6908e8d7cb7bdef206121c9c95ec8fc97ef754a1c8->leave($__internal_fa64860f1b38ddf65b230f6908e8d7cb7bdef206121c9c95ec8fc97ef754a1c8_prof);

        
        $__internal_66e51a2fa1abe6c8de81d32e77dc9c37aa68c8b7af4f0b2eaf7dc0a0fdcea54f->leave($__internal_66e51a2fa1abe6c8de81d32e77dc9c37aa68c8b7af4f0b2eaf7dc0a0fdcea54f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b77280f5f206a035292130c904a185bf7fd877d1b5c66fe683c5136f8da59fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77280f5f206a035292130c904a185bf7fd877d1b5c66fe683c5136f8da59fb3->enter($__internal_b77280f5f206a035292130c904a185bf7fd877d1b5c66fe683c5136f8da59fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70115cd79296343048da4f7daf945e0a213d98129d66e5d3d1809479f4c7a4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70115cd79296343048da4f7daf945e0a213d98129d66e5d3d1809479f4c7a4d6->enter($__internal_70115cd79296343048da4f7daf945e0a213d98129d66e5d3d1809479f4c7a4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Superior Role</th>
                <th>Activated</th>
                <th>Username</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Type</th>
                <th>Twitch ID</th>
                <th>Twitch Sub Plan</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "userId", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 29
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "SuperAdmin", array(), "method")) {
                // line 30
                echo "                            <tag class=\"super-admin\">Super Admin</tag>
                        ";
            }
            // line 32
            echo "                        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "admin", array(), "method")) {
                // line 33
                echo "                            <tag class=\"admin\">Admin</tag>
                        ";
            }
            // line 35
            echo "                        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "mod", array(), "method")) {
                // line 36
                echo "                            <tag class=\"mod\">Mod</tag>
                        ";
            }
            // line 38
            echo "                    </td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "activated", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_view", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo " | ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "tid", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "profile", array()), "profileSubplan", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "createdAt", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updatedAt", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()))), "html", null, true);
            echo "\">Edit</a>
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()))), "html", null, true);
            echo "\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
";
        
        $__internal_70115cd79296343048da4f7daf945e0a213d98129d66e5d3d1809479f4c7a4d6->leave($__internal_70115cd79296343048da4f7daf945e0a213d98129d66e5d3d1809479f4c7a4d6_prof);

        
        $__internal_b77280f5f206a035292130c904a185bf7fd877d1b5c66fe683c5136f8da59fb3->leave($__internal_b77280f5f206a035292130c904a185bf7fd877d1b5c66fe683c5136f8da59fb3_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 54,  181 => 50,  177 => 49,  172 => 47,  168 => 46,  164 => 45,  160 => 44,  156 => 43,  144 => 42,  140 => 41,  134 => 40,  130 => 39,  127 => 38,  123 => 36,  120 => 35,  116 => 33,  113 => 32,  109 => 30,  107 => 29,  101 => 26,  98 => 25,  94 => 24,  74 => 6,  65 => 5,  47 => 3,  37 => 5,  34 => 4,  32 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('admin/base.html.twig') }}

{% block title %}User list{% endblock %}

{% block body %}
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Superior Role</th>
                <th>Activated</th>
                <th>Username</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Type</th>
                <th>Twitch ID</th>
                <th>Twitch Sub Plan</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td>{{ user.userId }}
                    </td>
                    <td>
                        {% if user.SuperAdmin() %}
                            <tag class=\"super-admin\">Super Admin</tag>
                        {% endif %}
                        {% if user.admin() %}
                            <tag class=\"admin\">Admin</tag>
                        {% endif %}
                        {% if user.mod() %}
                            <tag class=\"mod\">Mod</tag>
                        {% endif %}
                    </td>
                    <td>{{ user.activated }}</td>
                    <td><a href=\"{{ path(\"admin_user_view\", {'user' : user.username}) }}\">{{ user.username }}</a></td>
                    <td>{{ user.email }}</td>
                    <td>{% for role in user.roles %}{{ role }} | {% endfor %}</td>
                    <td>{{ user.type }}</td>
                    <td>{{ user.tid }}</td>
                    <td>{{ user.profile.profileSubplan }}</td>
                    <td>{{ user.createdAt|date(\"m/d/Y\") }}</td>
                    <td>{{ user.updatedAt|date(\"m/d/Y\") }}</td>
                    <td>
                        <a href=\"{{ path(\"admin_user_edit\", {'user' : user.username}) }}\">Edit</a>
                        <a href=\"{{ path(\"admin_user_delete\", {'user' : user.username}) }}\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "admin/user/index.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\admin\\user\\index.html.twig");
    }
}
