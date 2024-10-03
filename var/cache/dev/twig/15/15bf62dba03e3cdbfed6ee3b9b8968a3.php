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

/* orders/index.html.twig */
class __TwigTemplate_d5fb1b6a71f9ec3c769d6a4ab8359bae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "orders/index.html.twig", 1);
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

        yield "Orders index";
        
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
        yield "    <!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Mes commandes</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Mes commandes</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Amount</th>
                                    <th>City</th>
                                    <th>Shipinfo</th>
                                    <th>Phone</th>
                                   
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 45
            yield "                                    <tr>
                                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                        <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "amount", [], "any", false, false, false, 47), "html", null, true);
            yield " XAF</td>
                                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "city", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                        <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipinfo", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "phone", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                        <td>
                                            <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" class=\"genric-btn info circle arrow\">Voir</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            yield "                                    <tr>
                                        <td colspan=\"13\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
        return "orders/index.html.twig";
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
        return array (  191 => 61,  182 => 57,  173 => 53,  168 => 51,  164 => 50,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  145 => 45,  140 => 44,  114 => 21,  103 => 13,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Orders index{% endblock %}

{% block body %}
    <!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Mes commandes</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"{{path('home')}}\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Mes commandes</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    {{ include('messages.html.twig') }}
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Amount</th>
                                    <th>City</th>
                                    <th>Shipinfo</th>
                                    <th>Phone</th>
                                   
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for order in orders %}
                                    <tr>
                                        <td>{{ order.id }}</td>
                                        <td>{{ order.amount }} XAF</td>
                                        <td>{{ order.city }}</td>
                                        <td>{{ order.shipinfo }}</td>
                                        <td>{{ order.phone }}</td>
                                        <td>{{ order.status }}</td>
                                        <td>
                                            <a href=\"{{ path('orders_show', {'id': order.id}) }}\" class=\"genric-btn info circle arrow\">Voir</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"13\">no records found</td>
                                    </tr>
                                {% endfor %}

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
{% endblock %}
", "orders/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/orders/index.html.twig");
    }
}
