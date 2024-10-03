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
\t
\t<!--================Event Product Area =================-->
\t";
        // line 25
        if ((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "\t<div>
\t<div class=\"row \">
\t\t<div class=\"col-lg-12 no-padding exclusive-left\" style=\"background-image: url('";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28))), "html", null, true);
            yield "')\">
\t\t\t<div class=\"row clock_sec clockdiv\" style=\"background-color: rgba(213, 40, 40, 0.8);\" id=\"clockdiv";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"text-center\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
            yield "</h1>
\t\t\t\t\t<h3 class=\"text-center\">Offre à -";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "discount", [], "any", false, false, false, 32), "html", null, true);
            yield "% pendant encore: </h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<div class=\"row clock-wrap\" >
\t\t\t\t\t\t\t<div class=\"col clockinner1 clockinner\">
\t\t\t\t\t\t\t\t<h1 class=\"days\">1</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Jours</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t<h1 class=\"hours\">00</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Heure</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t<h1 class=\"minutes\">00</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Minutes</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t<h1 class=\"seconds\">00</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Secondes</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t";
        }
        // line 61
        yield "    \t<!--================Single Product Area =================-->
\t<div class=\"product_image_area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row s_product_inner\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"s_Product_carousel\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 68
            yield "\t\t\t\t\t\t<div class=\"single-prd-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 69))), "detail_thumb"), "html", null, true);
            yield "\" style=\"height:555;width:600;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 69), "html", null, true);
            yield "\">
\t\t\t\t\t\t</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 offset-lg-1\">
                <form name=\"shopcart\" class=\"form-horizontal qtyFrm\" action=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_new");
        yield "\" method=\"post\">
\t\t\t\t\t<div class=\"s_product_text\">
\t\t\t\t\t\t<h3>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 77, $this->source); })()), "title", [], "any", false, false, false, 77), "html", null, true);
        yield "</h3>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<h2>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 79, $this->source); })()), "price", [], "any", false, false, false, 79), "html", null, true);
        yield " XAF</h2>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t<h4><del class=\"text-muted\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "originalPrice", [], "any", false, false, false, 81), "html", null, true);
        yield " XAF</del></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a class=\"active\" href=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["category" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "category", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87)]), "html", null, true);
        yield "\"><span>Categorie</span> : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "category", [], "any", false, false, false, 87), "title", [], "any", false, false, false, 87), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Disponibilité</span> : ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "amount", [], "any", false, false, false, 88)) {
            yield "En stock";
        } else {
            yield " Stock écoulé ";
        }
        yield "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p class=\"lead\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 90, $this->source); })()), "description", [], "any", false, false, false, 90), "html", null, true);
        yield "</p>
\t\t\t\t\t\t<div class=\"product_count\">
\t\t\t\t\t\t\t<label for=\"qty\">Quantité:</label>
                            <input type=\"number\" name=\"shopcart[Q]\" id=\"sst\" class=\"input-text qty\" value=\"1\" placeholder=\"Qté\" min=\"1\" max=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "amount", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"shopcart[ID]\" value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t<button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 95, $this->source); })()), "amount", [], "any", false, false, false, 95), "html", null, true);
        yield ") result.value++;return false;\"
\t\t\t\t\t\t\t class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
\t\t\t\t\t\t\t<button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
\t\t\t\t\t\t\t class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
\t\t\t\t\t\t</div>
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-item"), "html", null, true);
        yield "\">
