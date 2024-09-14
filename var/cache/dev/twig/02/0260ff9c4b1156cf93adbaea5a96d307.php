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

/* admin/product/index.html.twig */
class __TwigTemplate_3af9299a63a38abb956c59b58204d170 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/product/index.html.twig", 1);
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

        yield "Product index";
        
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
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        yield "\" class=\"btn btn-success\">Create New Product</a>
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
                            <span class=\"m-nav__link-text\">Product</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
    <!-- END: Subheader -->
    <div class=\"d-flex m-content\">

        <!--begin::Portlet-->
        <div class=\"m-portlet\">
            <div class=\"m-portlet__head\">
                <div class=\"m-portlet__head-caption\">
                    <div class=\"m-portlet__head-title\">
                        <h3 class=\"m-portlet__head-text\">
                            Product List
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Amount</th>
                       
                        <th>Price</th>
                        <th>Type</th>
                        <th>Year</th>
                        <th>User</th>
                        <th>I.Gallery</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 78, $this->source); })()));
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
            // line 79
            yield "                        <tr>
                            <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                            <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "catname", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                            <td nowrap>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                            <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "keywords", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                            <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                            <td><img src=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 85))), "html", null, true);
            yield "\" height=\"40\"> </td>
                            <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                         
                            <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                            <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                            <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "year", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                            
                            <td>
                                <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "user_id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\">
                                    ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 94), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "surname", [], "any", false, false, false, 94), "html", null, true);
            yield "
                                </a>
                            </td>
                            <td>
                                <a href=\"javascript:openWin('";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                    <img src=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            yield "/gallery.png\" height=\"40\">
                                </a>
                            </td>
                            <td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
                            <td >
                                <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Show</a>

                            </td>
                            <td>
                                <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Edit</a>
                            </td>
                            <td>
                                ";
            // line 111
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/product/_delete_form.html.twig");
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
            // line 115
            yield "                        <tr>
                            <td colspan=\"15\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
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
        return "admin/product/index.html.twig";
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
        return array (  305 => 119,  296 => 115,  279 => 111,  273 => 108,  266 => 104,  261 => 102,  255 => 99,  251 => 98,  242 => 94,  238 => 93,  232 => 90,  228 => 89,  224 => 88,  219 => 86,  215 => 85,  211 => 84,  207 => 83,  203 => 82,  199 => 81,  195 => 80,  192 => 79,  174 => 78,  132 => 39,  106 => 16,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Product index{% endblock %}

{% block body %}
    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowsURL, windowName, windowFeatures ) { window.open(windowsURL, windowName,windowFeatures); }
    </SCRIPT>


    <!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                
                <a href=\"{{ path('admin_product_new') }}\" class=\"btn btn-success\">Create New Product</a>
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
                            <span class=\"m-nav__link-text\">Product</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{ include('messages.html.twig') }}
    <!-- END: Subheader -->
    <div class=\"d-flex m-content\">

        <!--begin::Portlet-->
        <div class=\"m-portlet\">
            <div class=\"m-portlet__head\">
                <div class=\"m-portlet__head-caption\">
                    <div class=\"m-portlet__head-title\">
                        <h3 class=\"m-portlet__head-text\">
                            Product List
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Amount</th>
                       
                        <th>Price</th>
                        <th>Type</th>
                        <th>Year</th>
                        <th>User</th>
                        <th>I.Gallery</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for product in products %}
                        <tr>
                            <td>{{ product.id }}</td>
                            <td>{{ product.catname }}</td>
                            <td nowrap>{{ product.title }}</td>
                            <td>{{ product.keywords }}</td>
                            <td>{{ product.description }}</td>
                            <td><img src=\"{{ asset('uploads/images/' ~ product.image) }}\" height=\"40\"> </td>
                            <td>{{ product.amount }}</td>
                         
                            <td>{{ product.price }}</td>
                            <td>{{ product.type }}</td>
                            <td>{{ product.year }}</td>
                            
                            <td>
                                <a href=\"{{ path('admin_user_show', {'id': product.user_id}) }}\">
                                    {{ product.name }} {{ product.surname }}
                                </a>
                            </td>
                            <td>
                                <a href=\"javascript:openWin('{{ path('admin_image_new', {'id': product.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                    <img src=\"{{ asset('assets/admin/img') }}/gallery.png\" height=\"40\">
                                </a>
                            </td>
                            <td>{{ product.status }}</td>
                            <td >
                                <a href=\"{{ path('admin_product_show', {'id': product.id}) }}\" class=\"btn btn-info\">Show</a>

                            </td>
                            <td>
                                <a href=\"{{ path('admin_product_edit', {'id': product.id}) }}\" class=\"btn btn-info\">Edit</a>
                            </td>
                            <td>
                                {{ include('admin/product/_delete_form.html.twig') }}
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

{% endblock %}




", "admin/product/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/product/index.html.twig");
    }
}
