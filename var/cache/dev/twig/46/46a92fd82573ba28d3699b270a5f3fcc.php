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

/* home/footer.html.twig */
class __TwigTemplate_8542dd6bdff266a00bc1aaf790bad32d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        // line 1
        yield "\t<!-- start footer Area -->
\t<footer class=\"footer-area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3  col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<h6>A propos</h6>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 9
        if (array_key_exists("setting", $context)) {
            // line 10
            yield "\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 10, $this->source); })()), 0, [], "array", false, false, false, 10), "description", [], "any", false, false, false, 10), "html", null, true);
            yield "
\t\t\t\t\t\t\t";
        }
        // line 12
        yield "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4  col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<h6>Contactez Nous</h6>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<div class=\"\" id=\"mc_embed_signup\">

\t\t\t\t\t\t\t<p><i class=\"fa fa-phone\"></i>";
        // line 21
        if (array_key_exists("setting", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "phone", [], "any", false, false, false, 21), "html", null, true);
            yield " ";
        }
        yield "</p>
\t\t\t\t\t\t\t<p><i class=\"fa fa-envelope\"></i>";
        // line 22
        if (array_key_exists("setting", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
            yield " ";
        }
        yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<h6>Suivez nous</h6>
\t\t\t\t\t\t<div class=\"footer-social d-flex align-items-center\">
\t\t\t\t\t\t";
        // line 31
        if (array_key_exists("setting", $context)) {
            // line 32
            yield "\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 32, $this->source); })()), 0, [], "array", false, false, false, 32), "facebook", [], "any", false, false, false, 32), "html", null, true);
            yield "\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 33, $this->source); })()), 0, [], "array", false, false, false, 33), "twitter", [], "any", false, false, false, 33), "html", null, true);
            yield "\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "instagram", [], "any", false, false, false, 34), "html", null, true);
            yield "\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t";
        }
        // line 36
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/logo.png"), "html", null, true);
        yield "\" style=\" width:auto;\" alt=\"muzeum-logo\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom d-flex justify-content-center align-items-center flex-wrap\">
\t\t\t\t<p class=\"footer-text m-0\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- End footer Area -->
\t<!-- WhatsApp Floating Button -->
    <a href=\"#\" class=\"whatsapp-btn\" id=\"whatsappButton\">
        <img src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/whatsapp.svg"), "html", null, true);
        yield "\" alt=\"WhatsApp Icon\">
    </a>

    <!-- Message Input Box -->
    <div class=\"message-box\" id=\"messageBox\">
        <div class=\"input-container\">
            <input type=\"text\" id=\"whatsapp-message\" placeholder=\"Saisissez votre message...\">
            <button onclick=\"sendWhatsAppMessage()\">Envoyer</button>
        </div>
    </div>

\t<!-- Cart Button -->
\t<div id=\"cart-button\" class=\"floating-cart\">
\t\t<a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_index");
        yield "\" class=\"link\" id=\"cart-link\">
\t\t\t<span class=\"ti-bag\"></span>
\t\t\t<span class=\"h6\" id=\"cart-count\">0</span> <!-- Number of items in cart -->
\t\t</a>
\t</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/footer.html.twig";
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
        return array (  158 => 69,  142 => 56,  124 => 41,  117 => 36,  112 => 34,  108 => 33,  103 => 32,  101 => 31,  85 => 22,  77 => 21,  66 => 12,  60 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("\t<!-- start footer Area -->
\t<footer class=\"footer-area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3  col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<h6>A propos</h6>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{% if setting is defined %}
\t\t\t\t\t\t\t\t{{setting[0].description}}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4  col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<h6>Contactez Nous</h6>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<div class=\"\" id=\"mc_embed_signup\">

\t\t\t\t\t\t\t<p><i class=\"fa fa-phone\"></i>{% if setting is defined %} {{setting[0].phone}} {% endif %}</p>
\t\t\t\t\t\t\t<p><i class=\"fa fa-envelope\"></i>{% if setting is defined %} {{setting[0].email}} {% endif %}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<h6>Suivez nous</h6>
\t\t\t\t\t\t<div class=\"footer-social d-flex align-items-center\">
\t\t\t\t\t\t{% if setting is defined %}
\t\t\t\t\t\t\t<a href=\"{{setting[0].facebook}}\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t<a href=\"{{setting[0].twitter}}\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t<a href=\"{{setting[0].instagram}}\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<img src=\"{{asset('assets/client/img/logo.png')}}\" style=\" width:auto;\" alt=\"muzeum-logo\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom d-flex justify-content-center align-items-center flex-wrap\">
\t\t\t\t<p class=\"footer-text m-0\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- End footer Area -->
\t<!-- WhatsApp Floating Button -->
    <a href=\"#\" class=\"whatsapp-btn\" id=\"whatsappButton\">
        <img src=\"{{asset('assets/client/img/whatsapp.svg')}}\" alt=\"WhatsApp Icon\">
    </a>

    <!-- Message Input Box -->
    <div class=\"message-box\" id=\"messageBox\">
        <div class=\"input-container\">
            <input type=\"text\" id=\"whatsapp-message\" placeholder=\"Saisissez votre message...\">
            <button onclick=\"sendWhatsAppMessage()\">Envoyer</button>
        </div>
    </div>

\t<!-- Cart Button -->
\t<div id=\"cart-button\" class=\"floating-cart\">
\t\t<a href=\"{{path('shopcart_index')}}\" class=\"link\" id=\"cart-link\">
\t\t\t<span class=\"ti-bag\"></span>
\t\t\t<span class=\"h6\" id=\"cart-count\">0</span> <!-- Number of items in cart -->
\t\t</a>
\t</div>

", "home/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/footer.html.twig");
    }
}
