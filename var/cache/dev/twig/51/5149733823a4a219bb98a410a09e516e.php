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

/* home/contact.html.twig */
class __TwigTemplate_7ddc3a713ec60a1c4180956950a19823 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/contact.html.twig", 1);
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

        yield "Vendre mon Livre | ";
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Vendre mon livre</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Acceuil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contact");
        yield "\">Vendre mon livre</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
<!-- End Banner Area -->
<!--================Contact Area =================-->
\t<section class=\"contact_area section_gap_bottom\">
\t\t<div class=\"container\">
            <div class=\"row\">
\t\t\t\t<img class=\"img\" width=\"100%\"  src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/home/wallpaper.jpg"), "html", null, true);
        yield "\"/>
\t\t\t</div>

            <div class=\"row py-5\" >
\t\t\t\t<h2>Vous êtes auteur et souhaitez vendre votre livre ?</h2>
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tRejoignez notre plateforme et partagez votre œuvre avec un large public passionné de lecture. Que vous ayez écrit un roman captivant, un guide pratique ou un essai percutant, nous vous offrons une vitrine unique pour présenter vos créations. Vendre vos livres, numériques ou physiques, n’a jamais été aussi simple !<br>
\t\t\t\t\t
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><h3>Pourquoi nous choisir ?</h3></li>
\t\t\t\t\t\t<li class=\"lead\"><b >Visibilité accrue :</b> Accédez à une communauté de lecteurs actifs.</li>
\t\t\t\t\t\t<li class=\"lead\"><b >Mise en avant personnalisée :</b> Profitez de pages dédiées à vos œuvres.</li>
\t\t\t\t\t\t<li class=\"lead\"><b >Processus simple :</b> Gérer vos ventes et paiements en toute simplicité.</li>

\t\t\t\t\t</ul>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<h2 class=\"text-center my-5\"><b>Inscrivez-vous dès aujourd'hui et donnez à votre livre la visibilité qu'il mérite !</b></h2>
\t\t\t<div class=\"row\">
\t\t\t\t
                ";
        // line 47
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"contact_info\">
\t\t\t\t\t\t<div class=\"info_item\">
\t\t\t\t\t\t\t<i class=\"lnr lnr-home\"></i>
\t\t\t\t\t\t\t<h6>Cameroun</h6>
\t\t\t\t\t\t\t<p>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 53, $this->source); })()), 0, [], "array", false, false, false, 53), "address", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info_item\">
\t\t\t\t\t\t\t<i class=\"lnr lnr-phone-handset\"></i>
\t\t\t\t\t\t\t<h6><a href=\"#\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 57, $this->source); })()), 0, [], "array", false, false, false, 57), "phone", [], "any", false, false, false, 57), "html", null, true);
        yield "</a></h6>
\t\t\t\t\t\t\t<p>Lundi à Vendredi de 9h à 18h</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info_item\">
\t\t\t\t\t\t\t<i class=\"lnr lnr-envelope\"></i>
\t\t\t\t\t\t\t<h6><a href=\"#\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 62, $this->source); })()), 0, [], "array", false, false, false, 62), "email", [], "any", false, false, false, 62), "html", null, true);
        yield "</a></h6>
