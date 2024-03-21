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

/* admin/genre/index.html.twig */
class __TwigTemplate_3dd5a2e1345c15c1ca5ffa134334df74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/genre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/genre/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/genre/index.html.twig", 1);
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

        echo "All genres";
        
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
        echo "<h1>All genres</h1>
<p>
    <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.genres.create");
        echo "\">Create a new genre</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Hierarchy</th>
            <th>Title</th>
            <th>Year</th>
            <th>Transverse</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "hierarchy", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["genre"], "color", [], "any", false, false, false, 24) != "#ffffff")) {
                // line 25
                echo "                    <td style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "color", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 26), "slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" style=\"color: #FFFFFF\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 28
                echo "                    <td>
                        <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 29), "slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 29), "html", null, true);
                echo "</a>
                ";
            }
            // line 31
            echo "                </td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "year", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td><input type=\"checkbox\" ";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["genre"], "transverse", [], "any", false, false, false, 33)) ? ("checked") : (""));
            echo " disabled></td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.genres.update", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Edit</a>
                        <form action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.genres.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 37)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return "admin/genre/index.html.twig";
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
        return array (  174 => 45,  160 => 37,  156 => 36,  150 => 33,  146 => 32,  143 => 31,  136 => 29,  133 => 28,  126 => 26,  121 => 25,  119 => 24,  115 => 23,  112 => 22,  108 => 21,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}All genres{% endblock %}

{% block body %}
<h1>All genres</h1>
<p>
    <a class=\"btn btn-primary\" href=\"{{ path('admin.genres.create')}}\">Create a new genre</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Hierarchy</th>
            <th>Title</th>
            <th>Year</th>
            <th>Transverse</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for genre in genres %}
            <tr>
                <td>{{ genre.hierarchy }}</td>
                {% if genre.color != '#ffffff' %}
                    <td style=\"background-color: {{ genre.color }}\">
                        <a href=\"{{ path('genres.single', {id: genre.id, slug: genre.slug})}}\" style=\"color: #FFFFFF\">{{ genre.title }}</a>
                {% else %}
                    <td>
                        <a href=\"{{ path('genres.single', {id: genre.id, slug: genre.slug})}}\">{{ genre.title }}</a>
                {% endif %}
                </td>
                <td>{{ genre.year }}</td>
                <td><input type=\"checkbox\" {{ genre.transverse ? 'checked' }} disabled></td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"{{ path('admin.genres.update', {id: genre.id})}}\">Edit</a>
                        <form action=\"{{ path('admin.genres.delete', {id: genre.id})}}\" method=\"POST\">
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
", "admin/genre/index.html.twig", "/app/templates/admin/genre/index.html.twig");
    }
}
