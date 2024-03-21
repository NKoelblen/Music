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

/* admin/song/index.html.twig */
class __TwigTemplate_79355953f9e56f3528fe926860ba6550 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/song/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/song/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/song/index.html.twig", 1);
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

        echo "All Songs";
        
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
        echo "<h1>All Songs</h1>
<p>
    <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.song.create");
        echo "\">Create a new song</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Title</th>
            <th><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.genre.index");
        echo "\">Genres</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["songs"]) || array_key_exists("songs", $context) ? $context["songs"] : (function () { throw new RuntimeError('Variable "songs" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
            // line 20
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("song.show", ["id" => twig_get_attribute($this->env, $this->source, $context["song"], "id", [], "any", false, false, false, 22), "slug" => twig_get_attribute($this->env, $this->source, $context["song"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["song"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
                </td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genre.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["song"], "genre", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["song"], "genre", [], "any", false, false, false, 24), "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["song"], "genre", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.song.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["song"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Edit</a>
                        <form action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.song.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["song"], "id", [], "any", false, false, false, 28)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return "admin/song/index.html.twig";
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
        return array (  150 => 36,  136 => 28,  132 => 27,  124 => 24,  117 => 22,  113 => 20,  109 => 19,  101 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}All Songs{% endblock %}

{% block body %}
<h1>All Songs</h1>
<p>
    <a class=\"btn btn-primary\" href=\"{{ path('admin.song.create')}}\">Create a new song</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Title</th>
            <th><a href=\"{{ path('admin.genre.index') }}\">Genres</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for song in songs %}
            <tr>
                <td>
                    <a href=\"{{ path('song.show', {id: song.id, slug: song.slug})}}\">{{ song.title }}</a>
                </td>
                <td><a href=\"{{ path('genre.show', {id: song.genre.id, slug: song.genre.slug})}}\">{{ song.genre.title }}</a></td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"{{ path('admin.song.edit', {id: song.id})}}\">Edit</a>
                        <form action=\"{{ path('admin.song.delete', {id: song.id})}}\" method=\"POST\">
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
", "admin/song/index.html.twig", "/app/templates/admin/song/index.html.twig");
    }
}