\t\t\t\t\t\t<div class=\"card_area d-flex align-items-center\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"primary-btn\" style=\"border:none;\" >Ajouter au panier</button>
\t\t\t\t\t\t\t<a class=\"icon_btn\" href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_toggle_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
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
\t\t\t\t\t<a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Description</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\"
\t\t\t\t\t aria-selected=\"false\">Foire Aux Questions</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"review-tab\" data-toggle=\"tab\" href=\"#review\" role=\"tab\" aria-controls=\"review\"
\t\t\t\t\t aria-selected=\"false\">Avis</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t<p>";
        // line 131
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 131, $this->source); })()), "detail", [], "any", false, false, false, 131);
        yield "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Quelle garantie offrez-vous sur vos produits ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Nous offrons une garantie de 60 jours sur tous nos produits. Cela couvre tout défaut de fabrication ou problème rencontré dans des conditions normales d'utilisation. Si vous rencontrez un souci avec votre achat, contactez-nous pour bénéficier de notre service après-vente.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Comment puis-je faire valoir la garantie ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Pour faire valoir votre garantie, il suffit de nous contacter avec votre preuve d'achat et une description du problème. Nous nous engageons à résoudre le problème dans les meilleurs délais, que ce soit par un échange ou une réparation.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Quels sont les modes de livraison disponibles ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Nous proposons plusieurs options de livraison, incluant la livraison standard, express, et livraison gratuite à partir d'un certain montant d'achat. Les délais et coûts varient en fonction de votre localisation et du mode de livraison choisi.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Puis-je suivre mon colis après l'expédition ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Oui, une fois votre commande expédiée, vous recevrez un e-mail de confirmation avec un numéro de suivi vous permettant de suivre votre colis en temps réel.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Livrez-vous à l'international ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Oui, nous offrons la livraison internationale dans de nombreux pays. Les frais et délais de livraison varient en fonction de la destination.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Qu'est-ce que l'accès à vie ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>L'accès à vie signifie que, après l'achat de certains produits (notamment numériques tels que les e-books, cours en ligne, ou logiciels), vous aurez un accès illimité à ces contenus sans durée d'expiration. Vous pourrez les consulter et les télécharger à tout moment.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2> Comment fonctionne l'accès à vie pour mes achats numériques ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Après votre achat, un mail avec le contenu téléchargeble vous sera envoyé. Vous pourrez y accéder quand vous le souhaitez, et ce, pour toujours. Aucun abonnement ou frais supplémentaire ne sera requis pour garder l'accès.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Quels sont les modes de paiement acceptés ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Nous acceptons plusieurs modes de paiement, incluant Orange Money, MoMo, Moov, Wave, les cartes de crédit (Visa, Mastercard, American Express), et certains systèmes de paiement locaux. Tous nos paiements sont sécurisés et cryptés pour protéger vos informations.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Mes informations de paiement sont-elles sécurisées ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Absolument ! Nous utilisons des systèmes de paiement sécurisés qui garantissent la protection de vos données personnelles et bancaires. Toutes les transactions sont cryptées avec des protocoles de sécurité de pointe.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"review\" role=\"tabpanel\" aria-labelledby=\"review-tab\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"row total_rate\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"box_total\">
\t\t\t\t\t\t\t\t\t\t<h5>Total</h5>
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 202
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 202, $this->source); })())) > 0)) {
            $context["foo"] = 0;
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 202, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
                yield " ";
                $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 202, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 202));
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 202, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 202, $this->source); })()))), 1, ".", ","), "html", null, true);
        }
        yield "</h4>
\t\t\t\t\t\t\t\t\t\t<h6>(";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 203, $this->source); })())), "html", null, true);
        yield ") Notes</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t\t<div class=\"review_list\">
                                ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 209, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 210
            yield "\t\t\t\t\t\t\t\t<div class=\"review_item\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
                                        
\t\t\t\t\t\t\t\t\t\t\t";
            // line 213
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 213), "image", [], "any", false, false, false, 213))) {
                // line 214
                yield "                                                  <div class=\"d-flex\">
                                                        <img src=\"";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 215), "image", [], "any", false, false, false, 215))), "html", null, true);
                yield "\" style=\"vertical-align: middle;width: 50px;height: 50px;border-radius: 50%;\" alt=\"avatar-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 215), "name", [], "any", false, false, false, 215), "html", null, true);
                yield "\">
                                                  </div>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 218
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/avatar.jpg"), "html", null, true);
                yield "\" style=\"vertical-align: middle;width: 50px;height: 50px;border-radius: 50%;\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            // line 222
            yield "                                        
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4></h4>
                                            ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 226)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 227
                yield "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    ";
            // line 231
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 231))) {
                // line 232
                yield "                                    \t<h5>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "author", [], "any", false, false, false, 232), "name", [], "any", false, false, false, 232), "html", null, true);
                yield "</h5> 
                                    ";
            }
            // line 234
            yield "\t\t\t\t\t\t\t\t\t<p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "comment", [], "any", false, false, false, 234), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        ";
        // line 239
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 239, $this->source); })()), "user", [], "any", false, false, false, 239)) {
            // line 240
            yield "\t\t\t\t\t\t<div class=\"col-lg-6\">
                        ";
            // line 241
            yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
            yield "
\t\t\t\t\t\t\t<div class=\"review_box\">
\t\t\t\t\t\t\t\t<h4>Ajouter votre commentaire</h4>
\t\t\t\t\t\t\t\t";
            // line 244
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), 'form_start');
            yield "
                                ";
            // line 245
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), 'widget');
            yield "
                                <div class=\"col-md-12 text-right\">
\t\t\t\t\t\t\t\t\t\t <button class=\"primary-btn\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 247, $this->source); })()), "Envoyez")) : ("Envoyez")), "html", null, true);
            yield "</button>
