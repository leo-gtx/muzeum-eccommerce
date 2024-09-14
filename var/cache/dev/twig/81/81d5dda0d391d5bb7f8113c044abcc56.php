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

/* security/adminlogin.html.twig */
class __TwigTemplate_d93b359ab15916ff6f5727c99fd16aa2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- begin::Head -->
<head>
    <meta charset=\"utf-8\" />
    <title>Metronic | Login Page - 3</title>
    ";
        // line 8
        yield from         $this->loadTemplate("admin/head.html.twig", "security/adminlogin.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class=\"m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default\">

<!-- begin:: Page -->
<div class=\"m-grid m-grid--hor m-grid--root m-page\">
    <div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2\" id=\"m_login\" style=\"background-image: url(";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/app/media/img//bg/bg-3.jpg);\">
        <div class=\"m-grid__item m-grid__item--fluid\tm-login__wrapper\">
            <div class=\"m-login__container\">
                <div class=\"m-login__logo\">
                    <a href=\"#\">
                        <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/app/media/img/logos/logo-1.png\">
                    </a>
                </div>
                <div class=\"m-login__head\">
                    <h3 class=\"m-login__title\">Sign In To Admin</h3>
                </div>
                <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                <form method=\"post\">
                    <label for=\"inputEmail\">Email</label>
                    <input type=\"email\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                    >

                    ";
        // line 50
        yield "
                    <div class=\"row m-login__form-sub\">
                        <div class=\"col m--align-left m-login__form-left\">
                            <label class=\"m-checkbox  m-checkbox--focus\">
                                <input type=\"checkbox\" name=\"remember\"> Remember me
                                <span></span>
                            </label>
                        </div>
                        <div class=\"col m--align-right m-login__form-right\">
                            <a href=\"javascript:;\" id=\"m_login_forget_password\" class=\"m-link\">Forget Password ?</a>
                        </div>
                    </div>
                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                        Sign in
                    </button>
                    <div class=\"m-login__forget-password\">
                        <div class=\"m-login__head\">
                            <h3 class=\"m-login__title\">Forgotten Password ?</h3>
                            <div class=\"m-login__desc\">Enter your email to reset your password:</div>
                        </div>
                    </div>
                    <div class=\"m-login__account\"a>
\t\t\t\t\t\t\t<span class=\"m-login__account-msg\">
\t\t\t\t\t\t\t\tDon't have an account yet ?
\t\t\t\t\t\t\t</span>&nbsp;&nbsp;
                        <a href=\"/register\" id=\"\" class=\"m-link m-link--light m-login__account-link\">Sign Up</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- end:: Page -->

<!--begin::Base Scripts -->
<script src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/base/vendors.bundle.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/demo/default/base/scripts.bundle.js\" type=\"text/javascript\"></script>

<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/snippets/custom/pages/user/login.js\" type=\"text/javascript\"></script>


<!--begin::Page Vendors Scripts -->
<script src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/custom/fullcalendar/fullcalendar.bundle.js\" type=\"text/javascript\"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Snippets -->
<script src=\"";
        // line 103
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
        return "security/adminlogin.html.twig";
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
        return array (  171 => 103,  163 => 98,  156 => 94,  148 => 89,  144 => 88,  104 => 50,  98 => 37,  90 => 32,  78 => 23,  70 => 18,  59 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
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
        <div class=\"m-grid__item m-grid__item--fluid\tm-login__wrapper\">
            <div class=\"m-login__container\">
                <div class=\"m-login__logo\">
                    <a href=\"#\">
                        <img src=\"{{asset('assets')}}/app/media/img/logos/logo-1.png\">
                    </a>
                </div>
                <div class=\"m-login__head\">
                    <h3 class=\"m-login__title\">Sign In To Admin</h3>
                </div>
                <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                <form method=\"post\">
                    <label for=\"inputEmail\">Email</label>
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >

                    {#
                        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                        See https://symfony.com/doc/current/security/remember_me.html

                        <div class=\"checkbox mb-3\">
                            <label>
                                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                            </label>
                        </div>
                    #}

                    <div class=\"row m-login__form-sub\">
                        <div class=\"col m--align-left m-login__form-left\">
                            <label class=\"m-checkbox  m-checkbox--focus\">
                                <input type=\"checkbox\" name=\"remember\"> Remember me
                                <span></span>
                            </label>
                        </div>
                        <div class=\"col m--align-right m-login__form-right\">
                            <a href=\"javascript:;\" id=\"m_login_forget_password\" class=\"m-link\">Forget Password ?</a>
                        </div>
                    </div>
                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                        Sign in
                    </button>
                    <div class=\"m-login__forget-password\">
                        <div class=\"m-login__head\">
                            <h3 class=\"m-login__title\">Forgotten Password ?</h3>
                            <div class=\"m-login__desc\">Enter your email to reset your password:</div>
                        </div>
                    </div>
                    <div class=\"m-login__account\"a>
\t\t\t\t\t\t\t<span class=\"m-login__account-msg\">
\t\t\t\t\t\t\t\tDon't have an account yet ?
\t\t\t\t\t\t\t</span>&nbsp;&nbsp;
                        <a href=\"/register\" id=\"\" class=\"m-link m-link--light m-login__account-link\">Sign Up</a>
                    </div>
                </form>
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
</html>", "security/adminlogin.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/security/adminlogin.html.twig");
    }
}
