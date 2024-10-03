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

/* admin/comment/index.html.twig */
class __TwigTemplate_90382c4fb37092c35c98034b3891bfc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/comment/index.html.twig", 1);
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

        yield "Comment index";
        
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
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Comments List</h3>
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_new");
        yield "\" class=\"btn btn-success\">Create New Comment</a>
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
                            <span class=\"m-nav__link-text\">Comment List</span>
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
                            Comments List
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Subject</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Ip</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Created_at</th>
                        <th>Rate</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 67
            yield "                        <tr>
                            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "subject", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                            <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                            <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "status", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                            <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "ip", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                            <td><a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 73), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "surname", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                            <td><a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 74), "html", null, true);
            yield "</a></td>
                            <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                            <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"btn btn-block btn-success\">Show</a>
                            </td>
                            <td>
                                <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" class=\"btn btn-block btn-info\">Edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            yield "                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                    </tbody>
                </table>
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
        return "admin/comment/index.html.twig";
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
        return array (  234 => 89,  225 => 85,  216 => 81,  210 => 78,  205 => 76,  201 => 75,  195 => 74,  187 => 73,  183 => 72,  179 => 71,  175 => 70,  171 => 69,  167 => 68,  164 => 67,  159 => 66,  101 => 11,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Comment index{% endblock %}

{% block body %}
    <!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Comments List</h3>
                <a href=\"{{ path('admin_comment_new') }}\" class=\"btn btn-success\">Create New Comment</a>
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
                            <span class=\"m-nav__link-text\">Comment List</span>
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
                            Comments List
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Subject</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Ip</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Created_at</th>
                        <th>Rate</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for comment in comments %}
                        <tr>
                            <td>{{ comment.id }}</td>
                            <td>{{ comment.subject }}</td>
                            <td>{{ comment.comment }}</td>
                            <td>{{ comment.status }}</td>
                            <td>{{ comment.ip }}</td>
                            <td><a href=\"{{ path('admin_user_show', {'id': comment.id}) }}\"> {{ comment.name }} {{ comment.surname }}</td>
                            <td><a href=\"{{ path('admin_product_show', {'id': comment.id}) }}\">{{ comment.title }}</a></td>
                            <td>{{ comment.created_at }}</td>
                            <td>{{ comment.rate }}</td>
                            <td>
                                <a href=\"{{ path('admin_comment_show', {'id': comment.id}) }}\" class=\"btn btn-block btn-success\">Show</a>
                            </td>
                            <td>
                                <a href=\"{{ path('admin_comment_edit', {'id': comment.id}) }}\" class=\"btn btn-block btn-info\">Edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/comment/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/comment/index.html.twig");
    }
}
