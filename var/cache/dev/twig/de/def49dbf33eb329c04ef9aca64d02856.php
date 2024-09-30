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

/* home/filtered.html.twig */
class __TwigTemplate_3ef8382b7fbcf2ec5cb206a4b1127332 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filtered.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filtered.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/filtered.html.twig", 1);
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
        yield "    
\t
\t<!-- start features Area -->
\t<section class=\"features-area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row features-inner\">
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 23
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
        // line 33
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
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/features/3.png"), "html", null, true);
        yield "\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Payez</h6>
\t\t\t\t\t\t<p>Par OM ou MoMo</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 53
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
        // line 67
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 68
        yield "\t\t\t</div>
\t\t\t<div class=\"col-xl-9 col-lg-8 col-md-7\">
\t\t\t\t<!-- Start Filter Bar -->
\t\t\t\t";
        // line 71
        yield from         $this->loadTemplate("home/filterbar.html.twig", "home/filtered.html.twig", 71)->unwrap()->yield($context);
        // line 72
        yield "\t\t\t\t<!-- End Filter Bar -->
\t\t\t\t<!-- Start Best Seller -->
\t\t\t\t<section class=\"lattest-product-area pb-40 category-list\">
\t\t\t\t\t<div id=\"productList\" class=\"row\">
                    ";
        // line 76
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 76, $this->source); })())) > 0)) {
            // line 77
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                yield "\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t<div  data-price=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79), "html", null, true);
                yield "\" class=\"single-product col-lg-4 col-md-6\">

\t\t\t\t\t\t\t\t<a href=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t<div class=\"scene\" style=\"height: 300px;width: 200px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 84))), "html", null, true);
                yield "');\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 84), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 86), "html", null, true);
                yield "</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t<h6>";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 91), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t<h6>";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 93), "html", null, true);
                yield "</h6><h6> XAF</h6>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94) + (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94) * 0.8000000000000000444089209850062616169452667236328125)), "html", null, true);
                yield " XAF</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Ajouter au panier</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_toggle_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Favorie</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 110
                yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 110)]), "html", null, true);
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
            // line 119
            yield "                    ";
        } else {
            // line 120
            yield "\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<blockquote class=\"generic-blockquote\">
\t\t\t\t\t\t\tAucun produit trouvé!
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
                    ";
        }
        // line 126
        yield "\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- End Best Seller -->
\t\t\t\t<!-- Start Filter Bar -->
\t\t\t\t";
        // line 130
        yield from         $this->loadTemplate("home/filterbar.html.twig", "home/filtered.html.twig", 130)->unwrap()->yield($context);
        // line 131
        yield "\t\t\t\t<!-- End Filter Bar -->
\t\t\t</div>
\t\t</div>
\t</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 67
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        yield " ";
        yield from         $this->loadTemplate("home/sidebar.html.twig", "home/filtered.html.twig", 67)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 140
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield " 
";
        // line 141
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
        return "home/filtered.html.twig";
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
        return array (  398 => 141,  386 => 140,  365 => 67,  347 => 131,  345 => 130,  339 => 126,  331 => 120,  328 => 119,  312 => 110,  305 => 102,  298 => 98,  291 => 94,  287 => 93,  282 => 91,  274 => 86,  267 => 84,  261 => 81,  256 => 79,  253 => 78,  248 => 77,  246 => 76,  240 => 72,  238 => 71,  233 => 68,  231 => 67,  214 => 53,  201 => 43,  188 => 33,  175 => 23,  163 => 13,  153 => 12,  139 => 7,  129 => 6,  109 => 5,  89 => 4,  69 => 3,  46 => 1,);
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
    
\t
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
\t\t\t\t\t\t<p>Par OM ou MoMo</p>
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
\t\t\t\t<!-- Start Filter Bar -->
\t\t\t\t{% include('home/filterbar.html.twig') %}
\t\t\t\t<!-- End Filter Bar -->
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
{% endblock %} ", "home/filtered.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/filtered.html.twig");
    }
}
