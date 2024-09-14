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

/* admin/comment/show.html.twig */
class __TwigTemplate_18128b77de2a05da3d8b5b892f969325 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/comment/show.html.twig", 1);
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

        yield "Comment";
        
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
        yield "    <!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Comment Detail</h3>
                <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                    <li class=\"m-nav__item m-nav__item--home\">
                        <a href=\"/admin\" class=\"m-nav__link m-nav__link--icon\">
                            <i class=\"m-nav__link-icon la la-home\"></i>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"/admin\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Home</span>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Comment Detail</span>
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
                            Contact Form Message Edit
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                <h1>Comment</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 59, $this->source); })()), "subject", [], "any", false, false, false, 59), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 63, $this->source); })()), "comment", [], "any", false, false, false, 63), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Ip</th>
                        <td>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 71, $this->source); })()), "ip", [], "any", false, false, false, 71), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Userid</th>
                        <td>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 75, $this->source); })()), "userid", [], "any", false, false, false, 75), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Created_at</th>
                        <td>";
        // line 79
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 79, $this->source); })()), "createdAt", [], "any", false, false, false, 79)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 79, $this->source); })()), "createdAt", [], "any", false, false, false, 79), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Updated_at</th>
                        <td>";
        // line 83
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 83, $this->source); })()), "updatedAt", [], "any", false, false, false, 83)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 83, $this->source); })()), "updatedAt", [], "any", false, false, false, 83), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Rate</th>
                        <td>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 87, $this->source); })()), "rate", [], "any", false, false, false, 87), "html", null, true);
        yield "</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_index");
        yield "\" class=\"btn btn-info\">Back to List</a>

                <a href=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        yield "\" class=\"btn btn-success\">Edit</a>

                ";
        // line 96
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/comment/_delete_form.html.twig");
        yield "
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
        return "admin/comment/show.html.twig";
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
        return array (  219 => 96,  214 => 94,  209 => 92,  201 => 87,  194 => 83,  187 => 79,  180 => 75,  173 => 71,  166 => 67,  159 => 63,  152 => 59,  145 => 55,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Comment{% endblock %}

{% block body %}
    <!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Comment Detail</h3>
                <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                    <li class=\"m-nav__item m-nav__item--home\">
                        <a href=\"/admin\" class=\"m-nav__link m-nav__link--icon\">
                            <i class=\"m-nav__link-icon la la-home\"></i>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"/admin\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Home</span>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Comment Detail</span>
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
                            Contact Form Message Edit
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                <h1>Comment</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ comment.id }}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>{{ comment.subject }}</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>{{ comment.comment }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ comment.status }}</td>
                    </tr>
                    <tr>
                        <th>Ip</th>
                        <td>{{ comment.ip }}</td>
                    </tr>
                    <tr>
                        <th>Userid</th>
                        <td>{{ comment.userid }}</td>
                    </tr>
                    <tr>
                        <th>Created_at</th>
                        <td>{{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Updated_at</th>
                        <td>{{ comment.updatedAt ? comment.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Rate</th>
                        <td>{{ comment.rate }}</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('admin_comment_index') }}\" class=\"btn btn-info\">Back to List</a>

                <a href=\"{{ path('admin_comment_edit', {'id': comment.id}) }}\" class=\"btn btn-success\">Edit</a>

                {{ include('admin/comment/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}
", "admin/comment/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/comment/show.html.twig");
    }
}
