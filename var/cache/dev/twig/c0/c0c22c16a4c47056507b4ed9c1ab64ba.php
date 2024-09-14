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

/* home/productshow.html.twig */
class __TwigTemplate_45dfcb0e3655d988c71f582959f7b1eb extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/productshow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/productshow.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/productshow.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "keywords", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "\t<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Détail du produit</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Acceuil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"#\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->

    \t<!--================Single Product Area =================-->
\t<div class=\"product_image_area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row s_product_inner\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"s_Product_carousel\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 31
            yield "\t\t\t\t\t\t<div class=\"single-prd-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 32))), "detail_thumb"), "html", null, true);
            yield "\" style=\"height:555;width:600;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
\t\t\t\t\t\t</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 offset-lg-1\">
                <form name=\"shopcart\" class=\"form-horizontal qtyFrm\" action=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_new");
        yield "\" method=\"post\">
\t\t\t\t\t<div class=\"s_product_text\">
\t\t\t\t\t\t<h3>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), "html", null, true);
        yield "</h3>
\t\t\t\t\t\t<h2>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "price", [], "any", false, false, false, 41), "html", null, true);
        yield " FCFA</h2>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a class=\"active\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["category" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "category", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\"><span>Categorie</span> : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "category", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Disponibilité</span> : ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "amount", [], "any", false, false, false, 44)) {
            yield "En stock";
        } else {
            yield " Stock écoulé ";
        }
        yield "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true);
        yield "</p>
\t\t\t\t\t\t<div class=\"product_count\">
\t\t\t\t\t\t\t<label for=\"qty\">Quantité:</label>
                            <input type=\"number\" name=\"shopcart[Q]\" id=\"sst\" class=\"input-text qty\" value=\"1\" placeholder=\"Qté\" min=\"1\" max=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "amount", [], "any", false, false, false, 49), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"shopcart[ID]\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t<button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 51, $this->source); })()), "amount", [], "any", false, false, false, 51), "html", null, true);
        yield ") result.value++;return false;\"
\t\t\t\t\t\t\t class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
\t\t\t\t\t\t\t<button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
\t\t\t\t\t\t\t class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
\t\t\t\t\t\t</div>
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-item"), "html", null, true);
        yield "\">
\t\t\t\t\t\t<div class=\"card_area d-flex align-items-center\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"primary-btn\" style=\"border:none;\" >Ajouter au panier</button>
\t\t\t\t\t\t\t<a class=\"icon_btn\" href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_toggle_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\"><i class=\"lnr lnr lnr-heart\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
\t<section class=\"product_description_area\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Description</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\"
\t\t\t\t\t aria-selected=\"false\">Specification</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" id=\"review-tab\" data-toggle=\"tab\" href=\"#review\" role=\"tab\" aria-controls=\"review\"
\t\t\t\t\t aria-selected=\"false\">Reviews</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t<p>";
        // line 87
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "detail", [], "any", false, false, false, 87);
        yield "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Width</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>128mm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Height</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>508mm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Depth</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>85mm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Weight</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>52gm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Quality checking</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>yes</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Freshness Duration</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>03days</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>When packeting</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Without touch of hand</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Each Box contains</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>60pcs</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"review\" role=\"tabpanel\" aria-labelledby=\"review-tab\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"row total_rate\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"box_total\">
\t\t\t\t\t\t\t\t\t\t<h5>Total</h5>
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 168
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 168, $this->source); })())) > 0)) {
            $context["foo"] = 0;
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 168, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
                yield " ";
                $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 168, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 168));
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 168, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 168, $this->source); })()))), 1, ".", ","), "html", null, true);
        }
        yield "</h4>
