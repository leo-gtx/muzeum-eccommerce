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

/* admin/header.html.twig */
class __TwigTemplate_6b0e46a152222be38d9497a65c0021bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/header.html.twig"));

        // line 1
        yield "<header id=\"m_header\" class=\"m-grid__item    m-header \" m-minimize-offset=\"200\" m-minimize-mobile-offset=\"200\">
    <div class=\"m-container m-container--fluid m-container--full-height\">
        <div class=\"m-stack m-stack--ver m-stack--desktop\">

            <!-- BEGIN: Brand -->
            <div class=\"m-stack__item m-brand  m-brand--skin-dark \">
                <div class=\"m-stack m-stack--ver m-stack--general\">
                    <div class=\"m-stack__item m-stack__item--middle m-brand__logo\">
                        <a href=\"/admin\" class=\"m-brand__logo-wrapper\">
                            <img alt=\"\" src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/demo/default/media/img/logo/logo_default_dark.png\" />
                        </a>
                    </div>
                    <div class=\"m-stack__item m-stack__item--middle m-brand__tools\">

                        <!-- BEGIN: Left Aside Minimize Toggle -->
                        <a href=\"javascript:;\" id=\"m_aside_left_minimize_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  \">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href=\"javascript:;\" id=\"m_aside_left_offcanvas_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block\">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Responsive Header Menu Toggler -->
                        <a id=\"m_aside_header_menu_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block\">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Topbar Toggler -->
                        <a id=\"m_aside_header_topbar_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\">
                            <i class=\"flaticon-more\"></i>
                        </a>

                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>

            <!-- END: Brand -->
            

               

                <!-- BEGIN: Topbar -->
                <div id=\"m_header_topbar\" class=\"m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid\">
                    <div class=\"m-stack__item m-topbar__nav-wrapper\">
                        <ul class=\"m-topbar__nav m-nav m-nav--inline\">
                            <li class=\"m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light\tm-list-search m-list-search--skin-light\" m-dropdown-toggle=\"click\" id=\"m_quicksearch\" m-quicksearch-mode=\"dropdown\"
                                m-dropdown-persistent=\"1\">
                                <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-search-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                                <div class=\"m-dropdown__wrapper\">
                                    <span class=\"m-dropdown__arrow m-dropdown__arrow--center\"></span>
                                    <div class=\"m-dropdown__inner \">
                                        <div class=\"m-dropdown__header\">
                                            <form class=\"m-list-search__form\">
                                                <div class=\"m-list-search__form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-search__form-input-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"m_quicksearch_input\" autocomplete=\"off\" type=\"text\" name=\"q\" class=\"m-list-search__form-input\" value=\"\" placeholder=\"Search...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"m-list-search__form-icon-close\" id=\"m_quicksearch_close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-remove\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class=\"m-dropdown__body\">
                                            <div class=\"m-dropdown__scrollable m-scrollable\" data-scrollable=\"true\" data-height=\"300\" data-mobile-height=\"200\">
                                                <div class=\"m-dropdown__content\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            
                           
                            <li class=\"m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light\" m-dropdown-toggle=\"click\">
                                <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-topbar__userpic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "image", [], "any", false, false, false, 92))), "html", null, true);
        yield "\" height=\"40px\" class=\"m--img-rounded m--marginless\" alt=\"User Image\" />
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"m-topbar__username m--hide\">Nick</span>
                                </a>
                                <div class=\"m-dropdown__wrapper\">
                                    <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                    <div class=\"m-dropdown__inner\">
                                        <div class=\"m-dropdown__header m--align-center\" style=\"background: url(";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/app/media/img/misc/user_profile_bg.jpg); background-size: cover;\">
                                            <div class=\"m-card-user m-card-user--skin-dark\">
                                                <div class=\"m-card-user__pic\">
                                                    <img src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "image", [], "any", false, false, false, 102))), "html", null, true);
        yield "\" height=\"60px\" class=\"m--img-rounded m--marginless\" alt=\"User Image\" />

                                                    <!--
            <span class=\"m-type m-type--lg m--bg-danger\"><span class=\"m--font-light\">S<span><span>
            -->
                                                </div>
                                                <div class=\"m-card-user__details\">
                                                    <a href=\"#\" class=\"m-card-user__email m--font-weight-300 m-link\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "surname", [], "any", false, false, false, 109), "html", null, true);
        yield "</a>
                                                    <br>
                                                    <a href=\"#\" class=\"m-card-user__email m--font-weight-300 m-link\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "email", [], "any", false, false, false, 111), "html", null, true);
        yield "</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"m-dropdown__body\">
                                            <div class=\"m-dropdown__content\">
                                                <ul class=\"m-nav m-nav--skin-light\">
                                                    <li class=\"m-nav__section m--hide\">
                                                        <span class=\"m-nav__section-text\">Section</span>
                                                    </li>
                                                    <li class=\"m-nav__separator m-nav__separator--fit\">
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder\">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id=\"m_quick_sidebar_toggle\" class=\"m-nav__item\">
                                <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-grid-menu\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- END: Topbar -->
            </div>
        </div>
    </div>

