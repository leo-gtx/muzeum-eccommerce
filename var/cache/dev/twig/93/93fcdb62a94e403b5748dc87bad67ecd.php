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

/* shopcart/index.html.twig */
class __TwigTemplate_00b46e3b6a412d61d99b99d0a8fb69ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopcart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopcart/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "shopcart/index.html.twig", 1);
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

        yield " Shopcart";
        
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
                    <h1>Mon Panier</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_index");
        yield "\">Mon panier</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    
    ";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "

     <!--================Cart Area =================-->
    <section class=\"cart_area\">
        <div class=\"container\">
            <div class=\"cart_inner\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th scope=\"col\">Product</th>
                                <th scope=\"col\">Price</th>
                                <th scope=\"col\">Quantity</th>
                                <th scope=\"col\">Total</th>
                                <th scope=\"col\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 40
        $context["total"] = 0;
        // line 41
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["shopcarts"]) || array_key_exists("shopcarts", $context) ? $context["shopcarts"] : (function () { throw new RuntimeError('Variable "shopcarts" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["shopcart"]) {
            // line 42
            yield "                            <tr>
                                <td>
                                    <div class=\"media\">
                                    
                                        <div class=\"d-flex\">
                                            <div class=\"scene\" style=\"height: 200px;width: 100px;\">
                                                <div class=\"dvd-box\">
                                                    <div class=\"cover front\" style=\"background-image: url('";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 49), "image", [], "any", false, false, false, 49))), "html", null, true);
            yield "');\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 49), "title", [], "any", false, false, false, 49), "html", null, true);
            yield "</div>
                                                    <div class=\"cover back\"></div>
                                                    <div class=\"spine\"><span class=\"vertical-text\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 51), "title", [], "any", false, false, false, 51), "html", null, true);
            yield "</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-body\">
                                            <p>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61), "html", null, true);
            yield " XAF</h5>
                                </td>
                                <td>
                                    <div class=\"product_count\">
                                        <input type=\"number\" name=\"qty\" id=\"sst\" max=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 65), "amount", [], "any", false, false, false, 65), "html", null, true);
            yield "\" min=\"1\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 65), "html", null, true);
            yield "\" title=\"Quantité:\"
                                            class=\"input-text qty\">
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 67), "amount", [], "any", false, false, false, 67), "html", null, true);
            yield " ) result.value++;return false;\"
                                            class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
                                            class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
                                    </div>
                                    <p style=\"color:tomato;\" >";
            // line 72
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 72) > CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 72), "amount", [], "any", false, false, false, 72))) ? ("Stock insufissant") : (""));
            yield "</p>
                                </td>
                                <td >
                                    <h5>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 75), "price", [], "any", false, false, false, 75) * CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 75)), "html", null, true);
            yield "</h5>
                                    
                                </td>
                                <td>
                                        <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_del", ["id" => ((CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "id", [], "any", true, true, false, 79)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "id", [], "any", false, false, false, 79)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79)))]), "html", null, true);
            yield "\" onclick=\"return confirm('Voulez vous retirez ce produit de votre panier?');\" class=\"genric-btn danger radius\" >Retirer</a>
                                </td>
                            
                                
                            </tr>
                            ";
            // line 84
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 84, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 84) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "product", [], "any", false, false, false, 84), "price", [], "any", false, false, false, 84)));
            // line 85
            yield "                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            yield "                            <tr>
                                <td colspan=\"6\"> <b>Votre panier est vide</b></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopcart'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                            ";
        // line 111
        yield "                            <tr>
                                <td>
                                    <h5>Sous-Total</h5>
                                </td>
                                <td>
                                    <h5>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 116, $this->source); })()), "html", null, true);
        yield " XAF</h5>
                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr class=\"shipping_area\">
                                <td>
                                    <h5>Livraison</h5>
                                </td>
                                <td>
                                    <div class=\"shipping_box\">
                                        <ul class=\"list\">
                                            <li class=\"active\"><a href=\"#\">Livraison: Aux frais du client </a></li>
                                        </ul>
                                        ";
        // line 138
        yield "                                    </div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr class=\"out_button_area\">
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <div class=\"checkout_btn_inner d-flex align-items-center\">
                                        <a class=\"gray_btn\" href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Continuez les boutiques</a>
                                        <a class=\"primary-btn\" href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_new");
        yield "\">Finalisez</a>
                                    </div>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
    <!-- start features Area -->
\t<section class=\"features-area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row features-inner\">
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 185
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
        // line 195
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
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/features/3.png"), "html", null, true);
        yield "\" style=\"height:50px\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6>Payez</h6>
