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

/* home/slider.html.twig */
class __TwigTemplate_6973d01990ee23303cf11605071ffa20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        // line 1
        yield "<!-- start banner Area -->
\t<section class=\"banner-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row fullscreen align-items-center justify-content-start\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"active-banner-slider owl-carousel\">
                    ";
        // line 7
        $context["count"] = 0;
        // line 8
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 9
            yield "                        ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 9, $this->source); })()) + 1);
            // line 10
            yield "\t\t\t\t\t\t<!-- single-slide -->
\t\t\t\t\t\t<div class=\"row single-slide ";
            // line 11
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 11, $this->source); })()) == 1)) {
                yield " active ";
            }
            yield "\">
\t\t\t\t\t\t\t<div class=\"col-lg-7 col-sm-7 my-5\">
\t\t\t\t\t\t\t\t<div class=\"banner-img\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            yield " \">
\t\t\t\t\t\t\t\t\t<div class=\"scene\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 17))), "html", null, true);
            yield "');\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </a>
                                    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-sm-5 my-5\">
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t<h1>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 28), "html", null, true);
            yield "</h1>
\t\t\t\t\t\t\t\t\t<p>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "description", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\"><span class=\"lnr lnr-cross\"></span></a>
\t\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Ajouter au panier</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End banner Area -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/slider.html.twig";
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
        return array (  123 => 39,  109 => 31,  104 => 29,  100 => 28,  88 => 19,  83 => 17,  77 => 14,  69 => 11,  66 => 10,  63 => 9,  58 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- start banner Area -->
\t<section class=\"banner-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row fullscreen align-items-center justify-content-start\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"active-banner-slider owl-carousel\">
                    {% set count = 0 %}
                    {% for rs in slider %}
                        {% set count = count+1 %}
\t\t\t\t\t\t<!-- single-slide -->
\t\t\t\t\t\t<div class=\"row single-slide {% if count == 1 %} active {% endif %}\">
\t\t\t\t\t\t\t<div class=\"col-lg-7 col-sm-7 my-5\">
\t\t\t\t\t\t\t\t<div class=\"banner-img\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('product_show', {'id': rs.id}) }} \">
\t\t\t\t\t\t\t\t\t<div class=\"scene\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('{{ asset('uploads/images/' ~ rs.image) }}');\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">{{rs.title}}</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </a>
                                    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-sm-5 my-5\">
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t<h1>{{rs.title}}</h1>
\t\t\t\t\t\t\t\t\t<p>{{rs.description}}</p>
\t\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"{{path('shopcart_new', {'productId':rs.id})}}\"><span class=\"lnr lnr-cross\"></span></a>
\t\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Ajouter au panier</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    {% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End banner Area -->", "home/slider.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/slider.html.twig");
    }
}
