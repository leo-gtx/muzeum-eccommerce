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

/* registration/adminregister.html.twig */
class __TwigTemplate_db378364d4aae89bff49dd804f8e3baf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/adminregister.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/adminregister.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang=\"en\">

<!-- begin::Head -->
<head>
    <meta charset=\"utf-8\" />
    <title>Metronic | Login Page - 3</title>
    ";
        // line 21
        yield from         $this->loadTemplate("admin/head.html.twig", "registration/adminregister.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class=\"m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default\">

<!-- begin:: Page -->
<div class=\"m-grid m-grid--hor m-grid--root m-page\">
    <div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2\" id=\"m_login\" style=\"background-image: url(";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/app/media/img//bg/bg-3.jpg);\">
        <div class=\"m-grid__item m-grid__item--fluid m-login__wrapper\">
            <div class=\"m-login__container col-md-13\">
                <div class=\"m-login__logo\">
                    <a href=\"#\">
                        <img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/app/media/img/logos/logo-1.png\">
                    </a>
                </div>
                <div class=\"m-login__head\">
                    <h3 class=\"m-login__title\">Sign Up</h3>
                    <div class=\"m-login__desc\">Enter your details to create your account:</div>
                </div>
                ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'form_start');
        yield "

                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), 'widget');
        yield "
                <button class=\"btn btn-primary m-btn--wide\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 46, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>

                ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), 'form_end');
        yield "


            </div>

        </div>
    </div>
</div>


<!-- end:: Page -->

<!--begin::Base Scripts -->
<script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/base/vendors.bundle.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/demo/default/base/scripts.bundle.js\" type=\"text/javascript\"></script>

<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/snippets/custom/pages/user/login.js\" type=\"text/javascript\"></script>


<!--begin::Page Vendors Scripts -->
<script src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/custom/fullcalendar/fullcalendar.bundle.js\" type=\"text/javascript\"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Snippets -->
<script src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/app/js/dashboard.js\" type=\"text/javascript\"></script>
</body>

<!-- end::Body -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/adminregister.html.twig";
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
        return array (  158 => 76,  150 => 71,  143 => 67,  135 => 62,  131 => 61,  115 => 48,  110 => 46,  106 => 45,  101 => 43,  91 => 36,  83 => 31,  72 => 22,  70 => 21,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang=\"en\">

<!-- begin::Head -->
<head>
    <meta charset=\"utf-8\" />
    <title>Metronic | Login Page - 3</title>
    {% include('admin/head.html.twig') %}
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class=\"m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default\">

<!-- begin:: Page -->
<div class=\"m-grid m-grid--hor m-grid--root m-page\">
    <div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2\" id=\"m_login\" style=\"background-image: url({{asset('assets')}}/app/media/img//bg/bg-3.jpg);\">
        <div class=\"m-grid__item m-grid__item--fluid m-login__wrapper\">
            <div class=\"m-login__container col-md-13\">
                <div class=\"m-login__logo\">
                    <a href=\"#\">
                        <img src=\"{{asset('assets')}}/app/media/img/logos/logo-1.png\">
                    </a>
                </div>
                <div class=\"m-login__head\">
                    <h3 class=\"m-login__title\">Sign Up</h3>
                    <div class=\"m-login__desc\">Enter your details to create your account:</div>
                </div>
                {{ form_start(registrationForm) }}

                {{ form_widget(registrationForm) }}
                <button class=\"btn btn-primary m-btn--wide\">{{ button_label|default('Save') }}</button>

                {{ form_end(registrationForm) }}


            </div>

        </div>
    </div>
</div>


<!-- end:: Page -->

<!--begin::Base Scripts -->
<script src=\"{{asset('assets')}}/vendors/base/vendors.bundle.js\" type=\"text/javascript\"></script>
<script src=\"{{asset('assets')}}/demo/default/base/scripts.bundle.js\" type=\"text/javascript\"></script>

<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src=\"{{asset('assets')}}/snippets/custom/pages/user/login.js\" type=\"text/javascript\"></script>


<!--begin::Page Vendors Scripts -->
<script src=\"{{asset('assets')}}/vendors/custom/fullcalendar/fullcalendar.bundle.js\" type=\"text/javascript\"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Snippets -->
<script src=\"{{asset('assets')}}/app/js/dashboard.js\" type=\"text/javascript\"></script>
</body>

<!-- end::Body -->
</html>", "registration/adminregister.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/registration/adminregister.html.twig");
    }
}
