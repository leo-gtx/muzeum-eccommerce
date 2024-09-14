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

/* product/show.html.twig */
class __TwigTemplate_7a109dfeee8798691315d20bf3eba0d9 extends Template
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
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "product/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " Profile";
        
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
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">
                        ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/usermenu.html.twig");
        yield "
                    </div>
                </div>
                <div class=\"col-sm-9 padding-right\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->
                            <h2>User Product Detail</h2>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "keywords", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "image", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "amount", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Detail</th>
                                    <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "detail", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "price", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "year", [], "any", false, false, false, 61), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Writer</th>
                                    <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "writer", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th>
                                    <td>";
        // line 73
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "createdAt", [], "any", false, false, false, 73)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "createdAt", [], "any", false, false, false, 73), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <td>";
        // line 77
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 77, $this->source); })()), "updatedAt", [], "any", false, false, false, 77)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 77, $this->source); })()), "updatedAt", [], "any", false, false, false, 77), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Userid</th>
                                    <td>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "userid", [], "any", false, false, false, 81), "html", null, true);
        yield "</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_index");
        yield "\" class=\"btn btn-info\">Back to List</a>

                            <a href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
        yield "\" class=\"btn btn-success\">Edit</a>

                            ";
        // line 90
        yield Twig\Extension\CoreExtension::include($this->env, $context, "product/_delete_form.html.twig");
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        return "product/show.html.twig";
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
        return array (  235 => 90,  230 => 88,  225 => 86,  217 => 81,  210 => 77,  203 => 73,  196 => 69,  189 => 65,  182 => 61,  175 => 57,  168 => 53,  161 => 49,  154 => 45,  147 => 41,  140 => 37,  133 => 33,  126 => 29,  119 => 25,  103 => 12,  95 => 6,  85 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }} Profile{% endblock %}

{% block body %}

    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">
                        {{ include('user/usermenu.html.twig') }}
                    </div>
                </div>
                <div class=\"col-sm-9 padding-right\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->
                            <h2>User Product Detail</h2>

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
                                    <td>{{ product.image }}</td>
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
                                <tr>
                                    <th>Userid</th>
                                    <td>{{ product.userid }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"{{ path('user_product_index') }}\" class=\"btn btn-info\">Back to List</a>

                            <a href=\"{{ path('user_product_edit', {'id': product.id}) }}\" class=\"btn btn-success\">Edit</a>

                            {{ include('product/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "product/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/product/show.html.twig");
    }
}
