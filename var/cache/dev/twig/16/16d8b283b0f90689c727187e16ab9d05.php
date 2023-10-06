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

/* layouts/partials/_nav.html.twig */
class __TwigTemplate_bf3b1a6f4a8bc008dfa7155560934f05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-light bg-light mb-4\"aria-label=\"Third navbar example\" >
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">FLEXVIEW</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample03\" aria-controls=\"navbarsExample03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExample03\">
        <ul class=\"navbar-nav ms-auto\"> <!-- Changed ml-auto to ms-auto -->
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link \" aria-current=\"page\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create");
            echo "\">New Film</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Account</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" >Logout</a>
          </li>
          ";
        } else {
            // line 21
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
          </li>
          ";
        }
        // line 25
        echo "         
        </ul>
      </div>
    </div>
  </nav";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  77 => 22,  74 => 21,  62 => 12,  59 => 11,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-light bg-light mb-4\"aria-label=\"Third navbar example\" >
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"{{path('app_home')}}\">FLEXVIEW</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample03\" aria-controls=\"navbarsExample03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExample03\">
        <ul class=\"navbar-nav ms-auto\"> <!-- Changed ml-auto to ms-auto -->
        {% if app.user %}
          <li class=\"nav-item\">
            <a class=\"nav-link \" aria-current=\"page\" href=\"{{path('app_create')}}\">New Film</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Account</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" >Logout</a>
          </li>
          {% else %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_login')}}\">Login</a>
          </li>
          {% endif %}
         
        </ul>
      </div>
    </div>
  </nav", "layouts/partials/_nav.html.twig", "C:\\Users\\ghaze\\OneDrive\\Bureau\\cinema\\templates\\layouts\\partials\\_nav.html.twig");
    }
}