\t\t\t\t\t\t<p>Par OM, MoMo, Moov, etc.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- single features -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 215
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
        return "shopcart/index.html.twig";
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
        return array (  365 => 215,  352 => 205,  339 => 195,  326 => 185,  301 => 163,  297 => 162,  271 => 138,  247 => 116,  240 => 111,  238 => 90,  229 => 86,  224 => 85,  222 => 84,  214 => 79,  207 => 75,  201 => 72,  193 => 67,  186 => 65,  179 => 61,  171 => 56,  163 => 51,  156 => 49,  147 => 42,  141 => 41,  139 => 40,  118 => 22,  107 => 14,  103 => 13,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %} Shopcart{% endblock %}

{% block body %}
 <!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Mon Panier</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"{{path('home')}}\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"{{path('shopcart_index')}}\">Mon panier</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    
    {{ include('messages.html.twig') }}

     <!--================Cart Area =================-->
    <section class=\"cart_area\">
        <div class=\"container\">
            <div class=\"cart_inner\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th scope=\"col\">Product</th>
                                <th scope=\"col\">Price</th>
                                <th scope=\"col\">Quantity</th>
                                <th scope=\"col\">Total</th>
                                <th scope=\"col\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% set total = 0 %}
                            {% for shopcart in shopcarts %}
                            <tr>
                                <td>
                                    <div class=\"media\">
                                    
                                        <div class=\"d-flex\">
                                            <div class=\"scene\" style=\"height: 200px;width: 100px;\">
                                                <div class=\"dvd-box\">
                                                    <div class=\"cover front\" style=\"background-image: url('{{ asset('uploads/images/' ~ shopcart.product.image) }}');\">{{shopcart.product.title}}</div>
                                                    <div class=\"cover back\"></div>
                                                    <div class=\"spine\"><span class=\"vertical-text\">{{shopcart.product.title}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-body\">
                                            <p>{{shopcart.product.title}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{shopcart.product.price}} XAF</h5>
                                </td>
                                <td>
                                    <div class=\"product_count\">
                                        <input type=\"number\" name=\"qty\" id=\"sst\" max=\"{{shopcart.product.amount}}\" min=\"1\" value=\"{{shopcart.quantity}}\" title=\"Quantité:\"
                                            class=\"input-text qty\">
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < {{shopcart.product.amount}} ) result.value++;return false;\"
                                            class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
                                            class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
                                    </div>
                                    <p style=\"color:tomato;\" >{{ shopcart.quantity > shopcart.product.amount ? 'Stock insufissant': '' }}</p>
                                </td>
                                <td >
                                    <h5>{{ shopcart.product.price * shopcart.quantity }}</h5>
                                    
                                </td>
                                <td>
                                        <a href=\"{{ path('shopcart_del', {'id': shopcart.id is defined ? shopcart.id:shopcart.product.id}) }}\" onclick=\"return confirm('Voulez vous retirez ce produit de votre panier?');\" class=\"genric-btn danger radius\" >Retirer</a>
                                </td>
                            
                                
                            </tr>
                            {% set total = total + (shopcart.quantity * shopcart.product.price) %}
                            {% else %}
                            <tr>
                                <td colspan=\"6\"> <b>Votre panier est vide</b></td>
                            </tr>
                            {% endfor %}
                            {#<tr class=\"bottom_button\">
                                <td>
                                    <a class=\"gray_btn\" href=\"{{path('shopcart_index')}}\">MAJ mon panier</a>
                                </td>
                                <td>

                                </td>
                               <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class=\"cupon_text d-flex align-items-center\">
                                        <input type=\"text\" placeholder=\"Coupon Code\">
                                        <a class=\"primary-btn\" href=\"#\">Appliquer</a>
                                        <a class=\"gray_btn\" href=\"#\">Annuler</a>
                                    </div>
                                </td>
                            </tr>#}
                            <tr>
                                <td>
                                    <h5>Sous-Total</h5>
                                </td>
                                <td>
                                    <h5>{{total}} XAF</h5>
                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr class=\"shipping_area\">
                                <td>
                                    <h5>Livraison</h5>
                                </td>
                                <td>
                                    <div class=\"shipping_box\">
                                        <ul class=\"list\">
                                            <li class=\"active\"><a href=\"#\">Livraison: Aux frais du client </a></li>
                                        </ul>
                                        {#<a class=\"gray_btn\" href=\"#\">Update Details</a>#}
                                    </div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr class=\"out_button_area\">
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <div class=\"checkout_btn_inner d-flex align-items-center\">
                                        <a class=\"gray_btn\" href=\"{{ path('home') }}\">Continuez les boutiques</a>
                                        <a class=\"primary-btn\" href=\"{{ path('orders_new') }}\">Finalisez</a>
                                    </div>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
    <!-- start features Area -->
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
\t\t\t\t\t\t<p>Par OM, MoMo, Moov, etc.</p>
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


{% endblock %}
", "shopcart/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/shopcart/index.html.twig");
    }
}
