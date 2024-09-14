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

/* home/sidebar.html.twig */
class __TwigTemplate_521a8771236a15840eedbee151dc06b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sidebar.html.twig"));

        // line 1
        yield "<div class=\"sidebar-categories\">
\t\t\t\t\t<div class=\"head\">Categories</div>
\t\t\t\t\t<ul class=\"main-categories\">

                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            yield "\t\t\t\t\t    
                        ";
            // line 7
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 7)) {
                // line 8
                yield "\t\t\t\t\t\t<li class=\"main-nav-list\"><a data-toggle=\"collapse\" href=\"#category";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 8), "html", null, true);
                yield "\" aria-expanded=\"false\" aria-controls=\"fruitsVegetable\"><span
\t\t\t\t\t\t\t\t class=\"lnr lnr-arrow-right\"></span>";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 9), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t<ul class=\"collapse\" id=\"category";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 10), "html", null, true);
                yield "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"fruitsVegetable\">
                                ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 11, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 12
                    yield "                                  ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "parent", [], "any", false, false, false, 12) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "parent", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 12)))) {
                        // line 13
                        yield "
\t\t\t\t\t\t\t\t    <li class=\"main-nav-list child\">
                                <a href=\"";
                        // line 15
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 15), "html", null, true);
                        yield "<span class=\"number\">(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "products", [], "any", false, false, false, 15)), "html", null, true);
                        yield ")</span></a>
                                    </li>
                                  ";
                    }
                    // line 18
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                        ";
            }
            // line 22
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidebar-filter mt-50\">
\t\t\t\t\t<div class=\"top-filter-head\">Filtre de produit</div>
\t\t\t\t\t";
        // line 39
        yield "\t\t\t\t\t";
        // line 53
        yield "\t\t\t\t\t<div class=\"common-filter\">
\t\t\t\t\t\t<div class=\"head\">Prix</div>
\t\t\t\t\t\t<div class=\"price-range-area\">
\t\t\t\t\t\t\t<div id=\"price-range\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"value-wrapper d-flex\">
\t\t\t\t\t\t\t\t<div class=\"price\">Prix:</div>
\t\t\t\t\t\t\t\t<span>XAF </span>
\t\t\t\t\t\t\t\t<div id=\"lower-value\"></div>
\t\t\t\t\t\t\t\t<div class=\"to\">à</div>
\t\t\t\t\t\t\t\t<span>XAF </span>
\t\t\t\t\t\t\t\t<div id=\"upper-value\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/sidebar.html.twig";
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
        return array (  122 => 53,  120 => 39,  114 => 23,  108 => 22,  103 => 19,  97 => 18,  87 => 15,  83 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"sidebar-categories\">
\t\t\t\t\t<div class=\"head\">Categories</div>
\t\t\t\t\t<ul class=\"main-categories\">

                    {% for category in categories %}
\t\t\t\t\t    
                        {% if not category.parent %}
\t\t\t\t\t\t<li class=\"main-nav-list\"><a data-toggle=\"collapse\" href=\"#category{{category.id}}\" aria-expanded=\"false\" aria-controls=\"fruitsVegetable\"><span
\t\t\t\t\t\t\t\t class=\"lnr lnr-arrow-right\"></span>{{category.title}}</a>
\t\t\t\t\t\t\t<ul class=\"collapse\" id=\"category{{category.id}}\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"fruitsVegetable\">
                                {% for cat in categories %}
                                  {% if cat.parent and cat.parent.id == category.id %}

\t\t\t\t\t\t\t\t    <li class=\"main-nav-list child\">
                                <a href=\"{{path('home', {'category': cat.id})}}\">{{cat.title}}<span class=\"number\">({{cat.products|length}})</span></a>
                                    </li>
                                  {% endif %}
                                {% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                        {% endif %}
                    {% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidebar-filter mt-50\">
\t\t\t\t\t<div class=\"top-filter-head\">Filtre de produit</div>
\t\t\t\t\t{# <div class=\"common-filter\">
\t\t\t\t\t\t<div class=\"head\">Brands</div>
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"apple\" name=\"brand\"><label for=\"apple\">Apple<span>(29)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"asus\" name=\"brand\"><label for=\"asus\">Asus<span>(29)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"gionee\" name=\"brand\"><label for=\"gionee\">Gionee<span>(19)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"micromax\" name=\"brand\"><label for=\"micromax\">Micromax<span>(19)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"samsung\" name=\"brand\"><label for=\"samsung\">Samsung<span>(19)</span></label></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>#}
\t\t\t\t\t{# <div class=\"common-filter\">
\t\t\t\t\t\t<div class=\"head\">Color</div>
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"black\" name=\"color\"><label for=\"black\">Black<span>(29)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"balckleather\" name=\"color\"><label for=\"balckleather\">Black
\t\t\t\t\t\t\t\t\t\tLeather<span>(29)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"blackred\" name=\"color\"><label for=\"blackred\">Black
\t\t\t\t\t\t\t\t\t\twith red<span>(19)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"gold\" name=\"color\"><label for=\"gold\">Gold<span>(19)</span></label></li>
\t\t\t\t\t\t\t\t<li class=\"filter-list\"><input class=\"pixel-radio\" type=\"radio\" id=\"spacegrey\" name=\"color\"><label for=\"spacegrey\">Spacegrey<span>(19)</span></label></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>  #}
\t\t\t\t\t<div class=\"common-filter\">
\t\t\t\t\t\t<div class=\"head\">Prix</div>
\t\t\t\t\t\t<div class=\"price-range-area\">
\t\t\t\t\t\t\t<div id=\"price-range\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"value-wrapper d-flex\">
\t\t\t\t\t\t\t\t<div class=\"price\">Prix:</div>
\t\t\t\t\t\t\t\t<span>XAF </span>
\t\t\t\t\t\t\t\t<div id=\"lower-value\"></div>
\t\t\t\t\t\t\t\t<div class=\"to\">à</div>
\t\t\t\t\t\t\t\t<span>XAF </span>
\t\t\t\t\t\t\t\t<div id=\"upper-value\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

", "home/sidebar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/sidebar.html.twig");
    }
}
