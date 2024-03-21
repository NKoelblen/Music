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

/* track/single.html.twig */
class __TwigTemplate_35a8e4524e03bc77761414891ab8072f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/single.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "track/single.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"d-flex gap-1\">
            <a class=\"btn btn-primary\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.tracks.update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">Edit</a>
            <form action=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.tracks.delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 18, $this->source); })()), "artists", [], "any", false, false, false, 18))) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 19, $this->source); })()), "artists", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 20
                echo "                <li><a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artists.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["artist"], "slug", [], "any", false, false, false, 20), "id" => twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        // line 23
        echo "    </ul>
    <p>Album: 
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 25, $this->source); })()), "album", [], "any", false, false, false, 25)) {
            // line 26
            echo "            <a href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("albums.single", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 26, $this->source); })()), "album", [], "any", false, false, false, 26), "slug", [], "any", false, false, false, 26), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 26, $this->source); })()), "album", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 26, $this->source); })()), "album", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
        ";
        }
        // line 28
        echo "    </p>
    <p>Duration (in ms): ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 29, $this->source); })()), "duration", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
    <p>Genres:</p>
    <ul>
        ";
        // line 32
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 32, $this->source); })()), "genres", [], "any", false, false, false, 32))) {
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 33, $this->source); })()), "genres", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 34
                echo "                <li><a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 34), "id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </ul>
    <p>Mood: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 38, $this->source); })()), "mood", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>
    <p>Accousticness: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 39, $this->source); })()), "accousticness", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
    <p>Danceability: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 40, $this->source); })()), "danceability", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
    <p>Energy: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 41, $this->source); })()), "energy", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
    <p>Instrumentalness: ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 42, $this->source); })()), "instrumentalness", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
    <p>Liveness: ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 43, $this->source); })()), "liveness", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
    <p>Loudness: ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 44, $this->source); })()), "loudness", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>
    <p>Speechiness: ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 45, $this->source); })()), "speechiness", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
    <p>Valence: ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 46, $this->source); })()), "valence", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
    ";
        // line 48
        echo "    <p>Modality: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 48, $this->source); })()), "modality", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
    <p>Tempo: ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 49, $this->source); })()), "tempo", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "track/single.html.twig";
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
        return array (  224 => 49,  219 => 48,  215 => 46,  211 => 45,  207 => 44,  203 => 43,  199 => 42,  195 => 41,  191 => 40,  187 => 39,  183 => 38,  180 => 37,  177 => 36,  166 => 34,  161 => 33,  159 => 32,  153 => 29,  150 => 28,  142 => 26,  140 => 25,  136 => 23,  133 => 22,  122 => 20,  117 => 19,  115 => 18,  111 => 16,  102 => 10,  98 => 9,  95 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title track.title %}

{% block body %}
    <h1>{{ track.title }}</h1>
    {% if app.user %}
        <div class=\"d-flex gap-1\">
            <a class=\"btn btn-primary\" href=\"{{ path('admin.tracks.update', {id: track.id})}}\">Edit</a>
            <form action=\"{{ path('admin.tracks.delete', {id: track.id})}}\" method=\"POST\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button class=\"btn btn-danger\">Delete</button>
            </form>
        </div>
    {% endif %}
    <p>Artists:</p>
    <ul>
        {% if track.artists is not empty %}
            {% for artist in track.artists %}
                <li><a href='{{ path('artists.single', {slug: artist.slug, id: artist.id})}}'>{{ artist.name }}</a></li>
            {% endfor %}
        {% endif %}
    </ul>
    <p>Album: 
        {% if track.album %}
            <a href='{{ path('albums.single', {slug: track.album.slug, id: track.album.id})}}'>{{ track.album.title }}</a>
        {% endif %}
    </p>
    <p>Duration (in ms): {{ track.duration }}</p>
    <p>Genres:</p>
    <ul>
        {% if track.genres is not empty %}
            {% for genre in track.genres %}
                <li><a href='{{ path('genres.single', {slug: genre.slug, id: genre.id})}}'>{{ genre.title }}</a></li>
            {% endfor %}
        {% endif %}
    </ul>
    <p>Mood: {{ track.mood }}</p>
    <p>Accousticness: {{ track.accousticness }}</p>
    <p>Danceability: {{ track.danceability }}</p>
    <p>Energy: {{ track.energy }}</p>
    <p>Instrumentalness: {{ track.instrumentalness }}</p>
    <p>Liveness: {{ track.liveness }}</p>
    <p>Loudness: {{ track.loudness }}</p>
    <p>Speechiness: {{ track.speechiness }}</p>
    <p>Valence: {{ track.valence }}</p>
    {# <p>Key: {{ track.musicKey }}</p> #}
    <p>Modality: {{ track.modality }}</p>
    <p>Tempo: {{ track.tempo }}</p>
    {# <p>Time Signature:{{ track.timeSignature }}</p> #}
{% endblock %}", "track/single.html.twig", "/app/templates/track/single.html.twig");
    }
}
