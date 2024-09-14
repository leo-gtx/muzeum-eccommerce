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

/* admin/setting/edit.html.twig */
class __TwigTemplate_467b84d45c05b3d5a3234551e534f11e extends Template
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
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/edit.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/setting/edit.html.twig", 1);
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

        yield "Hello AdminController!";
        
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
        yield "
                <!-- BEGIN: Subheader -->
                <div class=\"m-subheader \">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"mr-auto\">
                            <h3 class=\"m-subheader__title m-subheader__title--separator\">Modal</h3>
                            <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                                <li class=\"m-nav__item m-nav__item--home\">
                                    <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                                        <i class=\"m-nav__link-icon la la-home\"></i>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Base</span>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Modal</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class=\"m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\" aria-expanded=\"true\">
                                <a href=\"#\" class=\"m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle\">
                                    <i class=\"la la-plus m--hide\"></i>
                                    <i class=\"la la-ellipsis-h\"></i>
                                </a>
                                <div class=\"m-dropdown__wrapper\">
                                    <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                    <div class=\"m-dropdown__inner\">
                                        <div class=\"m-dropdown__body\">
                                            <div class=\"m-dropdown__content\">
                                                <ul class=\"m-nav\">
                                                    <li class=\"m-nav__section m-nav__section--first m--hide\">
                                                        <span class=\"m-nav__section-text\">Quick Actions</span>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-share\"></i>
                                                            <span class=\"m-nav__link-text\">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-chat-1\"></i>
                                                            <span class=\"m-nav__link-text\">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-info\"></i>
                                                            <span class=\"m-nav__link-text\">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>
                                                            <span class=\"m-nav__link-text\">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__separator m-nav__separator--fit\">
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"#\" class=\"btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm\">Submit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END: Subheader -->
                <div class=\"m-content\">

                    <!--begin::Portlet-->
                    <div class=\"m-portlet\">
                        <div class=\"m-portlet__head\">
                            <div class=\"m-portlet__head-caption\">
                                <div class=\"m-portlet__head-title\">
                                    <h3 class=\"m-portlet__head-text\">
                                        Modal Demos
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">

                            <h1>Edit Setting</h1>

                            ";
        // line 104
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/setting/_form.html.twig", ["button_label" => "Update"]);
        yield "

                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Modal-->
                    <div class=\"modaa fade\" id=\"m_modal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">

                    </div>

                </div>


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
        return "admin/setting/edit.html.twig";
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
        return array (  194 => 104,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}

                <!-- BEGIN: Subheader -->
                <div class=\"m-subheader \">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"mr-auto\">
                            <h3 class=\"m-subheader__title m-subheader__title--separator\">Modal</h3>
                            <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                                <li class=\"m-nav__item m-nav__item--home\">
                                    <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                                        <i class=\"m-nav__link-icon la la-home\"></i>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Base</span>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Modal</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class=\"m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\" aria-expanded=\"true\">
                                <a href=\"#\" class=\"m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle\">
                                    <i class=\"la la-plus m--hide\"></i>
                                    <i class=\"la la-ellipsis-h\"></i>
                                </a>
                                <div class=\"m-dropdown__wrapper\">
                                    <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                    <div class=\"m-dropdown__inner\">
                                        <div class=\"m-dropdown__body\">
                                            <div class=\"m-dropdown__content\">
                                                <ul class=\"m-nav\">
                                                    <li class=\"m-nav__section m-nav__section--first m--hide\">
                                                        <span class=\"m-nav__section-text\">Quick Actions</span>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-share\"></i>
                                                            <span class=\"m-nav__link-text\">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-chat-1\"></i>
                                                            <span class=\"m-nav__link-text\">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-info\"></i>
                                                            <span class=\"m-nav__link-text\">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"\" class=\"m-nav__link\">
                                                            <i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>
                                                            <span class=\"m-nav__link-text\">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"m-nav__separator m-nav__separator--fit\">
                                                    </li>
                                                    <li class=\"m-nav__item\">
                                                        <a href=\"#\" class=\"btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm\">Submit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END: Subheader -->
                <div class=\"m-content\">

                    <!--begin::Portlet-->
                    <div class=\"m-portlet\">
                        <div class=\"m-portlet__head\">
                            <div class=\"m-portlet__head-caption\">
                                <div class=\"m-portlet__head-title\">
                                    <h3 class=\"m-portlet__head-text\">
                                        Modal Demos
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">

                            <h1>Edit Setting</h1>

                            {{ include('admin/setting/_form.html.twig', {'button_label': 'Update'}) }}

                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Modal-->
                    <div class=\"modaa fade\" id=\"m_modal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">

                    </div>

                </div>


{% endblock %}
", "admin/setting/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/setting/edit.html.twig");
    }
}
