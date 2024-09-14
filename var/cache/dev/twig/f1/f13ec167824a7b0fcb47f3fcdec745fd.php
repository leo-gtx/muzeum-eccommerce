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

/* user/usermenu.html.twig */
class __TwigTemplate_647eb2945dcdc0fa667963840a4062b9 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        // line 1
        yield "<section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"left-sidebar\">
                <div class=\"brands_products\"><!--brands_products-->
                    <h2>User Menu</h2>
                    <div class=\"brands-name\">
                        <ul class=\"nav nav-pills nav-stacked\">

                            
                            ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "image", [], "any", false, false, false, 12)) {
            // line 13
            yield "                                   <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "image", [], "any", false, false, false, 13))), "html", null, true);
            yield "\"  style=\"height:90px; -webkit-border-radius: 90px; \" alt=\"User Image\" />
                                    ";
        } else {
            // line 15
            yield "                                    <i class=\"fa fa-user\" ></i>
                                    ";
        }
        // line 17
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "surname", [], "any", false, false, false, 17), "html", null, true);
        yield "
                            <li><a href=\"/user\"> <span class=\"pull-right\"></span>My Profile</a></li>
                            <li><a href=\"/userpanel/edit\"> <span class=\"pull-right\"></span>Edit Profile</a></li>
                            <li><a href=\"/user/product\"> <span class=\"pull-right\"></span>My Products</a></li>
                            <li><a href=\"/user/comments\"> <span class=\"pull-right\"></span>My Comments</a></li>
                            <li><a href=\"/orders\"> <span class=\"pull-right\"></span>My Order</a></li>
                            <li><a href=\"/shopcart\"> <span class=\"pull-right\"></span>My Cart</a></li>
                            <li><a href=\"/logout\"> <span class=\"pull-right\"></span>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/usermenu.html.twig";
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
        return array (  73 => 17,  69 => 15,  63 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"left-sidebar\">
                <div class=\"brands_products\"><!--brands_products-->
                    <h2>User Menu</h2>
                    <div class=\"brands-name\">
                        <ul class=\"nav nav-pills nav-stacked\">

                            
                            {% if app.user.image %}
                                   <img src=\"{{asset('/uploads/images/' ~ app.user.image)}}\"  style=\"height:90px; -webkit-border-radius: 90px; \" alt=\"User Image\" />
                                    {% else %}
                                    <i class=\"fa fa-user\" ></i>
                                    {% endif %}
                            {{ app.user.name }} {{ app.user.surname }}
                            <li><a href=\"/user\"> <span class=\"pull-right\"></span>My Profile</a></li>
                            <li><a href=\"/userpanel/edit\"> <span class=\"pull-right\"></span>Edit Profile</a></li>
                            <li><a href=\"/user/product\"> <span class=\"pull-right\"></span>My Products</a></li>
                            <li><a href=\"/user/comments\"> <span class=\"pull-right\"></span>My Comments</a></li>
                            <li><a href=\"/orders\"> <span class=\"pull-right\"></span>My Order</a></li>
                            <li><a href=\"/shopcart\"> <span class=\"pull-right\"></span>My Cart</a></li>
                            <li><a href=\"/logout\"> <span class=\"pull-right\"></span>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>", "user/usermenu.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/user/usermenu.html.twig");
    }
}
