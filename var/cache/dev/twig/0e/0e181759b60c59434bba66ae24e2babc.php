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

/* product/index.html.twig */
class __TwigTemplate_1a64860d5a73d5a3666b97a31bde5955 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "product/index.html.twig", 1);
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
        yield "    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowsURL, windowName, windowFeatures ) { window.open(windowsURL, windowName,windowFeatures); }
    </SCRIPT>
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">
                        ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/usermenu.html.twig");
        yield "
                    </div>
                </div>
                <div class=\"col-sm-9 padding-right\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->
                            <h3><a href=\"#\">My Product List</a></h3>
                            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_new");
        yield "\" class=\"btn btn-success\">Create New Product</a>

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Amount</th>
                                    <th>Detail</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Year</th>
                                    <th>I.Gallery</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            yield "                                    <tr>
                                        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                        <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "keywords", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                        <td><img src=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 49))), "html", null, true);
            yield "\" height=\"40\"> </td>
                                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "detail", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "year", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                        <td>
                                            <a href=\"javascript:openWin('";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_image_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                <img src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            yield "/gallery.png\" height=\"40\">
                                            </a>
                                        </td>
                                        <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                                        <td >
                                            <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Show</a>

                                        </td>
                                        <td>
                                            <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-success\">Edit</a>
                                        </td>
                                        <td>
                                            ";
            // line 69
            yield Twig\Extension\CoreExtension::include($this->env, $context, "product/_delete_form.html.twig");
            yield "
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 73
            yield "                                    <tr>
                                        <td colspan=\"15\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                                </tbody>
                            </table>

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
        return "product/index.html.twig";
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
        return array (  256 => 77,  247 => 73,  230 => 69,  224 => 66,  217 => 62,  212 => 60,  206 => 57,  202 => 56,  197 => 54,  193 => 53,  189 => 52,  185 => 51,  181 => 50,  177 => 49,  173 => 48,  169 => 47,  165 => 46,  161 => 45,  158 => 44,  140 => 43,  116 => 22,  105 => 14,  95 => 6,  85 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }} Profile{% endblock %}

{% block body %}
    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowsURL, windowName, windowFeatures ) { window.open(windowsURL, windowName,windowFeatures); }
    </SCRIPT>
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
                            <h3><a href=\"#\">My Product List</a></h3>
                            <a href=\"{{ path('user_product_new') }}\" class=\"btn btn-success\">Create New Product</a>

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Amount</th>
                                    <th>Detail</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Year</th>
                                    <th>I.Gallery</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for product in products %}
                                    <tr>
                                        <td>{{ product.id }}</td>
                                        <td>{{ product.title }}</td>
                                        <td>{{ product.keywords }}</td>
                                        <td>{{ product.description }}</td>
                                        <td><img src=\"{{ asset('uploads/images/' ~ product.image) }}\" height=\"40\"> </td>
                                        <td>{{ product.amount }}</td>
                                        <td>{{ product.detail }}</td>
                                        <td>{{ product.price }}</td>
                                        <td>{{ product.type }}</td>
                                        <td>{{ product.year }}</td>
                                        <td>
                                            <a href=\"javascript:openWin('{{ path('user_image_new', {'id': product.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                <img src=\"{{ asset('assets/admin/img') }}/gallery.png\" height=\"40\">
                                            </a>
                                        </td>
                                        <td>{{ product.status }}</td>
                                        <td >
                                            <a href=\"{{ path('user_product_show', {'id': product.id}) }}\" class=\"btn btn-info\">Show</a>

                                        </td>
                                        <td>
                                            <a href=\"{{ path('user_product_edit', {'id': product.id}) }}\" class=\"btn btn-success\">Edit</a>
                                        </td>
                                        <td>
                                            {{ include('product/_delete_form.html.twig') }}
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"15\">no records found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "product/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/product/index.html.twig");
    }
}
