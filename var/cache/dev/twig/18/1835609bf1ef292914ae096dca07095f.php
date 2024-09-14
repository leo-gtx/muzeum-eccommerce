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

/* user/library.html.twig */
class __TwigTemplate_d8e1d9eb9787e4f6b60b84a88cd0b3e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/library.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/library.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/library.html.twig", 1);
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

        yield " Bibliothèque";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield " <!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Ma Bibliothèque</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Ma Bibliothèque</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <section class=\"lattest-product-area pb-40 category-list px-5\">
\t\t\t\t\t<div id=\"productList\" class=\"row\">
                    ";
        // line 24
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 24, $this->source); })())) > 0)) {
            // line 25
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                yield "\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t<div  data-price=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27), "html", null, true);
                yield "\" class=\"single-product col-lg-4 col-md-6\">

\t\t\t\t\t\t\t\t<a href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_download", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t<div class=\"scene\" style=\"height: 300px;width: 200px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 32))), "html", null, true);
                yield "');\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 32), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 34), "html", null, true);
                yield "</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t<h6>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 39), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t\t";
                // line 44
                yield "\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_download", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-download\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Télécharger</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">voir plus</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 58
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "                    ";
        } else {
            // line 64
            yield "\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<blockquote class=\"generic-blockquote\">
\t\t\t\t\t\t\tVous n'avez encore aucun produit téléchargeable!
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
                    ";
        }
        // line 70
        yield "\t\t\t\t\t</div>
\t\t\t\t</section>
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
        return "user/library.html.twig";
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
        return array (  196 => 70,  188 => 64,  185 => 63,  175 => 58,  168 => 50,  161 => 46,  157 => 44,  153 => 39,  145 => 34,  138 => 32,  132 => 29,  127 => 27,  124 => 26,  119 => 25,  117 => 24,  103 => 13,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %} Bibliothèque{% endblock %}

{% block body %}
 <!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Ma Bibliothèque</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"{{path('home')}}\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Ma Bibliothèque</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <section class=\"lattest-product-area pb-40 category-list px-5\">
\t\t\t\t\t<div id=\"productList\" class=\"row\">
                    {% if products|length > 0 %}
                    {% for product in products %}
\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t<div  data-price=\"{{product.price}}\" class=\"single-product col-lg-4 col-md-6\">

\t\t\t\t\t\t\t\t<a href=\"{{ path('product_download', {'id': product.id})}}\" class=\"social-info\">
\t\t\t\t\t\t\t\t<div class=\"scene\" style=\"height: 300px;width: 200px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('{{ asset('uploads/images/' ~ product.image)  }}');\">{{product.title}}</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">{{product.title}}</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t<h6>{{product.title}}</h6>
\t\t\t\t\t\t\t\t\t{#<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t<h6>{{product.price}}</h6><h6> XAF</h6>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">{{product.isPromoted ? product.price + (product.price * 0.4) : product.price + (product.price * 0.15) }} XAF</h6>
\t\t\t\t\t\t\t\t\t</div>#}
\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_download', {'id': product.id})}}\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-download\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Télécharger</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">voir plus</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{#<a href=\"{{path('user_toggle_favorite', {'id': product.id, 'action':'remove' })}}\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-trash\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Retirer</p>
\t\t\t\t\t\t\t\t\t\t</a>#}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    {% endfor %}
                    {% else %}
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<blockquote class=\"generic-blockquote\">
\t\t\t\t\t\t\tVous n'avez encore aucun produit téléchargeable!
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
                    {% endif %}
\t\t\t\t\t</div>
\t\t\t\t</section>
{% endblock %}
", "user/library.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/user/library.html.twig");
    }
}
