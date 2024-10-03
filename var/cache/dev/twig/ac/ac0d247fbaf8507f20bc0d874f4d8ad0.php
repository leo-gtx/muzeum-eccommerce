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

/* home/index.html.twig */
class __TwigTemplate_cfe44105fe9a3bfd7891ec360e99aa32 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'slider' => [$this, 'block_slider'],
            'sidebar' => [$this, 'block_sidebar'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/index.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 3, $this->source); })()), 0, [], "array", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "keywords", [], "any", false, false, false, 4), "html", null, true);
        
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "<style>

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        yield "\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 13, $this->source); })())) > 1)) {
            // line 14
            yield "\t\t";
            yield from $this->unwrap()->yieldBlock('slider', $context, $blocks);
            // line 17
            yield "    ";
        }
        // line 18
        yield "\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })())) > 0)) {
            // line 19
            yield "\t\t
\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 20, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 21
                yield "\t\t\t";
                yield from                 $this->loadTemplate("home/blackfriday.html.twig", "home/index.html.twig", 21)->unwrap()->yield($context);
                // line 22
                yield "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "\t";
        }
        // line 24
        yield "\t<!-- start features Area -->
\t<section class=\"features-area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row features-inner\">
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/features/1.png"), "html", null, true);
        yield "\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Ajoutez Au Panier</h6>
\t\t\t\t\t\t<p>Autant que vous le pouvez</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/features/2.png"), "html", null, true);
        yield "\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Commandez</h6>
\t\t\t\t\t\t<p>En un click</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/features/3.png"), "html", null, true);
        yield "\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Payez</h6>
\t\t\t\t\t\t<p>Par OM, MoMo, Wave, Moov, etc.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/features/4.png"), "html", null, true);
        yield "\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Téléchargez</h6>
\t\t\t\t\t\t<p>Ou reçevez par email</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- end features Area -->
    <!-- End Banner Area -->
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-3 col-lg-4 col-md-5\">
\t\t\t\t";
        // line 76
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 77
        yield "\t\t\t</div>
\t\t\t<div class=\"col-xl-9 col-lg-8 col-md-7\">
\t\t\t\t
\t\t\t\t<!-- Start Best Seller -->
\t\t\t\t<section class=\"lattest-product-area pb-40 category-list\">
\t\t\t\t\t<div id=\"productList\" class=\"row\">
                    ";
        // line 83
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 83, $this->source); })())) > 0)) {
            // line 84
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 85
                yield "\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t<div  data-price=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86), "html", null, true);
                yield "\" class=\"single-product col-lg-4 col-md-6\">

\t\t\t\t\t\t\t\t<a href=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t<div class=\"scene\" style=\"height: 300px;width: 200px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 91))), "html", null, true);
                yield "');\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 91), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 93), "html", null, true);
                yield "</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t<h6>";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 98), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t<h6>";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100), "html", null, true);
                yield "</h6><h6> XAF</h6>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101) + (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101) * 0.8000000000000000444089209850062616169452667236328125)), "html", null, true);
                yield " XAF</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Ajouter au panier</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_toggle_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Favorie</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 117
                yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">voir plus</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "                    ";
        } else {
            // line 127
            yield "\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<blockquote class=\"generic-blockquote\">
\t\t\t\t\t\t\tAucun produit trouvé!
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
                    ";
        }
        // line 133
        yield "\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- End Best Seller -->
\t\t\t\t<!-- Start Filter Bar -->
\t\t\t\t";
        // line 137
        yield from         $this->loadTemplate("home/filterbar.html.twig", "home/index.html.twig", 137)->unwrap()->yield($context);
        // line 138
        yield "\t\t\t\t<!-- End Filter Bar -->
\t\t\t</div>
\t\t</div>
\t</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 14
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        yield " 
\t\t\t";
        // line 15
        yield from         $this->loadTemplate("home/slider.html.twig", "home/index.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 76
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        yield " ";
        yield from         $this->loadTemplate("home/sidebar.html.twig", "home/index.html.twig", 76)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield " 
";
        // line 148
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
\$(\"#price-range\").on(\"click\",function(){
\t\$(\"#productList .single-product\").filter(function (index){
\t\t
\t\tif( \$(this).data(\"price\") >= parseInt(\$(\"#lower-value\").text(),10) && \$(this).data(\"price\") <= parseInt(\$(\"#upper-value\").text(),10)){
\t\t\t\$(this).show()
\t\t} else{
\t\t\t\$(this).hide()
\t\t}

\t})\t\t
})