\t\t\t\t\t\t\t\t\t</div>
                               
                                ";
            // line 250
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), 'form_end');
            yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        ";
        } else {
            // line 254
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><i class=\"fa fa-lock\"></i>Si vous voulez laisser un avis connectez-vous svp</a>
                        ";
        }
        // line 256
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Product Description Area =================-->

   
    </section>
\t<script src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/js/countdown.js"), "html", null, true);
        yield "\"></script>
\t\t<script>
\t\t\t// Parse the event start and end times
\t\t\tvar startAt = new Date(\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 268, $this->source); })()), "startAt", [], "any", false, false, false, 268), "Y-m-d H:i:s"), "html", null, true);
        yield "\");
\t\t\tvar endAt = new Date(\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 269, $this->source); })()), "endAt", [], "any", false, false, false, 269), "Y-m-d H:i:s"), "html", null, true);
        yield "\");

\t\t\t// Calculate the total event duration (in milliseconds)
\t\t\tvar totalDuration = endAt - startAt;

\t\t\t// Calculate the time elapsed since the event started
\t\t\tvar now = new Date();
\t\t\tvar timeElapsed = now - startAt;

\t\t\t// Calculate the remaining time by subtracting the elapsed time from the total duration
\t\t\tvar remainingTime = totalDuration - timeElapsed;