\t\t\t\t\t\t\t<p>Envoyez nous vos messages quand vous voulez!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<form class=\"row contact_form\"  method=\"post\" id=\"contactForm\" novalidate=\"novalidate\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"messages[name]\" placeholder=\"Entrer votre name\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your name'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"messages[email]\" placeholder=\"Entrer votre email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email address'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"subject\" name=\"messages[subject]\" placeholder=\"Entrer le Sujet\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Subject'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"messages[message]\" id=\"message\" rows=\"1\" placeholder=\"Entrer votre Message\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Message'\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 text-right\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-message"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t<button type=\"submit\" value=\"submit\" class=\"primary-btn\">Envoyez Mon Message</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<iframe id=\"mapBox\" class=\"mapBox\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.6416115889388!2d9.747362088854985!3d4.093144700000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610fcc62cf1d59%3A0x6259be7bc7405f8f!2sCarrefour%20des%20immeubles%20de%20kotto!5e0!3m2!1sfr!2scm!4v1726314646702!5m2!1sfr!2scm\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t</div>
\t</section>
\t<!--================Contact Area =================-->
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
        return "home/contact.html.twig";
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
        return array (  238 => 86,  211 => 62,  203 => 57,  196 => 53,  187 => 47,  164 => 27,  150 => 16,  146 => 15,  137 => 8,  127 => 7,  107 => 5,  87 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Vendre mon Livre | {{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}}{% endblock %}

{% block body %}
<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Vendre mon livre</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"{{path('home')}}\">Acceuil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"{{path('home_contact')}}\">Vendre mon livre</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
<!-- End Banner Area -->
<!--================Contact Area =================-->
\t<section class=\"contact_area section_gap_bottom\">
\t\t<div class=\"container\">
            <div class=\"row\">
\t\t\t\t<img class=\"img\" width=\"100%\"  src=\"{{ asset('assets/images/home/wallpaper.jpg') }}\"/>
\t\t\t</div>

            <div class=\"row py-5\" >
\t\t\t\t<h2>Vous êtes auteur et souhaitez vendre votre livre ?</h2>
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tRejoignez notre plateforme et partagez votre œuvre avec un large public passionné de lecture. Que vous ayez écrit un roman captivant, un guide pratique ou un essai percutant, nous vous offrons une vitrine unique pour présenter vos créations. Vendre vos livres, numériques ou physiques, n’a jamais été aussi simple !<br>
\t\t\t\t\t
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><h3>Pourquoi nous choisir ?</h3></li>
\t\t\t\t\t\t<li class=\"lead\"><b >Visibilité accrue :</b> Accédez à une communauté de lecteurs actifs.</li>
\t\t\t\t\t\t<li class=\"lead\"><b >Mise en avant personnalisée :</b> Profitez de pages dédiées à vos œuvres.</li>
\t\t\t\t\t\t<li class=\"lead\"><b >Processus simple :</b> Gérer vos ventes et paiements en toute simplicité.</li>

\t\t\t\t\t</ul>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<h2 class=\"text-center my-5\"><b>Inscrivez-vous dès aujourd'hui et donnez à votre livre la visibilité qu'il mérite !</b></h2>
\t\t\t<div class=\"row\">
\t\t\t\t
                {{ include('messages.html.twig') }}
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"contact_info\">
\t\t\t\t\t\t<div class=\"info_item\">
\t\t\t\t\t\t\t<i class=\"lnr lnr-home\"></i>
\t\t\t\t\t\t\t<h6>Cameroun</h6>
\t\t\t\t\t\t\t<p>{{setting[0].address}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info_item\">
\t\t\t\t\t\t\t<i class=\"lnr lnr-phone-handset\"></i>
\t\t\t\t\t\t\t<h6><a href=\"#\">{{setting[0].phone}}</a></h6>
\t\t\t\t\t\t\t<p>Lundi à Vendredi de 9h à 18h</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info_item\">
\t\t\t\t\t\t\t<i class=\"lnr lnr-envelope\"></i>
\t\t\t\t\t\t\t<h6><a href=\"#\">{{setting[0].email}}</a></h6>
\t\t\t\t\t\t\t<p>Envoyez nous vos messages quand vous voulez!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<form class=\"row contact_form\"  method=\"post\" id=\"contactForm\" novalidate=\"novalidate\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"messages[name]\" placeholder=\"Entrer votre name\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your name'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"messages[email]\" placeholder=\"Entrer votre email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email address'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"subject\" name=\"messages[subject]\" placeholder=\"Entrer le Sujet\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Subject'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"messages[message]\" id=\"message\" rows=\"1\" placeholder=\"Entrer votre Message\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Message'\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 text-right\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-message') }}\">
\t\t\t\t\t\t\t<button type=\"submit\" value=\"submit\" class=\"primary-btn\">Envoyez Mon Message</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<iframe id=\"mapBox\" class=\"mapBox\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.6416115889388!2d9.747362088854985!3d4.093144700000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610fcc62cf1d59%3A0x6259be7bc7405f8f!2sCarrefour%20des%20immeubles%20de%20kotto!5e0!3m2!1sfr!2scm!4v1726314646702!5m2!1sfr!2scm\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t</div>
\t</section>
\t<!--================Contact Area =================-->
    {% endblock %}
", "home/contact.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/contact.html.twig");
    }
}