</script>
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
        return "home/index.html.twig";
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
        return array (  469 => 148,  457 => 147,  436 => 76,  425 => 16,  423 => 15,  411 => 14,  393 => 138,  391 => 137,  385 => 133,  377 => 127,  374 => 126,  358 => 117,  351 => 109,  344 => 105,  337 => 101,  333 => 100,  328 => 98,  320 => 93,  313 => 91,  307 => 88,  302 => 86,  299 => 85,  294 => 84,  292 => 83,  284 => 77,  282 => 76,  265 => 62,  252 => 52,  239 => 42,  226 => 32,  216 => 24,  213 => 23,  199 => 22,  196 => 21,  179 => 20,  176 => 19,  173 => 18,  170 => 17,  167 => 14,  164 => 13,  154 => 12,  140 => 7,  130 => 6,  110 => 5,  90 => 4,  70 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}}{% endblock %}
{% block stylesheets %}
<style>

</style>
{% endblock %}

{% block body %}
\t{% if slider|length > 1 %}
\t\t{% block slider %} 
\t\t\t{% include('home/slider.html.twig') %}
\t\t{% endblock %}
    {% endif %}
\t{% if events|length > 0 %}
\t\t
\t\t{% for event in events %}
\t\t\t{% include('home/blackfriday.html.twig')%}
\t\t{% endfor %}
\t{% endif %}
\t<!-- start features Area -->
\t<section class=\"features-area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row features-inner\">
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/client/img/features/1.png')}}\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Ajoutez Au Panier</h6>
\t\t\t\t\t\t<p>Autant que vous le pouvez</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/client/img/features/2.png')}}\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Commandez</h6>
\t\t\t\t\t\t<p>En un click</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/client/img/features/3.png')}}\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Payez</h6>
\t\t\t\t\t\t<p>Par OM, MoMo, Wave, Moov, etc.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/client/img/features/4.png')}}\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Téléchargez</h6>
\t\t\t\t\t\t<p>Ou reçevez par email</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- end features Area -->
    <!-- End Banner Area -->
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-3 col-lg-4 col-md-5\">
\t\t\t\t{% block sidebar %} {% include('home/sidebar.html.twig') %}{% endblock %}
\t\t\t</div>
\t\t\t<div class=\"col-xl-9 col-lg-8 col-md-7\">
\t\t\t\t
\t\t\t\t<!-- Start Best Seller -->
\t\t\t\t<section class=\"lattest-product-area pb-40 category-list\">
\t\t\t\t\t<div id=\"productList\" class=\"row\">
                    {% if products|length > 0 %}
                    {% for product in products %}
\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t<div  data-price=\"{{product.price}}\" class=\"single-product col-lg-4 col-md-6\">

\t\t\t\t\t\t\t\t<a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t<div class=\"scene\" style=\"height: 300px;width: 200px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('{{ asset('uploads/images/' ~ product.image) }}');\">{{product.title}}</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">{{product.title}}</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t<h6>{{product.title}}</h6>
\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t<h6>{{product.price}}</h6><h6> XAF</h6>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">{{product.price + (product.price * 0.8) }} XAF</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('shopcart_new', {'productId':product.id})}}\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Ajouter au panier</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('user_toggle_favorite', {'id': product.id })}}\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Favorie</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{# <a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">voir plus</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    {% endfor %}
                    {% else %}
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<blockquote class=\"generic-blockquote\">
\t\t\t\t\t\t\tAucun produit trouvé!
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
                    {% endif %}
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- End Best Seller -->
\t\t\t\t<!-- Start Filter Bar -->
\t\t\t\t{% include('home/filterbar.html.twig') %}
\t\t\t\t<!-- End Filter Bar -->
\t\t\t</div>
\t\t</div>
\t</div>



{% endblock %}

 {% block javascripts %} 
{{parent()}}
<script>
\$(\"#price-range\").on(\"click\",function(){
\t\$(\"#productList .single-product\").filter(function (index){
\t\t
\t\tif( \$(this).data(\"price\") >= parseInt(\$(\"#lower-value\").text(),10) && \$(this).data(\"price\") <= parseInt(\$(\"#upper-value\").text(),10)){
\t\t\t\$(this).show()
\t\t} else{
\t\t\t\$(this).hide()
\t\t}

\t})\t\t
})

</script>
{% endblock %} ", "home/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/index.html.twig");
    }
}
