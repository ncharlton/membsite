<?php

/* admin/clip/index.html.twig */
class __TwigTemplate_7bc3732bdecde6fbd78991fb2a3dc222284542f619a49187a2dd5df69c08b98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/clip/index.html.twig", 1);
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
        $__internal_3035b9c836e5a4ef89ea9df4a822e58b9d5ae93353766d7b2e830737728e4ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3035b9c836e5a4ef89ea9df4a822e58b9d5ae93353766d7b2e830737728e4ba5->enter($__internal_3035b9c836e5a4ef89ea9df4a822e58b9d5ae93353766d7b2e830737728e4ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clip/index.html.twig"));

        $__internal_53d341096e23e605b6ebdcfc9ab6bc9409a54376c13501b81b239714df031ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d341096e23e605b6ebdcfc9ab6bc9409a54376c13501b81b239714df031ae4->enter($__internal_53d341096e23e605b6ebdcfc9ab6bc9409a54376c13501b81b239714df031ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clip/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3035b9c836e5a4ef89ea9df4a822e58b9d5ae93353766d7b2e830737728e4ba5->leave($__internal_3035b9c836e5a4ef89ea9df4a822e58b9d5ae93353766d7b2e830737728e4ba5_prof);

        
        $__internal_53d341096e23e605b6ebdcfc9ab6bc9409a54376c13501b81b239714df031ae4->leave($__internal_53d341096e23e605b6ebdcfc9ab6bc9409a54376c13501b81b239714df031ae4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4301ea6c8190218c9fa951a82c102f9959bbcd91485eafb0782b247e41ee201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4301ea6c8190218c9fa951a82c102f9959bbcd91485eafb0782b247e41ee201->enter($__internal_a4301ea6c8190218c9fa951a82c102f9959bbcd91485eafb0782b247e41ee201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86f95da8b52e673f60ce351ae50c7d492df2a1c2dec3692ac92b9df4f89ae9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f95da8b52e673f60ce351ae50c7d492df2a1c2dec3692ac92b9df4f89ae9f8->enter($__internal_86f95da8b52e673f60ce351ae50c7d492df2a1c2dec3692ac92b9df4f89ae9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "All clips";
        
        $__internal_86f95da8b52e673f60ce351ae50c7d492df2a1c2dec3692ac92b9df4f89ae9f8->leave($__internal_86f95da8b52e673f60ce351ae50c7d492df2a1c2dec3692ac92b9df4f89ae9f8_prof);

        
        $__internal_a4301ea6c8190218c9fa951a82c102f9959bbcd91485eafb0782b247e41ee201->leave($__internal_a4301ea6c8190218c9fa951a82c102f9959bbcd91485eafb0782b247e41ee201_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bba0e4bae6f407c41627eaba6d809c18b50a1e8f86dfe2a7041a5877a76335e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba0e4bae6f407c41627eaba6d809c18b50a1e8f86dfe2a7041a5877a76335e9->enter($__internal_bba0e4bae6f407c41627eaba6d809c18b50a1e8f86dfe2a7041a5877a76335e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b8c35983489a54e00bc28369f33059958b7255e6ecd1f593b1de0d656d04229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8c35983489a54e00bc28369f33059958b7255e6ecd1f593b1de0d656d04229->enter($__internal_8b8c35983489a54e00bc28369f33059958b7255e6ecd1f593b1de0d656d04229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clip_new");
        echo "\">New Clips</a>
    <hr>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Clip Tracking ID</th>
            <th>Clip Slug</th>
            <th>Clip Name</th>
            <th>Clip Creator</th>
            <th>Clip Vod ID</th>
            <th>Clip Duration</th>
            <th>Clip Created At</th>
            <th>Clip Hits</th>
            <th>Clip Author</th>
            <th>Clip Thumbnail (small)</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allclips"]) || array_key_exists("allclips", $context) ? $context["allclips"] : (function () { throw new Twig_Error_Runtime('Variable "allclips" does not exist.', 25, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clip"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_tracking_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_slug", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_creator", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_vod_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_duration", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_created_at", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_hits", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "author", array()), "getUsername", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_thumbnail_small", array()), "html", null, true);
            echo "\">
                </td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clip_delete", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["clip"], "clip_slug", array()))), "html", null, true);
            echo "\">
                        Delete
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
";
        
        $__internal_8b8c35983489a54e00bc28369f33059958b7255e6ecd1f593b1de0d656d04229->leave($__internal_8b8c35983489a54e00bc28369f33059958b7255e6ecd1f593b1de0d656d04229_prof);

        
        $__internal_bba0e4bae6f407c41627eaba6d809c18b50a1e8f86dfe2a7041a5877a76335e9->leave($__internal_bba0e4bae6f407c41627eaba6d809c18b50a1e8f86dfe2a7041a5877a76335e9_prof);

    }

    public function getTemplateName()
    {
        return "admin/clip/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  145 => 41,  139 => 38,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  95 => 26,  91 => 25,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/base.html.twig\" %}

{% block title %}All clips{% endblock %}

{% block body %}
    <a href=\"{{ path('admin_clip_new') }}\">New Clips</a>
    <hr>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Clip Tracking ID</th>
            <th>Clip Slug</th>
            <th>Clip Name</th>
            <th>Clip Creator</th>
            <th>Clip Vod ID</th>
            <th>Clip Duration</th>
            <th>Clip Created At</th>
            <th>Clip Hits</th>
            <th>Clip Author</th>
            <th>Clip Thumbnail (small)</th>
        </tr>
        </thead>
        <tbody>
        {% for clip in allclips %}
            <tr>
                <td>{{ clip.clip_id }}</td>
                <td>{{ clip.clip_tracking_id }}</td>
                <td>{{ clip.clip_slug }}</td>
                <td>{{ clip.clip_name }}</td>
                <td>{{ clip.clip_creator }}</td>
                <td>{{ clip.clip_vod_id }}</td>
                <td>{{ clip.clip_duration }}</td>
                <td>{{ clip.clip_created_at | date(\"d/m/Y\") }}</td>
                <td>{{ clip.clip_hits }}</td>
                <td>{{ clip.author.getUsername() }}</td>
                <td>
                    <img src=\"{{ clip.clip_thumbnail_small }}\">
                </td>
                <td>
                    <a href=\"{{ path('admin_clip_delete', {'slug' : clip.clip_slug}) }}\">
                        Delete
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "admin/clip/index.html.twig", "C:\\xampp\\htdocs\\membsite\\app\\Resources\\views\\admin\\clip\\index.html.twig");
    }
}
