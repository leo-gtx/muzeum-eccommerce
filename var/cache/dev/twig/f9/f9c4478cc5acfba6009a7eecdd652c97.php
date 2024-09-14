<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/filterbar.html.twig */
class __TwigTemplate_4e5803e5b28e85c6c4308109304e0168 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filterbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filterbar.html.twig"));

        // line 1
        yield "<!-- Start Filter Bar -->
<form method=\"get\" >
\t\t\t\t<div class=\"filter-bar d-flex flex-wrap align-items-center\">
\t\t\t\t\t<div class=\"sorting\">
\t\t\t\t\t\t<select name=\"order\" >
\t\t\t\t\t\t\t<option value=\"ASC\" selected>Ordre croissant</option>
\t\t\t\t\t\t\t<option value=\"DESC\">Ordre décroissant</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorting mr-auto\">
\t\t\t\t\t\t<select name=\"limit\">
\t\t\t\t\t\t\t<option value=\"12\" selected>Afficher 12</option>
\t\t\t\t\t\t\t<option value=\"18\">Afficher 18</option>
\t\t\t\t\t\t\t<option value=\"27\">Afficher 27</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
                    <div class=\"sorting\" >
                    <button class=\"genric-btn primary circle\" type=\"submit\">Filtrer</button>
                    </div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 21
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 21, $this->source); })()));
        yield "
                    
\t\t\t\t</div>
\t\t\t\t<!-- End Filter Bar -->
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/filterbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 21,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Start Filter Bar -->
<form method=\"get\" >
\t\t\t\t<div class=\"filter-bar d-flex flex-wrap align-items-center\">
\t\t\t\t\t<div class=\"sorting\">
\t\t\t\t\t\t<select name=\"order\" >
\t\t\t\t\t\t\t<option value=\"ASC\" selected>Ordre croissant</option>
\t\t\t\t\t\t\t<option value=\"DESC\">Ordre décroissant</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorting mr-auto\">
\t\t\t\t\t\t<select name=\"limit\">
\t\t\t\t\t\t\t<option value=\"12\" selected>Afficher 12</option>
\t\t\t\t\t\t\t<option value=\"18\">Afficher 18</option>
\t\t\t\t\t\t\t<option value=\"27\">Afficher 27</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
                    <div class=\"sorting\" >
                    <button class=\"genric-btn primary circle\" type=\"submit\">Filtrer</button>
                    </div>
\t\t\t\t\t
\t\t\t\t\t{{ knp_pagination_render(products)}}
                    
\t\t\t\t</div>
\t\t\t\t<!-- End Filter Bar -->
</form>", "home/filterbar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/filterbar.html.twig");
    }
}
