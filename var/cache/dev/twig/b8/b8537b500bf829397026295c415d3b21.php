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

/* /admin/event/show.html.twig */
class __TwigTemplate_e4a9e440957a731ae4407521b9927cdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/event/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "/admin/event/show.html.twig", 1);
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

        yield "Event List";
        
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
        yield "    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowsURL, windowName, windowFeatures ) { window.open(windowsURL, windowName,windowFeatures); }
    </SCRIPT>


                <!-- BEGIN: Subheader -->
                <div class=\"m-subheader \">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"mr-auto\">
                            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_new");
        yield "\" class=\"btn btn-success\">Create New Event</a>
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
                                        Event List
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
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "title", [], "any", false, false, false, 62), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Discount</th>
                                    <td>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "discount", [], "any", false, false, false, 70), "html", null, true);
        yield "%</td>
                                </tr>
                                <tr>
                                    <th>Products</th>
                                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 74, $this->source); })()), "products", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 75
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">
                                        <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                                    </a>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                </tr>
                                
                                <tr>
                                    <th>Image</th>
                                    <td><img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83))), "html", null, true);
        yield "\" height=\"100\"> </td>
                                </tr>

                                <tr>
                                    <th>Start Date</th>
                                    <td>";
        // line 88
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "startAt", [], "any", false, false, false, 88)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "startAt", [], "any", false, false, false, 88), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>

                                <tr>
                                    <th>End Date</th>
                                    <td>";
        // line 93
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 93, $this->source); })()), "endAt", [], "any", false, false, false, 93)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 93, $this->source); })()), "endAt", [], "any", false, false, false, 93), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                        
                                <tr>
                                    <th>Created_at</th>
                                    <td>";
        // line 98
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 98, $this->source); })()), "createdAt", [], "any", false, false, false, 98)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 98, $this->source); })()), "createdAt", [], "any", false, false, false, 98), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <td>";
        // line 102
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "updatedAt", [], "any", false, false, false, 102)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "updatedAt", [], "any", false, false, false, 102), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_index");
        yield "\" class=\"btn btn-info\">Back to List</a>

                            <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
        yield "\" class=\"btn btn-success\">Edit</a>

                            ";
        // line 111
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/event/_delete_form.html.twig");
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
        return "/admin/event/show.html.twig";
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
        return array (  252 => 111,  247 => 109,  242 => 107,  234 => 102,  227 => 98,  219 => 93,  211 => 88,  203 => 83,  197 => 79,  188 => 76,  183 => 75,  179 => 74,  172 => 70,  165 => 66,  158 => 62,  151 => 58,  105 => 15,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Event List{% endblock %}

{% block body %}
    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowsURL, windowName, windowFeatures ) { window.open(windowsURL, windowName,windowFeatures); }
    </SCRIPT>


                <!-- BEGIN: Subheader -->
                <div class=\"m-subheader \">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"mr-auto\">
                            <a href=\"{{ path('admin_event_new') }}\" class=\"btn btn-success\">Create New Event</a>
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
                                        Event List
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-portlet__body\">
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ event.id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ event.title }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ event.description }}</td>
                                </tr>
                                <tr>
                                    <th>Discount</th>
                                    <td>{{ event.discount }}%</td>
                                </tr>
                                <tr>
                                    <th>Products</th>
                                    {% for product in event.products %}
                                    <a href=\"{{path('admin_product_show', {'id': product.id})}}\">
                                        <td>{{ product.title }}</td>
                                    </a>
                                    {% endfor %}
                                </tr>
                                
                                <tr>
                                    <th>Image</th>
                                    <td><img src=\"{{ asset('uploads/images/' ~ event.image) }}\" height=\"100\"> </td>
                                </tr>

                                <tr>
                                    <th>Start Date</th>
                                    <td>{{ event.startAt ? event.startAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>

                                <tr>
                                    <th>End Date</th>
                                    <td>{{ event.endAt ? event.endAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                        
                                <tr>
                                    <th>Created_at</th>
                                    <td>{{ event.createdAt ? event.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <td>{{ event.updatedAt ? event.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"{{ path('admin_event_index') }}\" class=\"btn btn-info\">Back to List</a>

                            <a href=\"{{ path('admin_event_edit', {'id': event.id}) }}\" class=\"btn btn-success\">Edit</a>

                            {{ include('admin/event/_delete_form.html.twig') }}


                        </div>
                    </div>
                </div>

{% endblock %}
", "/admin/event/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/event/show.html.twig");
    }
}
