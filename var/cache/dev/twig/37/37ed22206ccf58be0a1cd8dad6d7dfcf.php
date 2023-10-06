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

/* films/show.html.twig */
class __TwigTemplate_c6744a24f9b0522b16e2636570b90ea1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/show.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "films/show.html.twig", 1);
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
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " - Film Details
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
        transform: scale(1.1); /* Agrandir l'image à 110% lors du survol */
    }
</style>

<div class=\"d-flex justify-content-center\">
    <div>
        <h1 class=\"mt-5\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        echo " - Film Details</h1>
        <div class=\"container mt-7\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"bg-white rounded shadow p-3 mb-4 zoom-container\">
                        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 29, $this->source); })()), "imageName", [], "any", false, false, false, 29)) {
            // line 30
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/films/" . twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 30, $this->source); })()), "imageName", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"img-fluid rounded w-100 zoom-effect\" style=\"object-fit: cover; height: 200px;\">
                        ";
        } else {
            // line 32
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-film-image.jpg"), "html", null, true);
            echo "\" alt=\"Default Image\" class=\"img-fluid rounded\" style=\"object-fit: cover; height: 200px;\">
                        ";
        }
        // line 34
        echo "                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"bg-white rounded p-3 mb-4\">
                        <p><strong>Description:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>
                        <p><strong>Classification:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 39, $this->source); })()), "classification", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
                        <p><strong>Price:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 40, $this->source); })()), "prix", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>

                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_film_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Update</a>

                            <a href=\"#\" onclick=\"event.preventDefault(); if (confirm('Are you sure you want to delete this film?')) { document.getElementById('js-film-delete-form').submit(); }\" class=\"btn btn-danger\">Delete</a>

                            <form id=\"js-film-delete-form\" action=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_films_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" method=\"post\" style=\"display:none;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            </form>
                        ";
        }
        // line 51
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "films/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 51,  163 => 47,  155 => 43,  153 => 42,  148 => 40,  144 => 39,  140 => 38,  134 => 34,  128 => 32,  120 => 30,  118 => 29,  110 => 24,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title %}
    {{ film.title }} - Film Details
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
        transform: scale(1.1); /* Agrandir l'image à 110% lors du survol */
    }
</style>

<div class=\"d-flex justify-content-center\">
    <div>
        <h1 class=\"mt-5\">{{ film.title }} - Film Details</h1>
        <div class=\"container mt-7\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"bg-white rounded shadow p-3 mb-4 zoom-container\">
                        {% if film.imageName %}
                            <img src=\"{{ asset('uploads/films/' ~ film.imageName) }}\" alt=\"{{ film.title }}\" class=\"img-fluid rounded w-100 zoom-effect\" style=\"object-fit: cover; height: 200px;\">
                        {% else %}
                            <img src=\"{{ asset('images/default-film-image.jpg') }}\" alt=\"Default Image\" class=\"img-fluid rounded\" style=\"object-fit: cover; height: 200px;\">
                        {% endif %}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"bg-white rounded p-3 mb-4\">
                        <p><strong>Description:</strong> {{ film.description }}</p>
                        <p><strong>Classification:</strong> {{ film.classification }}</p>
                        <p><strong>Price:</strong> {{ film.prix }}</p>

                        {% if app.user %}
                            <a href=\"{{ path('app_film_edit', {id: film.id}) }}\" class=\"btn btn-primary\">Update</a>

                            <a href=\"#\" onclick=\"event.preventDefault(); if (confirm('Are you sure you want to delete this film?')) { document.getElementById('js-film-delete-form').submit(); }\" class=\"btn btn-danger\">Delete</a>

                            <form id=\"js-film-delete-form\" action=\"{{ path('app_films_delete', {id: film.id}) }}\" method=\"post\" style=\"display:none;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            </form>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}


", "films/show.html.twig", "C:\\Users\\ghaze\\OneDrive\\Bureau\\cinema\\templates\\films\\show.html.twig");
    }
}
