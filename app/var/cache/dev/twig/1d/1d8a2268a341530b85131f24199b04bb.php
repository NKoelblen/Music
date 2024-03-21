<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/album/index.html.twig */
class __TwigTemplate_61ed28a7c6de486d35a5ce920de5585d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/album/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Albums";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Albums</h1>
<p>
    <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.albums.create");
        echo "\">Add a new album</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Title</th>
            <th>Artists</th>
            <th>Date</th>
            <th>Label</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 23
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("albums.single", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 25), "slug" => twig_get_attribute($this->env, $this->source, $context["album"], "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
                </td>
                                <td>
                    <ul>
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["album"], "artists", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 30
                echo "                            <li><a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artists.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["artist"], "slug", [], "any", false, false, false, 30), "id" => twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </ul>
                </td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "releaseDate", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "label", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "type", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.albums.update", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Edit</a>
                        <form action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.albums.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/album/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  177 => 48,  163 => 40,  159 => 39,  153 => 36,  149 => 35,  145 => 34,  141 => 32,  130 => 30,  126 => 29,  117 => 25,  113 => 23,  109 => 22,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Albums{% endblock %}

{% block body %}
<h1>Albums</h1>
<p>
    <a class=\"btn btn-primary\" href=\"{{ path('admin.albums.create')}}\">Add a new album</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Title</th>
            <th>Artists</th>
            <th>Date</th>
            <th>Label</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for album in albums %}
            <tr>
                <td>
                    <a href=\"{{ path('albums.single', {id: album.id, slug: album.slug})}}\">{{ album.title }}</a>
                </td>
                                <td>
                    <ul>
                        {% for artist in album.artists %}
                            <li><a href='{{ path('artists.single', {slug: artist.slug, id: artist.id})}}'>{{ artist.name }}</a></li>
                        {% endfor %}
                    </ul>
                </td>
                <td>{{ album.releaseDate }}</td>
                <td>{{ album.label }}</td>
                <td>{{ album.type }}</td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"{{ path('admin.albums.update', {id: album.id})}}\">Edit</a>
                        <form action=\"{{ path('admin.albums.delete', {id: album.id})}}\" method=\"POST\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}
", "admin/album/index.html.twig", "/app/templates/admin/album/index.html.twig");
    }
}
