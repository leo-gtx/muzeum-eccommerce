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

/* admin/product/show.html.twig */
class __TwigTemplate_50369ebe553b7fc39cc70caf1a00847b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/product/show.html.twig", 1);
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

        yield "Product";
        
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
                            <h3 class=\"m-subheader__title m-subheader__title--separator\">Category</h3>
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
                                        <span class=\"m-nav__link-text\">Category</span>
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
                                        Category List Table
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">
                            <h1>Product</h1>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "title", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "keywords", [], "any", false, false, false, 64), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 72, $this->source); })()), "image", [], "any", false, false, false, 72))), "html", null, true);
        yield "\" height=\"100\"> </td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "amount", [], "any", false, false, false, 76), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Detail</th>
                                    <td>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "detail", [], "any", false, false, false, 80), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "price", [], "any", false, false, false, 84), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "type", [], "any", false, false, false, 88), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 92, $this->source); })()), "year", [], "any", false, false, false, 92), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Writer</th>
                                    <td>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "writer", [], "any", false, false, false, 96), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 100, $this->source); })()), "status", [], "any", false, false, false, 100), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th>
                                    <td>";
        // line 104
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 104, $this->source); })()), "createdAt", [], "any", false, false, false, 104)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 104, $this->source); })()), "createdAt", [], "any", false, false, false, 104), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <td>";
        // line 108
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 108, $this->source); })()), "updatedAt", [], "any", false, false, false, 108)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 108, $this->source); })()), "updatedAt", [], "any", false, false, false, 108), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class=\"col-md-2\">
                                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_index");
        yield "\" class=\"btn btn-block btn-info\">Back to List</a>
                            </div>
                            <div class=\"col-md-2\">
                                <a href=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)]), "html", null, true);
        yield "\" class=\"btn btn-block btn-success\">Edit</a>
                            </div>
                            <div class=\"col-md-2\">
                            ";
        // line 120
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/product/_delete_form.html.twig");
        yield "
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
        return "admin/product/show.html.twig";
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
        return array (  258 => 120,  252 => 117,  246 => 114,  237 => 108,  230 => 104,  223 => 100,  216 => 96,  209 => 92,  202 => 88,  195 => 84,  188 => 80,  181 => 76,  174 => 72,  167 => 68,  160 => 64,  153 => 60,  146 => 56,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Product{% endblock %}

{% block body %}

                <!-- BEGIN: Subheader -->
                <div class=\"m-subheader \">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"mr-auto\">
                            <h3 class=\"m-subheader__title m-subheader__title--separator\">Category</h3>
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
                                        <span class=\"m-nav__link-text\">Category</span>
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
                                        Category List Table
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">
                            <h1>Product</h1>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ product.id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ product.title }}</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>{{ product.keywords }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ product.description }}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src=\"{{ asset('uploads/images/' ~ product.image) }}\" height=\"100\"> </td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>{{ product.amount }}</td>
                                </tr>
                                <tr>
                                    <th>Detail</th>
                                    <td>{{ product.detail }}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ product.price }}</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>{{ product.type }}</td>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>{{ product.year }}</td>
                                </tr>
                                <tr>
                                    <th>Writer</th>
                                    <td>{{ product.writer }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ product.status }}</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th>
                                    <td>{{ product.createdAt ? product.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <td>{{ product.updatedAt ? product.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class=\"col-md-2\">
                                <a href=\"{{ path('admin_product_index') }}\" class=\"btn btn-block btn-info\">Back to List</a>
                            </div>
                            <div class=\"col-md-2\">
                                <a href=\"{{ path('admin_product_edit', {'id': product.id}) }}\" class=\"btn btn-block btn-success\">Edit</a>
                            </div>
                            <div class=\"col-md-2\">
                            {{ include('admin/product/_delete_form.html.twig') }}
                            </div>


                        </div>
                    </div>
                </div>
            </div>

{% endblock %}
", "admin/product/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/product/show.html.twig");
    }
}
