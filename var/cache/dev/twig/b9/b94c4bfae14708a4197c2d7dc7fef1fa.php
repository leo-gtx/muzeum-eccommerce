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

/* security/userlogin.html.twig */
class __TwigTemplate_d5741cbbdb8fc1b3eaa1a3e1a0eeab03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/userlogin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/userlogin.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "security/userlogin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "User Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "\t<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"#\">Se connecter</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->

    <!--================Login Box Area =================-->
\t<section class=\"login_box_area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_box_img\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/login.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<h4>Faite comme chez vous!</h4>
\t\t\t\t\t\t\t<p>Réalisez des achats de qualité en toute tranquilité. Bienvenue chez Museum.</p>
\t\t\t\t\t\t\t<a class=\"primary-btn\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">S'inscrire</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_form_inner\">
\t\t\t\t\t\t<h3>Connexion</h3>
\t\t\t\t\t\t<form class=\"row login_form\" action=\"/login\" method=\"post\" id=\"contactForm\" novalidate=\"novalidate\">
\t\t\t\t\t\t\t";
        // line 38
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })())) {
            // line 39
            yield "                                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", [], "any", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageData", [], "any", false, false, false, 39), "security"), "html", null, true);
            yield "</div>
                            ";
        }
        // line 41
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            yield "                                <div class=\"mb-3\">
                                    Connectez en tant que ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                                 </div>
                            ";
        }
        // line 46
        yield "                            <div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"name\" name=\"email\" placeholder=\"Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Username'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"name\" name=\"password\" placeholder=\"Mot de passe\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Password'\">
                                 <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                            >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<div class=\"creat_account\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" id=\"f-option2\">
\t\t\t\t\t\t\t\t\t<label for=\"f-option2\">Se souvenir de moi</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"submit\" class=\"primary-btn\">Se connecter</button>
\t\t\t\t\t\t\t\t<a href=\"#\">Mot de passe oublier?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Login Box Area =================-->

   
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
        return "security/userlogin.html.twig";
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
        return array (  169 => 52,  161 => 46,  153 => 43,  150 => 42,  147 => 41,  141 => 39,  139 => 38,  128 => 30,  121 => 26,  103 => 11,  94 => 4,  84 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}
{% block title %}User Login{% endblock %}
{% block body %}
\t<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"{{path('home')}}\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t<a href=\"#\">Se connecter</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->

    <!--================Login Box Area =================-->
\t<section class=\"login_box_area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_box_img\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{asset('assets/client/img/login.jpg')}}\" alt=\"\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<h4>Faite comme chez vous!</h4>
\t\t\t\t\t\t\t<p>Réalisez des achats de qualité en toute tranquilité. Bienvenue chez Museum.</p>
\t\t\t\t\t\t\t<a class=\"primary-btn\" href=\"{{path('app_register')}}\">S'inscrire</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_form_inner\">
\t\t\t\t\t\t<h3>Connexion</h3>
\t\t\t\t\t\t<form class=\"row login_form\" action=\"/login\" method=\"post\" id=\"contactForm\" novalidate=\"novalidate\">
\t\t\t\t\t\t\t{% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}
                            {% if app.user %}
                                <div class=\"mb-3\">
                                    Connectez en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                                 </div>
                            {% endif %}
                            <div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"name\" name=\"email\" placeholder=\"Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Username'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"name\" name=\"password\" placeholder=\"Mot de passe\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Password'\">
                                 <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('authenticate') }}\"
                            >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<div class=\"creat_account\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" id=\"f-option2\">
\t\t\t\t\t\t\t\t\t<label for=\"f-option2\">Se souvenir de moi</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"submit\" class=\"primary-btn\">Se connecter</button>
\t\t\t\t\t\t\t\t<a href=\"#\">Mot de passe oublier?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Login Box Area =================-->

   
{% endblock %}

", "security/userlogin.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/security/userlogin.html.twig");
    }
}
