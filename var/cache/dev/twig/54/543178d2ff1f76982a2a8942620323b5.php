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

/* admin/orders/show.html.twig */
class __TwigTemplate_7d7a14d5fcc28b12f3d08f8d96c795e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/orders/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/orders/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/orders/show.html.twig", 1);
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

        yield "Show Order";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "
                <!-- END: Subheader -->
                <div class=\"m-content\">

                    <!--begin::Portlet-->
                    <div class=\"m-portlet\">
                        <div class=\"m-portlet__head\">
                            <div class=\"m-portlet__head-caption\">
                                <div class=\"m-portlet__head-title\">
                                    <h3 class=\"m-portlet__head-text\">
                                        User List
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Userid</th>
                                    <td>";
        // line 29
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true)) : (yield "Guest"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "amount", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "address", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "city", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "phone", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Payment Id</th>
                                    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 53, $this->source); })()), "paymentId", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Payment Link</th>
                                    <td><a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "paymentLink", [], "any", false, false, false, 57), "html", null, true);
        yield "\">Lien de paiement</a></td>
                                </tr>
                                <tr>
                                    <th>Is Paid</th>
                                    <td>";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "isPaid", [], "any", false, false, false, 61)) ? ("Yes") : ("No"));
        yield "</td>
                                </tr>

                                <form action=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" method=\"post\">
                                    <tr>
                                        <th>Shipinfo</th>
                                        <td> <textarea class=\"form-control\" name=\"shipinfo\" cols=\"100\" rows=\"3\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "shipinfo", [], "any", false, false, false, 67), "html", null, true);
        yield "</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Admin Note</th>
                                        <td> <textarea class=\"form-control\" name=\"note\" cols=\"100\" rows=\"3\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 71, $this->source); })()), "note", [], "any", false, false, false, 71), "html", null, true);
        yield "</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <select class=\"form-control\" name=\"status\">
                                                <option>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77), "html", null, true);
        yield "</option>
                                                <option>Accepted</option>
                                                <option>InShipping</option>
                                                <option>Canceled</option>
                                                <option>Completed</option>
                                            </select>
                                            <input class=\"btn btn-success\" type=\"submit\" value=\"Update\">
                                        </td>
                                    </tr>
                                </form>
                                </tbody>
                            </table>

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 101
        $context["total"] = 0;
        // line 102
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orderdetail"]) || array_key_exists("orderdetail", $context) ? $context["orderdetail"] : (function () { throw new RuntimeError('Variable "orderdetail" does not exist.', 102, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 103
            yield "                                        <tr>
                                            <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                                            <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "name", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                                            <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "price", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                                            <td>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "quantity", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
                                            <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "amount", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                                            <td>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rs"], "status", [], "any", false, false, false, 109), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            yield "                                        <tr>
                                            <td colspan=\"5\">Order Detail</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                                    <tr>
                                        <td colspan=\"5\"><b>Total à payer : ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 117, $this->source); })()), "amount", [], "any", false, false, false, 117), "html", null, true);
        yield "</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_index", ["slug" => "new"]);
        yield " \" class=\"btn btn-info\">back to list</a>
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
        return "admin/orders/show.html.twig";
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
        return array (  293 => 122,  285 => 117,  282 => 116,  273 => 112,  265 => 109,  261 => 108,  257 => 107,  253 => 106,  249 => 105,  245 => 104,  242 => 103,  236 => 102,  234 => 101,  207 => 77,  198 => 71,  191 => 67,  185 => 64,  179 => 61,  172 => 57,  165 => 53,  158 => 49,  151 => 45,  144 => 41,  137 => 37,  130 => 33,  123 => 29,  116 => 25,  94 => 5,  84 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Show Order{% endblock %}
{% block body %}

                <!-- END: Subheader -->
                <div class=\"m-content\">

                    <!--begin::Portlet-->
                    <div class=\"m-portlet\">
                        <div class=\"m-portlet__head\">
                            <div class=\"m-portlet__head-caption\">
                                <div class=\"m-portlet__head-title\">
                                    <h3 class=\"m-portlet__head-text\">
                                        User List
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ order.id }}</td>
                                </tr>
                                <tr>
                                    <th>Userid</th>
                                    <td>{{ order.user.id ? order.user.id:'Guest' }}</td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>{{ order.amount }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ order.name }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ order.address }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ order.city }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ order.phone }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Id</th>
                                    <td>{{ order.paymentId }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Link</th>
                                    <td><a href=\"{{order.paymentLink}}\">Lien de paiement</a></td>
                                </tr>
                                <tr>
                                    <th>Is Paid</th>
                                    <td>{{ order.isPaid ? 'Yes': 'No' }}</td>
                                </tr>

                                <form action=\"{{ path('admin_orders_update',{'id': order.id}) }}\" method=\"post\">
                                    <tr>
                                        <th>Shipinfo</th>
                                        <td> <textarea class=\"form-control\" name=\"shipinfo\" cols=\"100\" rows=\"3\">{{ order.shipinfo }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Admin Note</th>
                                        <td> <textarea class=\"form-control\" name=\"note\" cols=\"100\" rows=\"3\">{{ order.note }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <select class=\"form-control\" name=\"status\">
                                                <option>{{ order.status }}</option>
                                                <option>Accepted</option>
                                                <option>InShipping</option>
                                                <option>Canceled</option>
                                                <option>Completed</option>
                                            </select>
                                            <input class=\"btn btn-success\" type=\"submit\" value=\"Update\">
                                        </td>
                                    </tr>
                                </form>
                                </tbody>
                            </table>

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {% set total = 0 %}
                                    {% for rs in orderdetail %}
                                        <tr>
                                            <td>{{ rs.id }}</td>
                                            <td>{{ rs.name }}</td>
                                            <td>{{ rs.price }}</td>
                                            <td>{{ rs.quantity }}</td>
                                            <td>{{ rs.amount }}</td>
                                            <td>{{ rs.status }}</td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"5\">Order Detail</td>
                                        </tr>
                                    {% endfor %}
                                    <tr>
                                        <td colspan=\"5\"><b>Total à payer : {{ order.amount }}</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href=\"{{ path('admin_orders_index', {'slug': 'new'}) }} \" class=\"btn btn-info\">back to list</a>
                    </div>
                    
                </div>


 {% endblock %}


", "admin/orders/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/orders/show.html.twig");
    }
}
