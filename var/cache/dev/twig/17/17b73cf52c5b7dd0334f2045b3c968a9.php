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

/* admin/setting/index.html.twig */
class __TwigTemplate_b5b46e695c5ba73fe0e2d17a2d92dafb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/setting/index.html.twig", 1);
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
                            <h3 class=\"m-subheader__title m-subheader__title--separator\">Setting Page</h3>
                            <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                                <li class=\"m-nav__item m-nav__item--home\">
                                    <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                                        <i class=\"m-nav__link-icon la la-home\"></i>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"/admin\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Base</span>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Setting Page</span>
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
                                        Setting
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">


                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["setting"]) {
            // line 116
            yield "                                    <tr>
                                        <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["setting"], "id", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                        <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["setting"], "title", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                        <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["setting"], "company", [], "any", false, false, false, 119), "html", null, true);
            yield "</td>
                                        <td>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["setting"], "email", [], "any", false, false, false, 120), "html", null, true);
            yield "</td>
                                        <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["setting"], "status", [], "any", false, false, false, 121), "html", null, true);
            yield "</td>
                                        <td>
                                            <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["setting"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-info\">Show</a>
                                            <a href=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["setting"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-info\">Edit</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 128
            yield "                                    <tr>
                                        <td colspan=\"21\">no records found>
                                            <br>
                                            <a href=\"";
            // line 131
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_new");
            yield "\" class=\"btn btn-info btn-info\">Create Settings</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "                                </tbody>
                            </table>


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
        return "admin/setting/index.html.twig";
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
        return array (  262 => 135,  252 => 131,  247 => 128,  238 => 124,  234 => 123,  229 => 121,  225 => 120,  221 => 119,  217 => 118,  213 => 117,  210 => 116,  205 => 115,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
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
                            <h3 class=\"m-subheader__title m-subheader__title--separator\">Setting Page</h3>
                            <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                                <li class=\"m-nav__item m-nav__item--home\">
                                    <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                                        <i class=\"m-nav__link-icon la la-home\"></i>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"/admin\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Base</span>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator\">-</li>
                                <li class=\"m-nav__item\">
                                    <a href=\"\" class=\"m-nav__link\">
                                        <span class=\"m-nav__link-text\">Setting Page</span>
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
                                        Setting
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">


                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for setting in settings %}
                                    <tr>
                                        <td>{{ setting.id }}</td>
                                        <td>{{ setting.title }}</td>
                                        <td>{{ setting.company }}</td>
                                        <td>{{ setting.email }}</td>
                                        <td>{{ setting.status }}</td>
                                        <td>
                                            <a href=\"{{ path('setting_show', {'id': setting.id}) }}\" class=\"btn btn-info btn-info\">Show</a>
                                            <a href=\"{{ path('setting_edit', {'id': setting.id}) }}\" class=\"btn btn-info btn-info\">Edit</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"21\">no records found>
                                            <br>
                                            <a href=\"{{ path('setting_new') }}\" class=\"btn btn-info btn-info\">Create Settings</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>


                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Modal-->
                    <div class=\"modaa fade\" id=\"m_modal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">

                    </div>

                </div>


{% endblock %}
", "admin/setting/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/setting/index.html.twig");
    }
}