\t\t\t\t\t\t\t\t\t\t<h6>(";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 169, $this->source); })())), "html", null, true);
        yield ") Notes</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t\t<div class=\"review_list\">
                                ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 175, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 176
            yield "\t\t\t\t\t\t\t\t<div class=\"review_item\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
                                        
\t\t\t\t\t\t\t\t\t\t\t";
            // line 179
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 179))) {
                // line 180
                yield "                                                  <div class=\"d-flex\">
                                                        <img src=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 181), "image", [], "any", false, false, false, 181))), "html", null, true);
                yield "\" style=\"vertical-align: middle;width: 50px;height: 50px;border-radius: 50%;\" alt=\"avatar-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 181), "name", [], "any", false, false, false, 181), "html", null, true);
                yield "\">
                                                  </div>  
                                            ";
            }
            // line 184
            yield "                                        
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4></h4>
                                            ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 188)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 189
                yield "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    ";
            // line 193
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 193))) {
                // line 194
                yield "                                    \t<h5>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 194), "name", [], "any", false, false, false, 194), "html", null, true);
                yield "</h5> 
                                    ";
            }
            // line 196
            yield "\t\t\t\t\t\t\t\t\t<p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "comment", [], "any", false, false, false, 196), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        ";
        // line 201
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201)) {
            // line 202
            yield "\t\t\t\t\t\t<div class=\"col-lg-6\">
                        ";
            // line 203
            yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
            yield "
\t\t\t\t\t\t\t<div class=\"review_box\">
\t\t\t\t\t\t\t\t<h4>Ajouter votre commentaire</h4>
\t\t\t\t\t\t\t\t";
            // line 206
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), 'form_start');
            yield "
                                ";
            // line 207
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), 'widget');
            yield "
                                <div class=\"col-md-12 text-right\">
\t\t\t\t\t\t\t\t\t\t <button class=\"primary-btn\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 209, $this->source); })()), "Envoyez")) : ("Envoyez")), "html", null, true);
            yield "</button>
\t\t\t\t\t\t\t\t\t</div>
                               
                                ";
            // line 212
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), 'form_end');
            yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        ";
        } else {
            // line 216
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><i class=\"fa fa-lock\"></i>If you want to add comment please login</a>
                        ";
        }
        // line 218
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Product Description Area =================-->

   
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/productshow.html.twig";
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
        return array (  492 => 218,  486 => 216,  479 => 212,  473 => 209,  468 => 207,  464 => 206,  458 => 203,  455 => 202,  453 => 201,  449 => 199,  439 => 196,  433 => 194,  431 => 193,  427 => 191,  420 => 189,  416 => 188,  410 => 184,  402 => 181,  399 => 180,  397 => 179,  392 => 176,  388 => 175,  379 => 169,  361 => 168,  277 => 87,  246 => 59,  240 => 56,  232 => 51,  228 => 50,  224 => 49,  218 => 46,  209 => 44,  203 => 43,  198 => 41,  194 => 40,  189 => 38,  184 => 35,  173 => 32,  170 => 31,  166 => 30,  149 => 16,  145 => 15,  136 => 8,  126 => 7,  106 => 5,  86 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ product.title }}{% endblock %}
{% block keywords %}{{ product.keywords }}{% endblock %}
{% block description %}{{ product.description }}{% endblock %}

{% block body %}
\t<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Détail du produit</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"{{path('home')}}\">Acceuil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"#\">{{product.title}}</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->

    \t<!--================Single Product Area =================-->
\t<div class=\"product_image_area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row s_product_inner\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"s_Product_carousel\">
                    {% for rs in images %}
