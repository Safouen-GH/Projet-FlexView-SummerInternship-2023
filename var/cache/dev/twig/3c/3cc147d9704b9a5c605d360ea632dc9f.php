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

/* films/index.html.twig */
class __TwigTemplate_17a5e200d523fc1b5073734c30736ec6 extends Template
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
        return "layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "films/index.html.twig", 1);
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

        // line 4
        echo "    Dive In The Realm of Films
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<style>
    .zoom-container {
        overflow: hidden;
    }

    .zoom-effect {
        transition: transform 0.2s ease;
    }

    .zoom-effect:hover {
        transform: scale(1.1);
    }
</style>

<div class=\"container\">
    ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            echo "        <h1 class=\"text-center text-muted my-5\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\AppExtension']->pluralize(twig_length_filter($this->env, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 24, $this->source); })())), "Film Within Reach -_-", "Films Within Reach !!"), "html", null, true);
            echo "</h1>

        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 26, $this->source); })()), 3));
            foreach ($context['_seq'] as $context["_key"] => $context["filmBatch"]) {
                // line 27
                echo "            <div class=\"row\">
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["filmBatch"]);
                foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                    // line 29
                    echo "                    <div class=\"col-md-4 d-flex align-items-stretch\">
                        <div class=\"bg-white rounded shadow p-3 mb-4 w-100 zoom-container\">
                            <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_film_details", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                    echo "\">
                                ";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, $context["film"], "imageName", [], "any", false, false, false, 32)) {
                        // line 33
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/films/" . twig_get_attribute($this->env, $this->source, $context["film"], "imageName", [], "any", false, false, false, 33))), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 33), "html", null, true);
                        echo "\" class=\"img-fluid rounded w-100 zoom-effect\" style=\"object-fit: cover; height: 200px;\">
                                ";
                    } else {
                        // line 35
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-film-image.jpg"), "html", null, true);
                        echo "\" alt=\"Default Image\" class=\"img-fluid rounded\" style=\"object-fit: cover; height: 200px;\">
                                ";
                    }
                    // line 37
                    echo "                            </a>
                            <div class=\"mt-4 pl-4 text-muted\"> ";
                    // line 39
                    echo "                                <strong>Title:</strong> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                                <br>
                                <strong>Description:</strong> ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "description", [], "any", false, false, false, 41), "html", null, true);
                    echo "
                                <br>
                                <strong>Classification:</strong> ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "classification", [], "any", false, false, false, 43), "html", null, true);
                    echo "
                                <br>
                                <strong>Price:</strong> ";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "prix", [], "any", false, false, false, 45), "html", null, true);
                    echo "
                                <br>
                                <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_film_details", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">View More</a>
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filmBatch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    ";
        } else {
            // line 55
            echo "        <p class=\"h1 text-center\">No Films Yet. <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create");
            echo "\">Be The First</a></p> 
    ";
        }
        // line 57
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "films/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 57,  195 => 55,  192 => 54,  185 => 52,  174 => 47,  169 => 45,  164 => 43,  159 => 41,  153 => 39,  150 => 37,  144 => 35,  136 => 33,  134 => 32,  130 => 31,  126 => 29,  122 => 28,  119 => 27,  115 => 26,  109 => 24,  107 => 23,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title %}
    Dive In The Realm of Films
{% endblock %}

{% block body %}
<style>
    .zoom-container {
        overflow: hidden;
    }

    .zoom-effect {
        transition: transform 0.2s ease;
    }

    .zoom-effect:hover {
        transform: scale(1.1);
    }
</style>

<div class=\"container\">
    {% if films|length > 0 %}
        <h1 class=\"text-center text-muted my-5\">{{ pluralize( films|length, 'Film Within Reach -_-', 'Films Within Reach !!') }}</h1>

        {% for filmBatch in films|batch(3) %}
            <div class=\"row\">
                {% for film in filmBatch %}
                    <div class=\"col-md-4 d-flex align-items-stretch\">
                        <div class=\"bg-white rounded shadow p-3 mb-4 w-100 zoom-container\">
                            <a href=\"{{ path('app_film_details', {'id': film.id}) }}\">
                                {% if film.imageName %}
                                    <img src=\"{{ asset('uploads/films/' ~ film.imageName) }}\" alt=\"{{ film.title }}\" class=\"img-fluid rounded w-100 zoom-effect\" style=\"object-fit: cover; height: 200px;\">
                                {% else %}
                                    <img src=\"{{ asset('images/default-film-image.jpg') }}\" alt=\"Default Image\" class=\"img-fluid rounded\" style=\"object-fit: cover; height: 200px;\">
                                {% endif %}
                            </a>
                            <div class=\"mt-4 pl-4 text-muted\"> {# Add margin-top to create space between image and other details #}
                                <strong>Title:</strong> {{ film.title }}
                                <br>
                                <strong>Description:</strong> {{ film.description }}
                                <br>
                                <strong>Classification:</strong> {{ film.classification }}
                                <br>
                                <strong>Price:</strong> {{ film.prix }}
                                <br>
                                <a href=\"{{ path('app_film_details', {'id': film.id}) }}\" class=\"btn btn-primary\">View More</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endfor %}
    {% else %}
        <p class=\"h1 text-center\">No Films Yet. <a href=\"{{ path('app_create') }}\">Be The First</a></p> 
    {% endif %}
</div>
{% endblock %}

", "films/index.html.twig", "C:\\Users\\ghaze\\OneDrive\\Bureau\\cinema\\templates\\films\\index.html.twig");
    }
}
