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

/* genre/single.html.twig */
class __TwigTemplate_82b19d892d95264d8b34ef97a66608e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/single.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "genre/single.html.twig", 1);
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

        echo twig_escape_filter($this->env, ("Genre: " . twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3)), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"d-flex gap-1\">
            <a class=\"btn btn-primary\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.genres.update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">Edit</a>
            <form action=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.genres.delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\" method=\"POST\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button class=\"btn btn-danger\">Delete</button>
            </form>
        </div>
    ";
        }
        // line 16
        echo "    <p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 16, $this->source); })()), "year", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
    <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
    <h2>Tracks:</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artists</th>
                <th>Album</th>
                <th>Duration</th>
                <th>Genres</th>
                <th>Mood</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 31, $this->source); })()), "tracks", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 32
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tracks.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["track"], "slug", [], "any", false, false, false, 34), "id" => twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                    </td>
                    <td>
                        <ul>
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 39
                echo "                                <li><a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artists.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["artist"], "slug", [], "any", false, false, false, 39), "id" => twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </ul>
                    </td>
                    <td>
                        <a href='";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("albums.single", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 44), "slug", [], "any", false, false, false, 44), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
                    </td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "duration", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "genres", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 50
                echo "                                <li><a href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 50), "id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 50), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                        </ul>
                    </td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "mood", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 57, $this->source); })()), "children", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 58
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "tracks", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 59
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tracks.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["track"], "slug", [], "any", false, false, false, 61), "id" => twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "title", [], "any", false, false, false, 61), "html", null, true);
                echo "</a>
                        </td>
                        <td>
                            <ul>
                                ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 65));
                foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                    // line 66
                    echo "                                    <li><a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artists.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["artist"], "slug", [], "any", false, false, false, 66), "id" => twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 66), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                            </ul>
                        </td>
                        <td>
                            <a href='";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("albums.single", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 71), "slug", [], "any", false, false, false, 71), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), "html", null, true);
                echo "</a>
                        </td>
                        <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "duration", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                        <td>
                            <ul>
                                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["track"], "genres", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 77
                    echo "                                    <li><a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 77), "id" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 77), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                            </ul>
                        </td>
                        <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "mood", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>
    ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parents"]) || array_key_exists("parents", $context) ? $context["parents"] : (function () { throw new RuntimeError('Variable "parents" does not exist.', 87, $this->source); })()), 0, [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87)) {
            // line 88
            echo "        <h2>Parents:</h2>
        <ul>
            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parents"]) || array_key_exists("parents", $context) ? $context["parents"] : (function () { throw new RuntimeError('Variable "parents" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
                // line 91
                echo "                <li>
                    <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["id" => twig_get_attribute($this->env, $this->source, $context["parent"], "id", [], "any", false, false, false, 92), "slug" => twig_get_attribute($this->env, $this->source, $context["parent"], "slug", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parent"], "title", [], "any", false, false, false, 92), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "        </ul>
    ";
        }
        // line 97
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 97, $this->source); })()), 0, [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97)) {
            // line 98
            echo "        <h2>Children:</h2>
        <ul>
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 101
                echo "                <li>
                    <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["id" => twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 102), "slug" => twig_get_attribute($this->env, $this->source, $context["child"], "slug", [], "any", false, false, false, 102)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 102), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "        </ul>
    ";
        }
        // line 107
        echo "    ";
        if ( !twig_test_empty((isset($context["siblings"]) || array_key_exists("siblings", $context) ? $context["siblings"] : (function () { throw new RuntimeError('Variable "siblings" does not exist.', 107, $this->source); })()))) {
            // line 108
            echo "        <h2>Siblings:</h2>
        <ul>
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["siblings"]) || array_key_exists("siblings", $context) ? $context["siblings"] : (function () { throw new RuntimeError('Variable "siblings" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
                // line 111
                echo "                <li>
                    <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres.single", ["id" => twig_get_attribute($this->env, $this->source, $context["sibling"], "id", [], "any", false, false, false, 112), "slug" => twig_get_attribute($this->env, $this->source, $context["sibling"], "slug", [], "any", false, false, false, 112)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sibling"], "title", [], "any", false, false, false, 112), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sibling'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "        </ul>
    ";
        }
        // line 117
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "genre/single.html.twig";
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
        return array (  391 => 117,  387 => 115,  376 => 112,  373 => 111,  369 => 110,  365 => 108,  362 => 107,  358 => 105,  347 => 102,  344 => 101,  340 => 100,  336 => 98,  333 => 97,  329 => 95,  318 => 92,  315 => 91,  311 => 90,  307 => 88,  305 => 87,  301 => 85,  295 => 84,  286 => 81,  282 => 79,  271 => 77,  267 => 76,  261 => 73,  254 => 71,  249 => 68,  238 => 66,  234 => 65,  225 => 61,  221 => 59,  216 => 58,  211 => 57,  202 => 54,  198 => 52,  187 => 50,  183 => 49,  177 => 46,  170 => 44,  165 => 41,  154 => 39,  150 => 38,  141 => 34,  137 => 32,  133 => 31,  116 => 17,  111 => 16,  102 => 10,  98 => 9,  95 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title \"Genre: \" ~ genre.title %}

{% block body %}
    <h1>{{ genre.title }}</h1>
    {% if app.user %}
        <div class=\"d-flex gap-1\">
            <a class=\"btn btn-primary\" href=\"{{ path('admin.genres.update', {id: genre.id})}}\">Edit</a>
            <form action=\"{{ path('admin.genres.delete', {id: genre.id})}}\" method=\"POST\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button class=\"btn btn-danger\">Delete</button>
            </form>
        </div>
    {% endif %}
    <p>{{ genre.year }}</p>
    <p>{{ genre.description }}</p>
    <h2>Tracks:</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artists</th>
                <th>Album</th>
                <th>Duration</th>
                <th>Genres</th>
                <th>Mood</th>
            </tr>
        </thead>
        <tbody>
            {% for track in genre.tracks %}
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
                    <td>
                        <a href='{{ path('albums.single', {slug: track.album.slug, id: track.album.id})}}'>{{ track.album.title }}</a>
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
            {% for child in genre.children %}
                {% for track in child.tracks %}
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
                        <td>
                            <a href='{{ path('albums.single', {slug: track.album.slug, id: track.album.id})}}'>{{ track.album.title }}</a>
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
            {% endfor %}
        </tbody>
    </table>
    {% if parents.0.id %}
        <h2>Parents:</h2>
        <ul>
            {% for parent in parents %}
                <li>
                    <a href=\"{{ path('genres.single', {id: parent.id, slug: parent.slug})}}\">{{ parent.title }}</a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
    {% if children.0.id %}
        <h2>Children:</h2>
        <ul>
            {% for child in children %}
                <li>
                    <a href=\"{{ path('genres.single', {id: child.id, slug: child.slug})}}\">{{ child.title }}</a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
    {% if siblings is not empty %}
        <h2>Siblings:</h2>
        <ul>
            {% for sibling in siblings %}
                <li>
                    <a href=\"{{ path('genres.single', {id: sibling.id, slug: sibling.slug})}}\">{{ sibling.title }}</a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

{% endblock %}", "genre/single.html.twig", "/app/templates/genre/single.html.twig");
    }
}
