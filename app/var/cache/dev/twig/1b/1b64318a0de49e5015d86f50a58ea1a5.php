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

/* admin/track/index.html.twig */
class __TwigTemplate_f7630949f699ffb3fded14928928abf7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/track/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/track/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/track/index.html.twig", 1);
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

        echo "All tracks";
        
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
        echo "<h1>All tracks</h1>
<p>
    <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.tracks.create");
        echo "\">Create a new track</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Title</th>
            <th>Artists</th>
            <th>Album</th>
            <th>Duration</th>
            <th>Genres</th>
            <th>Mood</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 24
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tracks.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["track"], "slug", [], "any", false, false, false, 26), "id" => twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                </td>
                <td>
                    <ul>
                        ";
            // line 30
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 30))) {
                // line 31
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                    // line 32
                    echo "                                <li><a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artists.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["artist"], "slug", [], "any", false, false, false, 32), "id" => twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 32), "html", null, true);
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                        ";
            }
            // line 35
            echo "                    </ul>
                </td>
                <td>
                    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 38)) {
                // line 39
                echo "                        <a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("albums.single", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 39), "slug", [], "any", false, false, false, 39), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), "html", null, true);
                echo "</a>
                    ";
            }
            // line 41
            echo "                </td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "duration", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        ";
            // line 45
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["track"], "genres", [], "any", false, false, false, 45))) {
                // line 46
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "genres", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 47
                    echo "                                <li><a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 47), "id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 47), "html", null, true);
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                        ";
            }
            // line 50
            echo "                    </ul>
                </td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "mood", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.tracks.update", ["id" => twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Edit</a>
                        <form action=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.tracks.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 56)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        return "admin/track/index.html.twig";
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
        return array (  221 => 64,  207 => 56,  203 => 55,  197 => 52,  193 => 50,  190 => 49,  179 => 47,  174 => 46,  172 => 45,  166 => 42,  163 => 41,  155 => 39,  153 => 38,  148 => 35,  145 => 34,  134 => 32,  129 => 31,  127 => 30,  118 => 26,  114 => 24,  110 => 23,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}All tracks{% endblock %}

{% block body %}
<h1>All tracks</h1>
<p>
    <a class=\"btn btn-primary\" href=\"{{ path('admin.tracks.create')}}\">Create a new track</a>
</p>
<table class=\"table\">
    <thead>
        <tr>
            <th>Title</th>
            <th>Artists</th>
            <th>Album</th>
            <th>Duration</th>
            <th>Genres</th>
            <th>Mood</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for track in tracks %}
            <tr>
                <td>
                    <a href=\"{{ path('tracks.single', {slug: track.slug, id: track.id})}}\">{{ track.title }}</a>
                </td>
                <td>
                    <ul>
                        {% if track.artists is not empty %}
                            {% for artist in track.artists %}
                                <li><a href='{{ path('artists.single', {slug: artist.slug, id: artist.id})}}'>{{ artist.name }}</a></li>
                            {% endfor %}
                        {% endif %}
                    </ul>
                </td>
                <td>
                    {% if track.album %}
                        <a href='{{ path('albums.single', {slug: track.album.slug, id: track.album.id})}}'>{{ track.album.title }}</a>
                    {% endif %}
                </td>
                <td>{{ track.duration }}</td>
                <td>
                    <ul>
                        {% if track.genres is not empty %}
                            {% for genre in track.genres %}
                                <li><a href='{{ path('genres.single', {slug: genre.slug, id: genre.id})}}'>{{ genre.title }}</a></li>
                            {% endfor %}
                        {% endif %}
                    </ul>
                </td>
                <td>{{ track.mood }}</td>
                <td>
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-primary\" href=\"{{ path('admin.tracks.update', {id: track.id})}}\">Edit</a>
                        <form action=\"{{ path('admin.tracks.delete', {id: track.id})}}\" method=\"POST\">
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
", "admin/track/index.html.twig", "/app/templates/admin/track/index.html.twig");
    }
}
