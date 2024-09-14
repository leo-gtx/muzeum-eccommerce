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

/* admin/sidebar.html.twig */
class __TwigTemplate_80dd649e507900ae09aaba5e27670873 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        yield "<!-- BEGIN: Left Aside -->
<button class=\"m-aside-left-close  m-aside-left-close--skin-dark \" id=\"m_aside_left_close_btn\">
    <i class=\"la la-close\"></i>
</button>
<div id=\"m_aside_left\" class=\"m-grid__item\tm-aside-left  m-aside-left--skin-dark \">

    <!-- BEGIN: Aside Menu -->
    <div id=\"m_ver_menu\" class=\"m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark \" m-menu-vertical=\"1\" m-menu-scrollable=\"1\" m-menu-dropdown-timeout=\"500\" style=\"position: relative;\">
        <ul class=\"m-menu__nav  m-menu__nav--dropdown-submenu-arrow \">
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin");
        yield "\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon la la-home\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Dashboard</span>

\t\t\t\t\t\t\t\t\t\t</span>
                    </span>
                </a>
            </li>

            <li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\" m-menu-submenu-toggle=\"hover\">
                <a href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">
                    <i class=\"m-menu__link-icon flaticon-layers\"></i>
                    <span class=\"m-menu__link-text\">Orders</span>
                    <i class=\"m-menu__ver-arrow la la-angle-right\"></i>
                </a>
                <div class=\"m-menu__submenu \">
                    <span class=\"m-menu__arrow\"></span>
                    <ul class=\"m-menu__subnav\">
                        <li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Base</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_index", ["slug" => "new"]);
        yield "\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">New</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-new\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_index", ["slug" => "accepted"]);
        yield "\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">Accepted</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-accepted\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_index", ["slug" => "inshipping"]);
        yield "\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">InShipping</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-shipping\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_index", ["slug" => "canceled"]);
        yield "\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">Canceled</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-canceled\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_index", ["slug" => "completed"]);
        yield "\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">Completed</span>
                                <span class=\"m-menu__link-title\">
                                    <span class=\"m-badge m-badge--danger\">
                                       <span class=\"m-menu__item \" id=\"ord-completed\" ria-haspopup=\"true\">0</span>
                                    </span>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/category\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas flaticon-grid-menu\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Category</span>

\t\t\t\t\t\t\t\t\t\t</span>
                    </span>
                </a>
            </li>
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/product\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-gift\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Products</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/user\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-user-friends\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Users</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>

            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/messages\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-comment\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Form Messages</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>

            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/comment\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-user\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">User Comments</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>




            <li class=\"m-menu__section \">
                <h4 class=\"m-menu__section-text\">General</h4>
                <i class=\"m-menu__section-icon flaticon-more-v2\"></i>
            </li>
            <li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\" m-menu-submenu-toggle=\"hover\">
                <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_index");
        yield "\" class=\"m-menu__link m-menu__toggle\">
                    <i class=\"m-menu__link-icon la la-calendar\"></i>
                    <span class=\"m-menu__link-text\">Events</span>
                </a>

            </li>
            <li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\" m-menu-submenu-toggle=\"hover\">
                <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        yield "\" class=\"m-menu__link m-menu__toggle\">
                    <i class=\"m-menu__link-icon flaticon-interface-7\"></i>
                    <span class=\"m-menu__link-text\">Settings</span>
                </a>

            </li>
            
        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->

<!-- END: Subheader -->
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
        return "admin/sidebar.html.twig";
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
        return array (  244 => 174,  234 => 167,  153 => 89,  137 => 76,  121 => 63,  105 => 50,  89 => 37,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- BEGIN: Left Aside -->
<button class=\"m-aside-left-close  m-aside-left-close--skin-dark \" id=\"m_aside_left_close_btn\">
    <i class=\"la la-close\"></i>
</button>
<div id=\"m_aside_left\" class=\"m-grid__item\tm-aside-left  m-aside-left--skin-dark \">

    <!-- BEGIN: Aside Menu -->
    <div id=\"m_ver_menu\" class=\"m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark \" m-menu-vertical=\"1\" m-menu-scrollable=\"1\" m-menu-dropdown-timeout=\"500\" style=\"position: relative;\">
        <ul class=\"m-menu__nav  m-menu__nav--dropdown-submenu-arrow \">
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"{{path('admin_admin')}}\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon la la-home\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Dashboard</span>

\t\t\t\t\t\t\t\t\t\t</span>
                    </span>
                </a>
            </li>

            <li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\" m-menu-submenu-toggle=\"hover\">
                <a href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">
                    <i class=\"m-menu__link-icon flaticon-layers\"></i>
                    <span class=\"m-menu__link-text\">Orders</span>
                    <i class=\"m-menu__ver-arrow la la-angle-right\"></i>
                </a>
                <div class=\"m-menu__submenu \">
                    <span class=\"m-menu__arrow\"></span>
                    <ul class=\"m-menu__subnav\">
                        <li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Base</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"{{ path('admin_orders_index', {'slug': 'new'}) }}\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">New</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-new\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"{{ path('admin_orders_index', {'slug': 'accepted'}) }}\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">Accepted</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-accepted\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"{{ path('admin_orders_index', {'slug': 'inshipping'}) }}\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">InShipping</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-shipping\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"{{ path('admin_orders_index', {'slug': 'canceled'}) }}\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">Canceled</span>
                                <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger\">
                                                   <span class=\"m-menu__item \" id=\"ord-canceled\" ria-haspopup=\"true\">0</span>
                                                </span>
\t\t\t\t\t\t\t    </span>
                            </a>
                        </li>
                        <li class=\"m-menu__item \" aria-haspopup=\"true\">
                            <a href=\"{{ path('admin_orders_index', {'slug': 'completed'}) }}\" class=\"m-menu__link \">
                                <i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">
                                    <span></span>
                                </i>
                                <span class=\"m-menu__link-text\">Completed</span>
                                <span class=\"m-menu__link-title\">
                                    <span class=\"m-badge m-badge--danger\">
                                       <span class=\"m-menu__item \" id=\"ord-completed\" ria-haspopup=\"true\">0</span>
                                    </span>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/category\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas flaticon-grid-menu\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Category</span>

\t\t\t\t\t\t\t\t\t\t</span>
                    </span>
                </a>
            </li>
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/product\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-gift\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Products</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>
            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/user\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-user-friends\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Users</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>

            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/messages\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-comment\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">Form Messages</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>

            <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\">
                <a href=\"/admin/comment\" class=\"m-menu__link \">
                    <i class=\"m-menu__link-icon fas fa-user\"></i>
                    <span class=\"m-menu__link-title\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">User Comments</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                </a>
            </li>




            <li class=\"m-menu__section \">
                <h4 class=\"m-menu__section-text\">General</h4>
                <i class=\"m-menu__section-icon flaticon-more-v2\"></i>
            </li>
            <li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\" m-menu-submenu-toggle=\"hover\">
                <a href=\"{{ path('admin_event_index') }}\" class=\"m-menu__link m-menu__toggle\">
                    <i class=\"m-menu__link-icon la la-calendar\"></i>
                    <span class=\"m-menu__link-text\">Events</span>
                </a>

            </li>
            <li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\" m-menu-submenu-toggle=\"hover\">
                <a href=\"{{ path('setting_index') }}\" class=\"m-menu__link m-menu__toggle\">
                    <i class=\"m-menu__link-icon flaticon-interface-7\"></i>
                    <span class=\"m-menu__link-text\">Settings</span>
                </a>

            </li>
            
        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->

<!-- END: Subheader -->
", "admin/sidebar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/sidebar.html.twig");
    }
}
