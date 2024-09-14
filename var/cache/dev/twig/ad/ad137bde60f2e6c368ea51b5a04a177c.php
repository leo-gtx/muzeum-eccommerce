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

/* admin/event/edit.html.twig */
class __TwigTemplate_7e68eabc4d559a5b0624998423c4f108 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event/edit.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/event/edit.html.twig", 1);
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

        yield "Edit Event List";
        
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
                            <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                                <li class=\"m-nav__item m-nav__item--home\">
                                    <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                                        <i class=\"m-nav__link-icon la la-home\"></i>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Home</span>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Edit Event</span>
                                    </a>
                                </li>
                            </ul>
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
                                        Event List
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">
                            ";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/event/_form.html.twig", ["button_label" => "Update"]);
        yield "
                            <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_index");
        yield "\" class=\"btn btn-info\">back to list</a>


                            ";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/event/_delete_form.html.twig");
        yield "


                        </div>
                    </div>
                </div>
            </div>
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
        return "admin/event/edit.html.twig";
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
        return array (  150 => 54,  144 => 51,  140 => 50,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Edit Event List{% endblock %}

{% block body %}


                <!-- BEGIN: Subheader -->
                <div class=\"m-subheader \">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"mr-auto\">
                            <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                                <li class=\"m-nav__item m-nav__item--home\">
                                    <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                                        <i class=\"m-nav__link-icon la la-home\"></i>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Home</span>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Edit Event</span>
                                    </a>
                                </li>
                            </ul>
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
                                        Event List
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">
                            {{ include('admin/event/_form.html.twig', {'button_label': 'Update'}) }}
                            <a href=\"{{ path('admin_event_index') }}\" class=\"btn btn-info\">back to list</a>


                            {{ include('admin/event/_delete_form.html.twig') }}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/event/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/event/edit.html.twig");
    }
}
