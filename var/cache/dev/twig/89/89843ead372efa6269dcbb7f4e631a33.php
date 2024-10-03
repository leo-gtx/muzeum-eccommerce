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

/* home/header.html.twig */
class __TwigTemplate_ea5f3d049a85ba8d35248391c16683a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        // line 1
        yield "<!-- Start Header Area -->
\t<header class=\"header_area sticky-header\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light main_box\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/logo.png"), "html", null, true);
        yield "\" alt=\"muzeum-logo\"></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav ml-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Acceuil</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contact");
        yield "\">Vendre mon livre</a></li>
                            ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            yield "                            <li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
\t\t\t\t\t\t\t\t aria-expanded=\"false\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">Mon profile</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_index");
            yield "\">Mon Pannier</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_library");
            yield "\">Ma Bibliothèque</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/orders\">Mes Commandes</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/user/comments\">Mes Commentaires</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 29
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show_favorites");
            yield "\">Mes favories</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Deconnexion</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
                            ";
        } else {
            // line 34
            yield "                            <li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
\t\t\t\t\t\t\t\t aria-expanded=\"false\">Connexion</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_index");
            yield "\">Mon Pannier</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/orders\">Mes Commandes</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se Connecter</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">S'inscrire</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
                            ";
        }
        // line 45
        yield "\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<button class=\"search\"><span class=\"lnr lnr-magnifier\" id=\"search\"></span></button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<div class=\"search_input\" id=\"search_input_box\">
\t\t\t<div class=\"container\">
\t\t\t\t<form method=\"get\" action=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"d-flex justify-content-between\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search_input\" name=\"query\" placeholder=\"Rechercher un produit...\">
\t\t\t\t\t<button type=\"submit\" class=\"btn\"></button>
\t\t\t\t\t<span class=\"lnr lnr-cross\" id=\"close_search\"  title=\"Close Search\"></span>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- End Header Area -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/header.html.twig";
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
        return array (  149 => 58,  134 => 45,  127 => 41,  123 => 40,  118 => 38,  112 => 34,  104 => 29,  98 => 26,  94 => 25,  90 => 24,  85 => 22,  81 => 20,  79 => 19,  75 => 18,  71 => 17,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Start Header Area -->
\t<header class=\"header_area sticky-header\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light main_box\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=\"{{path('home')}}\"><img src=\"{{asset('assets/client/img/logo.png')}}\" alt=\"muzeum-logo\"></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav ml-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('home')}}\">Acceuil</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('home_contact')}}\">Vendre mon livre</a></li>
                            {% if app.user %}
                            <li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
\t\t\t\t\t\t\t\t aria-expanded=\"false\">{{app.user.name}}</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('user_edit', {'id': app.user.id})}}\">Mon profile</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('shopcart_index')}}\">Mon Pannier</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path(\"user_library\")}}\">Ma Bibliothèque</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/orders\">Mes Commandes</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/user/comments\">Mes Commentaires</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('user_show_favorites')}}\">Mes favories</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Deconnexion</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
                            {% else %}
                            <li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
\t\t\t\t\t\t\t\t aria-expanded=\"false\">Connexion</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('shopcart_index')}}\">Mon Pannier</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/orders\">Mes Commandes</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_login')}}\">Se Connecter</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_register')}}\">S'inscrire</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
                            {% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<button class=\"search\"><span class=\"lnr lnr-magnifier\" id=\"search\"></span></button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<div class=\"search_input\" id=\"search_input_box\">
\t\t\t<div class=\"container\">
\t\t\t\t<form method=\"get\" action=\"{{path('home')}}\" class=\"d-flex justify-content-between\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search_input\" name=\"query\" placeholder=\"Rechercher un produit...\">
\t\t\t\t\t<button type=\"submit\" class=\"btn\"></button>
\t\t\t\t\t<span class=\"lnr lnr-cross\" id=\"close_search\"  title=\"Close Search\"></span>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- End Header Area -->", "home/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/header.html.twig");
    }
}
