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

/* orders/show.html.twig */
class __TwigTemplate_05650a4d567896a09fbdfe3b846f7500 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "orders/show.html.twig", 1);
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

        yield "Orders";
        
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
        yield "<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Commande #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"/orders\">Mes commandes<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Commande #";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->
\t";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
    <!--================Order Details Area =================-->
\t<section class=\"order_details section_gap\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"title_confirmation\">Merci. Votre commande à bien été reçu.</h3>
\t\t\t";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "isPaid", [], "any", false, false, false, 27)) {
            // line 28
            yield "\t\t\t\t<div style=\"height:100px;width:100%;\">
\t\t\t\t\t\t<img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/paid.png"), "html", null, true);
            yield "\" alt=\"muzeum-logo\">
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 32
            yield "\t\t\t\t<div class=\"my-3 d-flex justify-content-center\">
                    <a class=\"primary-btn\" href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "paymentLink", [], "any", false, false, false, 33), "html", null, true);
            yield "\">Procéder Au Paiement</a>
                </div>
\t\t\t";
        }
        // line 36
        yield "\t\t\t<div class=\"row order_d_inner\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"details_item\">
\t\t\t\t\t\t<h4>Info de la commande</h4>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Numéro de la commande</span> : #";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Date</span> : ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 42, $this->source); })()), "createdAt", [], "any", false, false, false, 42), "d M Y H:i:s"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Total</span> : ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 43, $this->source); })()), "amount", [], "any", false, false, false, 43), "html", null, true);
        yield " XAF</a></li>
                            <li><a href=\"#\"><span>Statut</span> : ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Payé</span> : ";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "isPaid", [], "any", false, false, false, 45)) ? ("Oui") : ("En attente du paiement"));
        yield "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"details_item\">
\t\t\t\t\t\t<h4>Addresse de facturation</h4>
\t\t\t\t\t\t<ul class=\"list\">
                            <li><a href=\"#\"><span>Client</span> : ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Rue</span> : ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "shipinfo", [], "any", false, false, false, 54), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Ville</span> : ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "city", [], "any", false, false, false, 55), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Téléphone </span> : ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "phone", [], "any", false, false, false, 56), "html", null, true);
        yield "</a></li>
                            <li><a href=\"#\"><span>Email </span> : ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "address", [], "any", false, false, false, 57), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"details_item\">
\t\t\t\t\t\t<h4>Addresse de livraision</h4>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Client</span> : ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Rue</span> : ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "shipinfo", [], "any", false, false, false, 66), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Ville</span> : ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "city", [], "any", false, false, false, 67), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Téléphone </span> : ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "phone", [], "any", false, false, false, 68), "html", null, true);
        yield "</a></li>
                            <li><a href=\"#\"><span>Email </span> : ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "address", [], "any", false, false, false, 69), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"order_details_table\">