</header>
<!-- END: Header -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/header.html.twig";
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
        return array (  193 => 124,  177 => 111,  170 => 109,  160 => 102,  154 => 99,  144 => 92,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header id=\"m_header\" class=\"m-grid__item    m-header \" m-minimize-offset=\"200\" m-minimize-mobile-offset=\"200\">
    <div class=\"m-container m-container--fluid m-container--full-height\">
        <div class=\"m-stack m-stack--ver m-stack--desktop\">

            <!-- BEGIN: Brand -->
            <div class=\"m-stack__item m-brand  m-brand--skin-dark \">
                <div class=\"m-stack m-stack--ver m-stack--general\">
                    <div class=\"m-stack__item m-stack__item--middle m-brand__logo\">
                        <a href=\"/admin\" class=\"m-brand__logo-wrapper\">
                            <img alt=\"\" src=\"{{asset('assets')}}/demo/default/media/img/logo/logo_default_dark.png\" />
                        </a>
                    </div>
                    <div class=\"m-stack__item m-stack__item--middle m-brand__tools\">

                        <!-- BEGIN: Left Aside Minimize Toggle -->
                        <a href=\"javascript:;\" id=\"m_aside_left_minimize_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  \">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href=\"javascript:;\" id=\"m_aside_left_offcanvas_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block\">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Responsive Header Menu Toggler -->
                        <a id=\"m_aside_header_menu_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block\">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Topbar Toggler -->
                        <a id=\"m_aside_header_topbar_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\">
                            <i class=\"flaticon-more\"></i>
                        </a>

                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>

            <!-- END: Brand -->
            

               

                <!-- BEGIN: Topbar -->
                <div id=\"m_header_topbar\" class=\"m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid\">
                    <div class=\"m-stack__item m-topbar__nav-wrapper\">
                        <ul class=\"m-topbar__nav m-nav m-nav--inline\">
                            <li class=\"m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light\tm-list-search m-list-search--skin-light\" m-dropdown-toggle=\"click\" id=\"m_quicksearch\" m-quicksearch-mode=\"dropdown\"
                                m-dropdown-persistent=\"1\">
                                <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-search-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                                <div class=\"m-dropdown__wrapper\">
                                    <span class=\"m-dropdown__arrow m-dropdown__arrow--center\"></span>
                                    <div class=\"m-dropdown__inner \">
                                        <div class=\"m-dropdown__header\">
                                            <form class=\"m-list-search__form\">
                                                <div class=\"m-list-search__form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-search__form-input-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"m_quicksearch_input\" autocomplete=\"off\" type=\"text\" name=\"q\" class=\"m-list-search__form-input\" value=\"\" placeholder=\"Search...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"m-list-search__form-icon-close\" id=\"m_quicksearch_close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-remove\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class=\"m-dropdown__body\">
                                            <div class=\"m-dropdown__scrollable m-scrollable\" data-scrollable=\"true\" data-height=\"300\" data-mobile-height=\"200\">
                                                <div class=\"m-dropdown__content\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            
                           
                            <li class=\"m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light\" m-dropdown-toggle=\"click\">
                                <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-topbar__userpic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/images/' ~ app.user.image)}}\" height=\"40px\" class=\"m--img-rounded m--marginless\" alt=\"User Image\" />
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"m-topbar__username m--hide\">Nick</span>
                                </a>
                                <div class=\"m-dropdown__wrapper\">
                                    <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                    <div class=\"m-dropdown__inner\">
                                        <div class=\"m-dropdown__header m--align-center\" style=\"background: url({{asset('assets')}}/app/media/img/misc/user_profile_bg.jpg); background-size: cover;\">
                                            <div class=\"m-card-user m-card-user--skin-dark\">
                                                <div class=\"m-card-user__pic\">
                                                    <img src=\"{{asset('uploads/images/' ~ app.user.image)}}\" height=\"60px\" class=\"m--img-rounded m--marginless\" alt=\"User Image\" />

                                                    <!--
            <span class=\"m-type m-type--lg m--bg-danger\"><span class=\"m--font-light\">S<span><span>
            -->
                                                </div>
                                                <div class=\"m-card-user__details\">
                                                    <a href=\"#\" class=\"m-card-user__email m--font-weight-300 m-link\">{{ app.user.name }} {{ app.user.surname }}</a>
                                                    <br>
                                                    <a href=\"#\" class=\"m-card-user__email m--font-weight-300 m-link\">{{ app.user.email }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"m-dropdown__body\">
                                            <div class=\"m-dropdown__content\">
                                                <ul class=\"m-nav m-nav--skin-light\">
                                                    <li class=\"m-nav__section m--hide\">
                                                        <span class=\"m-nav__section-text\">Section</span>
                                                    </li>
                                                    <li class=\"m-nav__separator m-nav__separator--fit\">
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"{{ path('app_logout')}}\" class=\"btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder\">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id=\"m_quick_sidebar_toggle\" class=\"m-nav__item\">
                                <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-grid-menu\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- END: Topbar -->
            </div>
        </div>
    </div>

</header>
<!-- END: Header -->", "admin/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/header.html.twig");
    }
}
