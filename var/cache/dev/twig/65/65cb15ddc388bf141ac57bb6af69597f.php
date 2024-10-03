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

/* orders/new.html.twig */
class __TwigTemplate_62866da10996d15f79b664a303b99c96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/new.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "orders/new.html.twig", 1);
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

        yield "Shopcart Order Items";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Checkout</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
      <!--================Checkout Area =================-->
    <section class=\"checkout_area section_gap\">
        <div class=\"container\">
        
            ";
        // line 31
        yield "            <div class=\"billing_details\">
                <div class=\"row\">
                    ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "row contact_form"]]);
        yield "
                    <div class=\"col-lg-8\">
                        <h3>Details de facturation</h3>
                        
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"first\" value=\"";
        // line 38
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "surname", [], "any", false, false, false, 38)), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Nom complet\" name=\"orders[name]\" required>
                            </div>
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"last\" placeholder=\"Email\" value=\"";
        // line 41
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true)) : (yield ""));
        yield "\" name=\"orders[address]\" required>
                            </div>
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Telephone\" id=\"number\" value=\"";
        // line 44
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "phone", [], "any", false, false, false, 44), "html", null, true)) : (yield ""));
        yield "\" name=\"orders[phone]\" required>
                            </div>
                            <div class=\"col-md-12 form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"company\" value=\"";
        // line 47
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "city", [], "any", false, false, false, 47), "html", null, true)) : (yield ""));
        yield "\" name=\"orders[city]\" placeholder=\"Ville\">
                            </div>
                             <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"email\"  placeholder=\"Addresse\" name=\"orders[shipinfo]\">
                            </div>
                            
                           
                           
                            ";
        // line 77
        yield "                            ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
            // line 78
            yield "                            <div class=\"col-md-12 form-group\">
                                <div class=\"creat_account\">
                                    <input type=\"checkbox\" id=\"f-option2\" name=\"selector\">
                                    <label for=\"f-option2\">Créer un compte?</label>
                                </div>
                            </div>
                            ";
        }
        // line 85
        yield "                             <div class=\"col-md-12 form-group\">
                                <div class=\"creat_account\">
                                    <h3>Détails de la livraison</h3>
                                </div>
                                <textarea class=\"form-control\" maxlength=\"255\" name=\"orders[note]\" id=\"message\" rows=\"1\" placeholder=\"Order Notes\"></textarea>
                            </div>
                        
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"order_box\">
                            <h2>Ma commande</h2>
                            <ul class=\"list\">
                                <li><a href=\"#\">Produit <span>Total</span></a></li>
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new RuntimeError('Variable "shopcart" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            yield "                                <li><a href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 99), "title", [], "any", false, false, false, 99), "html", null, true);
            yield " <span class=\"middle\">x ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 99), "html", null, true);
            yield "</span> <span class=\"last\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 99), "price", [], "any", false, false, false, 99) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 99)), "html", null, true);
            yield " XAF</span></a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                            </ul>
                            <ul class=\"list list_2\">
                                <li><a href=\"#\">Sous-total <span>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 103, $this->source); })()), "html", null, true);
        yield " XAF</span></a></li>
                                <li><a href=\"#\">Livraison <span>Téléchargement Instantanés</span></a></li>
                                <li><a href=\"#\">Total <span>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 105, $this->source); })()), "html", null, true);
        yield " XAF</span></a></li>
                            </ul>
                            <div class=\"payment_item\">
                                <div class=\"radion_btn\">
                                    <input type=\"radio\" id=\"f-option5\" name=\"selector\" checked>
                                    <label for=\"f-option5\">Téléchargement instantanés</label>
                                    <div class=\"check\"></div>
                                </div>
                                <p>A la fin de vos achats, vous pourrez télécharger les produits numériques. Les produits physiques vous seront livrés.</p>
                            </div>
                            <div class=\"creat_account\">
                                <input type=\"checkbox\" id=\"f-option4\" name=\"selector\" required checked>
                                <label for=\"f-option4\">En commandant j'accepte les </label>
                                <a href=\"#\">termes & conditions*</a>
                            </div>
                            <input type=\"text\" hidden=\"yes\" name=\"token\" value=";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-order"), "html", null, true);
        yield " />
                            <button type=\"submit\" class=\"primary-btn\">Commandez</button>
                        </div>
                    </div>
                    </form>
                    
                </div><br>
                ";
        // line 127
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127)) {
            // line 128
            yield "                    <div class=\"row\">
                        <div class=\"returning_customer\">
                            <div class=\"check_title\">
                                <h2>Returning Customer? <a href=\"#\">Click here to login</a></h2>
                            </div>
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                                customer, please proceed to the Billing & Shipping section.</p>
                            <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
                                <div class=\"col-md-6 form-group p_star\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\">
                                    <span class=\"placeholder\" data-placeholder=\"Username or Email\"></span>
                                </div>
                                <div class=\"col-md-6 form-group p_star\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\">
                                    <span class=\"placeholder\" data-placeholder=\"Password\"></span>
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <button type=\"submit\" value=\"submit\" class=\"primary-btn\">login</button>
                                    <div class=\"creat_account\">
                                        <input type=\"checkbox\" id=\"f-option\" name=\"selector\">
                                        <label for=\"f-option\">Remember me</label>
                                    </div>
                                    <a class=\"lost_pass\" href=\"#\">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    ";
        }
        // line 156
        yield "            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
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
        return "orders/new.html.twig";
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
        return array (  272 => 156,  242 => 128,  240 => 127,  230 => 120,  212 => 105,  207 => 103,  203 => 101,  190 => 99,  186 => 98,  171 => 85,  162 => 78,  159 => 77,  148 => 47,  142 => 44,  136 => 41,  130 => 38,  122 => 33,  118 => 31,  103 => 12,  94 => 5,  84 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Shopcart Order Items{% endblock %}
{% block body %}
    <!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Checkout</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"{{path('home')}}\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
      <!--================Checkout Area =================-->
    <section class=\"checkout_area section_gap\">
        <div class=\"container\">
        
            {#<div class=\"cupon_area\">
                <div class=\"check_title\">
                    <h2>Have a coupon? <a href=\"#\">Click here to enter your code</a></h2>
                </div>
                <input type=\"text\" placeholder=\"Enter coupon code\">
                <a class=\"tp_btn\" href=\"#\">Apply Coupon</a>
            </div>#}
            <div class=\"billing_details\">
                <div class=\"row\">
                    {{form_start(form, {'attr': {'class':'row contact_form'}})}}
                    <div class=\"col-lg-8\">
                        <h3>Details de facturation</h3>
                        
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"first\" value=\"{{app.user ? app.user.name ~ ' ' ~ app.user.surname:''}}\" placeholder=\"Nom complet\" name=\"orders[name]\" required>
                            </div>
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"last\" placeholder=\"Email\" value=\"{{app.user? app.user.email:''}}\" name=\"orders[address]\" required>
                            </div>
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Telephone\" id=\"number\" value=\"{{app.user ? app.user.phone:''}}\" name=\"orders[phone]\" required>
                            </div>
                            <div class=\"col-md-12 form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"company\" value=\"{{app.user ? app.user.city: ''}}\" name=\"orders[city]\" placeholder=\"Ville\">
                            </div>
                             <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"email\"  placeholder=\"Addresse\" name=\"orders[shipinfo]\">
                            </div>
                            
                           
                           
                            {# <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"add1\" name=\"add1\">
                                <span class=\"placeholder\" data-placeholder=\"Address line 01\"></span>
                            </div>
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"add2\" name=\"add2\">
                                <span class=\"placeholder\" data-placeholder=\"Address line 02\"></span>
                            </div>
                            <div class=\"col-md-12 form-group p_star\">
                                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\">
                                <span class=\"placeholder\" data-placeholder=\"Town/City\"></span>
                            </div>
                            <div class=\"col-md-12 form-group p_star\">
                                <select class=\"country_select\">
                                    <option value=\"1\">District</option>
                                    <option value=\"2\">District</option>
                                    <option value=\"4\">District</option>
                                </select>
                            </div>
                            <div class=\"col-md-12 form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"Postcode/ZIP\">
                            </div> #}
                            {% if not app.user %}
                            <div class=\"col-md-12 form-group\">
                                <div class=\"creat_account\">
                                    <input type=\"checkbox\" id=\"f-option2\" name=\"selector\">
                                    <label for=\"f-option2\">Créer un compte?</label>
                                </div>
                            </div>
                            {% endif %}
                             <div class=\"col-md-12 form-group\">
                                <div class=\"creat_account\">
                                    <h3>Détails de la livraison</h3>
                                </div>
                                <textarea class=\"form-control\" maxlength=\"255\" name=\"orders[note]\" id=\"message\" rows=\"1\" placeholder=\"Order Notes\"></textarea>
                            </div>
                        
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"order_box\">
                            <h2>Ma commande</h2>
                            <ul class=\"list\">
                                <li><a href=\"#\">Produit <span>Total</span></a></li>
                                {% for item in shopcart %}
                                <li><a href=\"#\">{{item.product.title}} <span class=\"middle\">x {{item.quantity}}</span> <span class=\"last\">{{item.product.price * item.quantity}} XAF</span></a></li>
                                {% endfor %}
                            </ul>
                            <ul class=\"list list_2\">
                                <li><a href=\"#\">Sous-total <span>{{total}} XAF</span></a></li>
                                <li><a href=\"#\">Livraison <span>Téléchargement Instantanés</span></a></li>
                                <li><a href=\"#\">Total <span>{{total}} XAF</span></a></li>
                            </ul>
                            <div class=\"payment_item\">
                                <div class=\"radion_btn\">
                                    <input type=\"radio\" id=\"f-option5\" name=\"selector\" checked>
                                    <label for=\"f-option5\">Téléchargement instantanés</label>
                                    <div class=\"check\"></div>
                                </div>
                                <p>A la fin de vos achats, vous pourrez télécharger les produits numériques. Les produits physiques vous seront livrés.</p>
                            </div>
                            <div class=\"creat_account\">
                                <input type=\"checkbox\" id=\"f-option4\" name=\"selector\" required checked>
                                <label for=\"f-option4\">En commandant j'accepte les </label>
                                <a href=\"#\">termes & conditions*</a>
                            </div>
                            <input type=\"text\" hidden=\"yes\" name=\"token\" value={{ csrf_token('form-order') }} />
                            <button type=\"submit\" class=\"primary-btn\">Commandez</button>
                        </div>
                    </div>
                    </form>
                    
                </div><br>
                {% if not app.user  %}
                    <div class=\"row\">
                        <div class=\"returning_customer\">
                            <div class=\"check_title\">
                                <h2>Returning Customer? <a href=\"#\">Click here to login</a></h2>
                            </div>
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                                customer, please proceed to the Billing & Shipping section.</p>
                            <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
                                <div class=\"col-md-6 form-group p_star\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\">
                                    <span class=\"placeholder\" data-placeholder=\"Username or Email\"></span>
                                </div>
                                <div class=\"col-md-6 form-group p_star\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\">
                                    <span class=\"placeholder\" data-placeholder=\"Password\"></span>
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <button type=\"submit\" value=\"submit\" class=\"primary-btn\">login</button>
                                    <div class=\"creat_account\">
                                        <input type=\"checkbox\" id=\"f-option\" name=\"selector\">
                                        <label for=\"f-option\">Remember me</label>
                                    </div>
                                    <a class=\"lost_pass\" href=\"#\">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    {% endif %}
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
    {% endblock %}
", "orders/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/orders/new.html.twig");
    }
}