\t\t\t\t<h2>Order Details</h2>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orderdetail"]) || array_key_exists("orderdetail", $context) ? $context["orderdetail"] : (function () { throw new RuntimeError('Variable "orderdetail" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 88
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "name", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h5>x ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 93), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 96) * CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 96)), "html", null, true);
            yield " XAF</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            // line 98
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 98, $this->source); })()), "isPaid", [], "any", false, false, false, 98)) {
                yield "<td><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_download", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)]), "html", null, true);
                yield "\" class=\"btn btn-info\">Télécharger<i class=\"lnr lnr-download\"></></a></td>";
            }
            // line 99
            yield "\t\t\t\t\t\t\t</tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>Subtotal</h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h5></h5>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<p>XAF ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 109, $this->source); })()), "amount", [], "any", false, false, false, 109), "html", null, true);
        yield "</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>Frais de livraison</h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<p>Aux Frais Du Client</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>Total</h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 132, $this->source); })()), "amount", [], "any", false, false, false, 132), "html", null, true);
        yield " XAF</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t";
        // line 144
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 144, $this->source); })()), "isPaid", [], "any", false, false, false, 144)) {
            // line 145
            yield "\t\t\t\t\t\t<div class=\"checkout_btn_inner d-flex justify-content-center\">
\t\t\t\t\t\t\t<a class=\"primary-btn\" href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 146, $this->source); })()), "paymentLink", [], "any", false, false, false, 146), "html", null, true);
            yield "\">Procéder Au Paiement</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 149
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Order Details Area =================-->
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
        return "orders/show.html.twig";
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
        return array (  347 => 149,  341 => 146,  338 => 145,  336 => 144,  321 => 132,  295 => 109,  285 => 101,  278 => 99,  272 => 98,  267 => 96,  261 => 93,  255 => 90,  251 => 88,  247 => 87,  226 => 69,  222 => 68,  218 => 67,  214 => 66,  210 => 65,  199 => 57,  195 => 56,  191 => 55,  187 => 54,  183 => 53,  172 => 45,  168 => 44,  164 => 43,  160 => 42,  156 => 41,  149 => 36,  143 => 33,  140 => 32,  134 => 29,  131 => 28,  129 => 27,  121 => 22,  111 => 15,  106 => 13,  101 => 11,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Orders{% endblock %}

{% block body %}
<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Commande #{{order.id}}</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"{{path('home')}}\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"/orders\">Mes commandes<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Commande #{{order.id}}</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->
\t{{ include('messages.html.twig') }}
    <!--================Order Details Area =================-->
\t<section class=\"order_details section_gap\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"title_confirmation\">Merci. Votre commande à bien été reçu.</h3>
\t\t\t{% if order.isPaid %}
\t\t\t\t<div style=\"height:100px;width:100%;\">
\t\t\t\t\t\t<img src=\"{{asset('assets/client/img/paid.png')}}\" alt=\"muzeum-logo\">
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"my-3 d-flex justify-content-center\">
                    <a class=\"primary-btn\" href=\"{{ order.paymentLink }}\">Procéder Au Paiement</a>
                </div>
\t\t\t{% endif %}
\t\t\t<div class=\"row order_d_inner\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"details_item\">
\t\t\t\t\t\t<h4>Info de la commande</h4>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Numéro de la commande</span> : #{{order.id}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Date</span> : {{order.createdAt|date('d M Y H:i:s')}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Total</span> : {{order.amount}} XAF</a></li>
                            <li><a href=\"#\"><span>Statut</span> : {{order.status}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Payé</span> : {{order.isPaid ? 'Oui':'En attente du paiement'}}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"details_item\">
\t\t\t\t\t\t<h4>Addresse de facturation</h4>
\t\t\t\t\t\t<ul class=\"list\">
                            <li><a href=\"#\"><span>Client</span> : {{order.name}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Rue</span> : {{order.shipinfo}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Ville</span> : {{order.city}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Téléphone </span> : {{order.phone}}</a></li>
                            <li><a href=\"#\"><span>Email </span> : {{order.address}}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"details_item\">
\t\t\t\t\t\t<h4>Addresse de livraision</h4>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Client</span> : {{order.name}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Rue</span> : {{order.shipinfo}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Ville</span> : {{order.city}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span>Téléphone </span> : {{order.phone}}</a></li>
                            <li><a href=\"#\"><span>Email </span> : {{order.address}}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"order_details_table\">
\t\t\t\t<h2>Order Details</h2>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
                        {% for detail in orderdetail %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>{{detail.name}}</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h5>x {{detail.quantity}}</h5>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>{{ detail.price * detail.quantity }} XAF</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% if order.isPaid %}<td><a href=\"{{ path('product_download', {'id': detail.product.id })}}\" class=\"btn btn-info\">Télécharger<i class=\"lnr lnr-download\"></></a></td>{% endif %}
\t\t\t\t\t\t\t</tr>
                        {% endfor %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>Subtotal</h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h5></h5>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<p>XAF {{order.amount}}</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>Frais de livraison</h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<p>Aux Frais Du Client</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>Total</h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<p>{{order.amount}} XAF</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t{% if not order.isPaid %}
\t\t\t\t\t\t<div class=\"checkout_btn_inner d-flex justify-content-center\">
\t\t\t\t\t\t\t<a class=\"primary-btn\" href=\"{{ order.paymentLink }}\">Procéder Au Paiement</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Order Details Area =================-->
    {% endblock %}
", "orders/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/orders/show.html.twig");
    }
}
