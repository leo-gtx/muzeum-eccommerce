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
        // line 21
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
        // line 38
        $context["total"] = 0;
        // line 39
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["shopcarts"]) || array_key_exists("shopcarts", $context) ? $context["shopcarts"] : (function () { throw new RuntimeError('Variable "shopcarts" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["shopcart"]) {
            // line 40
            yield "                            <tr>
                                <td>
                                    <div class=\"media\">
                                    
                                        <div class=\"d-flex\">
                                            <div class=\"scene\" style=\"height: 200px;width: 100px;\">
                                                <div class=\"dvd-box\">
                                                    <div class=\"cover front\" style=\"background-image: url('";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "image", [], "any", false, false, false, 47))), "html", null, true);
            yield "');\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "title", [], "any", false, false, false, 47), "html", null, true);
            yield "</div>
                                                    <div class=\"cover back\"></div>
                                                    <div class=\"spine\"><span class=\"vertical-text\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "title", [], "any", false, false, false, 49), "html", null, true);
            yield "</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-body\">
                                            <p>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "title", [], "any", false, false, false, 54), "html", null, true);
            yield "</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "price", [], "any", false, false, false, 59), "html", null, true);
            yield " XAF</h5>
                                </td>
                                <td>
                                    <div class=\"product_count\">
                                        <input type=\"number\" name=\"qty\" id=\"sst\" max=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "amount", [], "any", false, false, false, 63), "html", null, true);
            yield "\" min=\"1\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 63), "html", null, true);
            yield "\" title=\"Quantité:\"
                                            class=\"input-text qty\">
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "amount", [], "any", false, false, false, 65), "html", null, true);
            yield " ) result.value++;return false;\"
                                            class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
                                            class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
                                    </div>
                                    <p style=\"clor:tomato;\" >";
            // line 70
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 70) > CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "amount", [], "any", false, false, false, 70))) ? ("Stock insufissant") : (""));
            yield "</p>
                                </td>
                                <td >
                                    <h5>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "price", [], "any", false, false, false, 73) * CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 73)), "html", null, true);
            yield "</h5>
                                    
                                </td>
                                <td>
                                        <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_del", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" onclick=\"return confirm('Voulez vous retirez ce produit de votre panier?');\" class=\"genric-btn danger radius\" >Retirer</a>
                                </td>
                            
                                
                            </tr>
                            ";
            // line 82
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 82, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "quantity", [], "any", false, false, false, 82) * CoreExtension::getAttribute($this->env, $this->source, $context["shopcart"], "price", [], "any", false, false, false, 82)));
            // line 83
            yield "                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            yield "                            <tr>
                                <td colspan=\"6\"> <b>Votre panier est vide</b></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopcart'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                            <!-- <tr class=\"bottom_button\">
                                <td>
                                    <a class=\"gray_btn\" href=\"#\">MAJ mon panier</a>
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
                            </tr> -->
                            <tr>
                                <td>
                                    <h5>Sous-Total</h5>
                                </td>
                                <td>
                                    <h5>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 114, $this->source); })()), "html", null, true);
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
        // line 136
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
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Continuez les boutiques</a>
                                        <a class=\"primary-btn\" href=\"";
        // line 161
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
        return array (  318 => 161,  314 => 160,  288 => 136,  264 => 114,  236 => 88,  227 => 84,  222 => 83,  220 => 82,  212 => 77,  205 => 73,  199 => 70,  191 => 65,  184 => 63,  177 => 59,  169 => 54,  161 => 49,  154 => 47,  145 => 40,  139 => 39,  137 => 38,  117 => 21,  107 => 14,  103 => 13,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
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
                                                    <div class=\"cover front\" style=\"background-image: url('{{ asset('uploads/images/' ~ shopcart.image) }}');\">{{shopcart.title}}</div>
                                                    <div class=\"cover back\"></div>
                                                    <div class=\"spine\"><span class=\"vertical-text\">{{shopcart.title}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-body\">
                                            <p>{{shopcart.title}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{shopcart.price}} XAF</h5>
                                </td>
                                <td>
                                    <div class=\"product_count\">
                                        <input type=\"number\" name=\"qty\" id=\"sst\" max=\"{{shopcart.amount}}\" min=\"1\" value=\"{{shopcart.quantity}}\" title=\"Quantité:\"
                                            class=\"input-text qty\">
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < {{shopcart.amount}} ) result.value++;return false;\"
                                            class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
                                        <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
                                            class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
                                    </div>
                                    <p style=\"clor:tomato;\" >{{ shopcart.quantity > shopcart.amount ? 'Stock insufissant': '' }}</p>
                                </td>
                                <td >
                                    <h5>{{ shopcart.price * shopcart.quantity }}</h5>
                                    
                                </td>
                                <td>
                                        <a href=\"{{ path('shopcart_del', {'id': shopcart.id}) }}\" onclick=\"return confirm('Voulez vous retirez ce produit de votre panier?');\" class=\"genric-btn danger radius\" >Retirer</a>
                                </td>
                            
                                
                            </tr>
                            {% set total = total + (shopcart.quantity * shopcart.price) %}
                            {% else %}
                            <tr>
                                <td colspan=\"6\"> <b>Votre panier est vide</b></td>
                            </tr>
                            {% endfor %}
                            <!-- <tr class=\"bottom_button\">
                                <td>
                                    <a class=\"gray_btn\" href=\"#\">MAJ mon panier</a>
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
                            </tr> -->
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


{% endblock %}
", "shopcart/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/shopcart/index.html.twig");
    }
}
