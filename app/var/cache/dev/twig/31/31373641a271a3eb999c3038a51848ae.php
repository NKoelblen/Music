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

/* album/single.html.twig */
class __TwigTemplate_371a2cfa34af1b71f9e282907be874ef extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/single.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "album/single.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"d-flex gap-1\">
            <a class=\"btn btn-primary\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.albums.update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">Edit</a>
            <form action=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.albums.delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\" method=\"POST\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button class=\"btn btn-danger\">Delete</button>
            </form>
        </div>
    ";
        }
        // line 16
        echo "    <p>Artists:</p>
    <ul>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 18, $this->source); })()), "artists", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 19
            echo "            <li><a href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artists.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["artist"], "slug", [], "any", false, false, false, 19), "id" => twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
    <p>Date: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 22, $this->source); })()), "releaseDate", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
    <h2>Tracks:</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artists</th>
                <th>Duration</th>
                <th>Genres</th>
                <th>Mood</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 35, $this->source); })()), "tracks", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 36
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tracks.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["track"], "slug", [], "any", false, false, false, 38), "id" => twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
                    </td>
                    <td>
                        <ul>
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 43
                echo "                                <li><a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artists.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["artist"], "slug", [], "any", false, false, false, 43), "id" => twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        </ul>
                    </td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "duration", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "genres", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 51
                echo "                                <li><a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 51), "id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 51), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        </ul>
                    </td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "mood", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
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
        return "album/single.html.twig";
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
        return array (  219 => 58,  210 => 55,  206 => 53,  195 => 51,  191 => 50,  185 => 47,  181 => 45,  170 => 43,  166 => 42,  157 => 38,  153 => 36,  149 => 35,  133 => 22,  130 => 21,  119 => 19,  115 => 18,  111 => 16,  102 => 10,  98 => 9,  95 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title album.title %}

{% block body %}
    <h1>{{ album.title }}</h1>
    {% if app.user %}
        <div class=\"d-flex gap-1\">
            <a class=\"btn btn-primary\" href=\"{{ path('admin.albums.update', {id: album.id})}}\">Edit</a>
            <form action=\"{{ path('admin.albums.delete', {id: album.id})}}\" method=\"POST\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button class=\"btn btn-danger\">Delete</button>
            </form>
        </div>
    {% endif %}
    <p>Artists:</p>
    <ul>
        {% for artist in album.artists %}
            <li><a href='{{ path('artists.single', {slug: artist.slug, id: artist.id})}}'>{{ artist.name }}</a></li>
        {% endfor %}
    </ul>
    <p>Date: {{ album.releaseDate }}</p>
    <h2>Tracks:</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artists</th>
                <th>Duration</th>
                <th>Genres</th>
                <th>Mood</th>
            </tr>
        </thead>
        <tbody>
            {% for track in album.tracks %}
                <tr>
                    <td>
                        <a href=\"{{ path('tracks.single', {slug: track.slug, id: track.id})}}\">{{ track.title }}</a>
                    </td>
                    <td>
                        <ul>
                            {% for artist in track.artists %}
                                <li><a href='{{ path('artists.single', {slug: artist.slug, id: artist.id})}}'>{{ artist.name }}</a></li>
                            {% endfor %}
                        </ul>
                    </td>
                    <td>{{ track.duration }}</td>
                    <td>
                        <ul>
                            {% for genre in track.genres %}
                                <li><a href='{{ path('genres.single', {slug: genre.slug, id: genre.id})}}'>{{ genre.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </td>
                    <td>{{ track.mood }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

{% endblock %}", "album/single.html.twig", "/app/templates/album/single.html.twig");
    }
}