\t\t\t\t\t\t<div class=\"single-prd-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('uploads/images/' ~ rs.image) | imagine_filter('detail_thumb') }}\" style=\"height:555;width:600;\" alt=\"{{rs.title}}\">
\t\t\t\t\t\t</div>
                    {% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 offset-lg-1\">
                <form name=\"shopcart\" class=\"form-horizontal qtyFrm\" action=\"{{ path('shopcart_new') }}\" method=\"post\">
\t\t\t\t\t<div class=\"s_product_text\">
\t\t\t\t\t\t<h3>{{product.title}}</h3>
\t\t\t\t\t\t<h2>{{product.price}} FCFA</h2>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a class=\"active\" href=\"{{ path('home', {'category': product.category.id}) }}\"><span>Categorie</span> : {{product.category.title}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Disponibilité</span> : {% if product.amount %}En stock{% else %} Stock écoulé {% endif %}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p>{{product.description}}</p>
\t\t\t\t\t\t<div class=\"product_count\">
\t\t\t\t\t\t\t<label for=\"qty\">Quantité:</label>
                            <input type=\"number\" name=\"shopcart[Q]\" id=\"sst\" class=\"input-text qty\" value=\"1\" placeholder=\"Qté\" min=\"1\" max=\"{{ product.amount }}\">
                            <input type=\"hidden\" name=\"shopcart[ID]\" value=\"{{ product.id }}\">
\t\t\t\t\t\t\t<button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < {{product.amount}}) result.value++;return false;\"
\t\t\t\t\t\t\t class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
\t\t\t\t\t\t\t<button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
\t\t\t\t\t\t\t class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
\t\t\t\t\t\t</div>
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-item') }}\">
\t\t\t\t\t\t<div class=\"card_area d-flex align-items-center\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"primary-btn\" style=\"border:none;\" >Ajouter au panier</button>
\t\t\t\t\t\t\t<a class=\"icon_btn\" href=\"{{path('user_toggle_favorite', {'id': product.id })}}\"><i class=\"lnr lnr lnr-heart\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
\t<section class=\"product_description_area\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Description</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\"
\t\t\t\t\t aria-selected=\"false\">Specification</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" id=\"review-tab\" data-toggle=\"tab\" href=\"#review\" role=\"tab\" aria-controls=\"review\"
\t\t\t\t\t aria-selected=\"false\">Reviews</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t<p>{{ product.detail |raw }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Width</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>128mm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Height</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>508mm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Depth</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>85mm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Weight</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>52gm</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Quality checking</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>yes</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Freshness Duration</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>03days</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>When packeting</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Without touch of hand</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>Each Box contains</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h5>60pcs</h5>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"review\" role=\"tabpanel\" aria-labelledby=\"review-tab\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"row total_rate\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"box_total\">
\t\t\t\t\t\t\t\t\t\t<h5>Total</h5>
\t\t\t\t\t\t\t\t\t\t<h4>{% if comments|length > 0 %}{% set foo = 0 %}{% for rs in comments %} {% set foo = foo + rs.rate %} {% endfor %} {{ (foo / comments|length)|number_format(1, '.', ',') }}{% endif %}</h4>
\t\t\t\t\t\t\t\t\t\t<h6>({{comments|length}}) Notes</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t\t<div class=\"review_list\">
                                {% for rs in comments %}
\t\t\t\t\t\t\t\t<div class=\"review_item\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
                                        
\t\t\t\t\t\t\t\t\t\t\t{% if rs.author is not null %}
                                                  <div class=\"d-flex\">
                                                        <img src=\"{{asset('uploads/images/' ~ rs.author.image)}}\" style=\"vertical-align: middle;width: 50px;height: 50px;border-radius: 50%;\" alt=\"avatar-{{rs.author.name}}\">
                                                  </div>  
                                            {% endif %}
                                        
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4></h4>
                                            {% for i in 1.. rs.rate %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
                                            {% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    {% if rs.author is not null %}
                                    \t<h5>{{rs.author.name}}</h5> 
                                    {% endif %}
\t\t\t\t\t\t\t\t\t<p>{{rs.comment}}</p>
\t\t\t\t\t\t\t\t</div>
                                {% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        {% if app.user %}
\t\t\t\t\t\t<div class=\"col-lg-6\">
                        {{ include('messages.html.twig') }}
\t\t\t\t\t\t\t<div class=\"review_box\">
\t\t\t\t\t\t\t\t<h4>Ajouter votre commentaire</h4>
\t\t\t\t\t\t\t\t{{form_start(form)}}
                                {{ form_widget(form) }}
                                <div class=\"col-md-12 text-right\">
\t\t\t\t\t\t\t\t\t\t <button class=\"primary-btn\">{{ button_label|default('Envoyez') }}</button>
\t\t\t\t\t\t\t\t\t</div>
                               
                                {{form_end(form)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        {% else %}
                            <a href=\"{{path('app_login')}}\"><i class=\"fa fa-lock\"></i>If you want to add comment please login</a>
                        {% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Product Description Area =================-->

   
    </section>
{% endblock %}
", "home/productshow.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/productshow.html.twig");
    }
}