\t\t\t// Set the deadline to the current time plus the remaining time
\t\t\tvar deadline = new Date(now.getTime() + remainingTime);
\t\t\tinitializeClock('clockdiv";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 283, $this->source); })()), "id", [], "any", false, false, false, 283), "html", null, true);
        yield "', deadline);
\t\t</script>
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
        return array (  593 => 283,  576 => 269,  572 => 268,  566 => 265,  555 => 256,  549 => 254,  542 => 250,  536 => 247,  531 => 245,  527 => 244,  521 => 241,  518 => 240,  516 => 239,  512 => 237,  502 => 234,  496 => 232,  494 => 231,  490 => 229,  483 => 227,  479 => 226,  473 => 222,  467 => 219,  464 => 218,  456 => 215,  453 => 214,  451 => 213,  446 => 210,  442 => 209,  433 => 203,  415 => 202,  341 => 131,  310 => 103,  304 => 100,  296 => 95,  292 => 94,  288 => 93,  282 => 90,  273 => 88,  267 => 87,  258 => 81,  253 => 79,  248 => 77,  243 => 75,  238 => 72,  227 => 69,  224 => 68,  220 => 67,  212 => 61,  180 => 32,  176 => 31,  171 => 29,  167 => 28,  163 => 26,  161 => 25,  149 => 16,  145 => 15,  136 => 8,  126 => 7,  106 => 5,  86 => 4,  66 => 3,  43 => 1,);
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
\t
\t<!--================Event Product Area =================-->
\t{% if event %}
\t<div>
\t<div class=\"row \">
\t\t<div class=\"col-lg-12 no-padding exclusive-left\" style=\"background-image: url('{{ asset('uploads/images/' ~ event.image) }}')\">
\t\t\t<div class=\"row clock_sec clockdiv\" style=\"background-color: rgba(213, 40, 40, 0.8);\" id=\"clockdiv{{event.id}}\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"text-center\">{{event.title}}</h1>
\t\t\t\t\t<h3 class=\"text-center\">Offre à -{{event.discount}}% pendant encore: </h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<div class=\"row clock-wrap\" >
\t\t\t\t\t\t\t<div class=\"col clockinner1 clockinner\">
\t\t\t\t\t\t\t\t<h1 class=\"days\">1</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Jours</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t<h1 class=\"hours\">00</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Heure</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t<h1 class=\"minutes\">00</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Minutes</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t<h1 class=\"seconds\">00</h1>
\t\t\t\t\t\t\t\t<span class=\"smalltext text-body\">Secondes</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t{% endif %}
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
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<h2>{{product.price}} XAF</h2>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t<h4><del class=\"text-muted\">{{product.originalPrice}} XAF</del></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a class=\"active\" href=\"{{ path('home', {'category': product.category.id}) }}\"><span>Categorie</span> : {{product.category.title}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Disponibilité</span> : {% if product.amount %}En stock{% else %} Stock écoulé {% endif %}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p class=\"lead\">{{product.description}}</p>
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
\t\t\t\t\t<a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Description</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\"
\t\t\t\t\t aria-selected=\"false\">Foire Aux Questions</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"review-tab\" data-toggle=\"tab\" href=\"#review\" role=\"tab\" aria-controls=\"review\"
\t\t\t\t\t aria-selected=\"false\">Avis</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t<p>{{ product.detail |raw }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Quelle garantie offrez-vous sur vos produits ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Nous offrons une garantie de 60 jours sur tous nos produits. Cela couvre tout défaut de fabrication ou problème rencontré dans des conditions normales d'utilisation. Si vous rencontrez un souci avec votre achat, contactez-nous pour bénéficier de notre service après-vente.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Comment puis-je faire valoir la garantie ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Pour faire valoir votre garantie, il suffit de nous contacter avec votre preuve d'achat et une description du problème. Nous nous engageons à résoudre le problème dans les meilleurs délais, que ce soit par un échange ou une réparation.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Quels sont les modes de livraison disponibles ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Nous proposons plusieurs options de livraison, incluant la livraison standard, express, et livraison gratuite à partir d'un certain montant d'achat. Les délais et coûts varient en fonction de votre localisation et du mode de livraison choisi.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Puis-je suivre mon colis après l'expédition ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Oui, une fois votre commande expédiée, vous recevrez un e-mail de confirmation avec un numéro de suivi vous permettant de suivre votre colis en temps réel.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Livrez-vous à l'international ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Oui, nous offrons la livraison internationale dans de nombreux pays. Les frais et délais de livraison varient en fonction de la destination.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Qu'est-ce que l'accès à vie ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>L'accès à vie signifie que, après l'achat de certains produits (notamment numériques tels que les e-books, cours en ligne, ou logiciels), vous aurez un accès illimité à ces contenus sans durée d'expiration. Vous pourrez les consulter et les télécharger à tout moment.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2> Comment fonctionne l'accès à vie pour mes achats numériques ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Après votre achat, un mail avec le contenu téléchargeble vous sera envoyé. Vous pourrez y accéder quand vous le souhaitez, et ce, pour toujours. Aucun abonnement ou frais supplémentaire ne sera requis pour garder l'accès.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Quels sont les modes de paiement acceptés ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Nous acceptons plusieurs modes de paiement, incluant Orange Money, MoMo, Moov, Wave, les cartes de crédit (Visa, Mastercard, American Express), et certains systèmes de paiement locaux. Tous nos paiements sont sécurisés et cryptés pour protéger vos informations.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<h2>Mes informations de paiement sont-elles sécurisées ?</h2>
\t\t\t\t\t\t\t\t\t\t<p>Absolument ! Nous utilisons des systèmes de paiement sécurisés qui garantissent la protection de vos données personnelles et bancaires. Toutes les transactions sont cryptées avec des protocoles de sécurité de pointe.</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"review\" role=\"tabpanel\" aria-labelledby=\"review-tab\">
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
                                        
\t\t\t\t\t\t\t\t\t\t\t{% if rs.author.image is not null %}
                                                  <div class=\"d-flex\">
                                                        <img src=\"{{asset('uploads/images/' ~ rs.author.image)}}\" style=\"vertical-align: middle;width: 50px;height: 50px;border-radius: 50%;\" alt=\"avatar-{{rs.author.name}}\">
                                                  </div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/client/img/avatar.jpg' )}}\" style=\"vertical-align: middle;width: 50px;height: 50px;border-radius: 50%;\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
                            <a href=\"{{path('app_login')}}\"><i class=\"fa fa-lock\"></i>Si vous voulez laisser un avis connectez-vous svp</a>
                        {% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Product Description Area =================-->

   
    </section>
\t<script src=\"{{asset('assets/client/js/countdown.js')}}\"></script>
\t\t<script>
\t\t\t// Parse the event start and end times
\t\t\tvar startAt = new Date(\"{{ event.startAt | date('Y-m-d H:i:s') }}\");
\t\t\tvar endAt = new Date(\"{{ event.endAt | date('Y-m-d H:i:s') }}\");

\t\t\t// Calculate the total event duration (in milliseconds)
\t\t\tvar totalDuration = endAt - startAt;

\t\t\t// Calculate the time elapsed since the event started
\t\t\tvar now = new Date();
\t\t\tvar timeElapsed = now - startAt;

\t\t\t// Calculate the remaining time by subtracting the elapsed time from the total duration
\t\t\tvar remainingTime = totalDuration - timeElapsed;

\t\t\t// Set the deadline to the current time plus the remaining time
\t\t\tvar deadline = new Date(now.getTime() + remainingTime);
\t\t\tinitializeClock('clockdiv{{event.id}}', deadline);
\t\t</script>
{% endblock %}
", "home/productshow.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/productshow.html.twig");
    }
}
