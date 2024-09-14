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

/* admin/admin/index.html.twig */
class __TwigTemplate_01d3bc161b48bfd2daea0cffd62a113d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/admin/index.html.twig", 1);
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

        yield "Dashboard";
        
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
        yield "<!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Dashboard</h3>
                <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                    <li class=\"m-nav__item m-nav__item--home\">
                        <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                            <i class=\"m-nav__link-icon la la-home\"></i>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"#\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Dashboard</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class=\"m-content\">
         <div class=\"m-portlet\">
            <div class=\"m-portlet__head\">
                <div class=\"m-portlet__head-caption\">
                    <div class=\"m-portlet__head-title\">
                        <h3 class=\"m-portlet__head-text\">
                            Insights
                        </h3>
                        
                    </div>
                </div>
                
            </div>
            <div class=\"m-portlet__body\">
            <div class=\"row d-flex justify-content-center my-2\">
                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-currency-usd widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Revenue\">Revenue</h5>
                                            <h3 class=\"mt-3 mb-3\">XAF ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRevenue"]) || array_key_exists("totalRevenue", $context) ? $context["totalRevenue"] : (function () { throw new RuntimeError('Variable "totalRevenue" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 7.00%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-currency-usd widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Potential Revenue\">Potential Revenue</h5>
                                            <h3 class=\"mt-3 mb-3\">XAF ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPotentialRevenue"]) || array_key_exists("totalPotentialRevenue", $context) ? $context["totalPotentialRevenue"] : (function () { throw new RuntimeError('Variable "totalPotentialRevenue" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 7.00%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->  
                                
                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-currency-usd widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Lost Revenue\">Lost Revenue</h5>
                                            <h3 class=\"mt-3 mb-3\">XAF ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalLostRevenue"]) || array_key_exists("totalLostRevenue", $context) ? $context["totalLostRevenue"] : (function () { throw new RuntimeError('Variable "totalLostRevenue" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 7.00%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col--> 
                </div>
                <div class=\"row d-flex justify-content-center my-2\">
                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-account-multiple widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Number of Customers\">Customers</h5>
                                            <h3 class=\"mt-3 mb-3\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 99, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-success me-2\"><i class=\"mdi mdi-arrow-up-bold\"></i> 5.27%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-cart-plus widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Number of Orders\">Orders</h5>
                                            <h3 class=\"mt-3 mb-3\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 115, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 1.08%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class=\"col-sm-3\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-cart-plus widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Number of Abandonned Carts\">Abandonned Carts</h5>
                                            <h3 class=\"mt-3 mb-3\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["abandonnedCarts"]) || array_key_exists("abandonnedCarts", $context) ? $context["abandonnedCarts"] : (function () { throw new RuntimeError('Variable "abandonnedCarts" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 1.08%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"m-portlet__head\">
                        <div class=\"m-portlet__head-caption\">
                            <div class=\"m-portlet__head-title\">
                                <h3 class=\"m-portlet__head-text\">
                                    Revenue Stats
                                </h3>
                        
                                    <form class=\"d-flex justify-content-end\" action=\"get\">
                                        <div class=\"input-group\">
                                            <input type=\"date\" class=\"form-control\" name=\"date-range\">
                                            <button class=\"btn btn-info\">
                                                <i class=\"la la-calendar font-13\"></i>
                                            </button>
                                        </div>
                                    
                                    </form>
                            
                            </div>
                        </div>
                    </div>
                    <canvas class=\"my-4 w-100 chartjs-render-monitor\" id=\"myChart\" width=\"677\" height=\"285\" style=\"display: block; width: 677px; height: 285px;\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js\"></script>
<script>
      var ctx = document.getElementById(\"myChart\");
      var monthlyRevenue = Object.values(JSON.parse('";
        // line 171
        yield json_encode((isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 171, $this->source); })()));
        yield "'));
      var monthlyPotentialRevenue = Object.values(JSON.parse('";
        // line 172
        yield json_encode((isset($context["monthlyPotentialRevenue"]) || array_key_exists("monthlyPotentialRevenue", $context) ? $context["monthlyPotentialRevenue"] : (function () { throw new RuntimeError('Variable "monthlyPotentialRevenue" does not exist.', 172, $this->source); })()));
        yield "'));
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
          datasets: [{
            data: monthlyPotentialRevenue,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#F2587A',
            borderWidth: 4,
            pointBackgroundColor: '#F2587A',
            label: 'Potential Revenue'
          },
          {
            data: monthlyRevenue,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#5BD8AA',
            borderWidth: 4,
            pointBackgroundColor: '#5BD8AA',
            label: 'Earned Revenue'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: true,
          }
        }
      });
    </script>
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
        return "admin/admin/index.html.twig";
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
        return array (  283 => 172,  279 => 171,  236 => 131,  217 => 115,  198 => 99,  178 => 82,  159 => 66,  140 => 50,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
<!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Dashboard</h3>
                <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                    <li class=\"m-nav__item m-nav__item--home\">
                        <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                            <i class=\"m-nav__link-icon la la-home\"></i>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"#\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Dashboard</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class=\"m-content\">
         <div class=\"m-portlet\">
            <div class=\"m-portlet__head\">
                <div class=\"m-portlet__head-caption\">
                    <div class=\"m-portlet__head-title\">
                        <h3 class=\"m-portlet__head-text\">
                            Insights
                        </h3>
                        
                    </div>
                </div>
                
            </div>
            <div class=\"m-portlet__body\">
            <div class=\"row d-flex justify-content-center my-2\">
                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-currency-usd widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Revenue\">Revenue</h5>
                                            <h3 class=\"mt-3 mb-3\">XAF {{totalRevenue}}</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 7.00%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-currency-usd widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Potential Revenue\">Potential Revenue</h5>
                                            <h3 class=\"mt-3 mb-3\">XAF {{totalPotentialRevenue}}</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 7.00%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->  
                                
                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-currency-usd widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Lost Revenue\">Lost Revenue</h5>
                                            <h3 class=\"mt-3 mb-3\">XAF {{totalLostRevenue}}</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 7.00%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col--> 
                </div>
                <div class=\"row d-flex justify-content-center my-2\">
                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-account-multiple widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Number of Customers\">Customers</h5>
                                            <h3 class=\"mt-3 mb-3\">{{customers}}</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-success me-2\"><i class=\"mdi mdi-arrow-up-bold\"></i> 5.27%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class=\"col-sm-4\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-cart-plus widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Number of Orders\">Orders</h5>
                                            <h3 class=\"mt-3 mb-3\">{{orders}}</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 1.08%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class=\"col-sm-3\">
                                    <div class=\"card widget-flat\">
                                        <div class=\"card-body\">
                                            <div class=\"float-end\">
                                                <i class=\"mdi mdi-cart-plus widget-icon\"></i>
                                            </div>
                                            <h5 class=\"text-muted fw-normal mt-0\" title=\"Number of Abandonned Carts\">Abandonned Carts</h5>
                                            <h3 class=\"mt-3 mb-3\">{{abandonnedCarts}}</h3>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"text-danger me-2\"><i class=\"mdi mdi-arrow-down-bold\"></i> 1.08%</span>
                                                <span class=\"text-nowrap\">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"m-portlet__head\">
                        <div class=\"m-portlet__head-caption\">
                            <div class=\"m-portlet__head-title\">
                                <h3 class=\"m-portlet__head-text\">
                                    Revenue Stats
                                </h3>
                        
                                    <form class=\"d-flex justify-content-end\" action=\"get\">
                                        <div class=\"input-group\">
                                            <input type=\"date\" class=\"form-control\" name=\"date-range\">
                                            <button class=\"btn btn-info\">
                                                <i class=\"la la-calendar font-13\"></i>
                                            </button>
                                        </div>
                                    
                                    </form>
                            
                            </div>
                        </div>
                    </div>
                    <canvas class=\"my-4 w-100 chartjs-render-monitor\" id=\"myChart\" width=\"677\" height=\"285\" style=\"display: block; width: 677px; height: 285px;\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js\"></script>
<script>
      var ctx = document.getElementById(\"myChart\");
      var monthlyRevenue = Object.values(JSON.parse('{{ monthlyRevenue | json_encode() | raw}}'));
      var monthlyPotentialRevenue = Object.values(JSON.parse('{{ monthlyPotentialRevenue | json_encode() | raw}}'));
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
          datasets: [{
            data: monthlyPotentialRevenue,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#F2587A',
            borderWidth: 4,
            pointBackgroundColor: '#F2587A',
            label: 'Potential Revenue'
          },
          {
            data: monthlyRevenue,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#5BD8AA',
            borderWidth: 4,
            pointBackgroundColor: '#5BD8AA',
            label: 'Earned Revenue'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: true,
          }
        }
      });
    </script>
{% endblock %}", "admin/admin/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/admin/index.html.twig");
    }
}
