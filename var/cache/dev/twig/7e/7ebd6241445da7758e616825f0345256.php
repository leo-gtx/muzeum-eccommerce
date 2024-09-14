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

/* userpanel/show.html.twig */
class __TwigTemplate_08b83666409241d2b39942d8644fb114 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userpanel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userpanel/show.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "userpanel/show.html.twig", 1);
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
        yield "    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">
                        ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/usermenu.html.twig");
        yield "
                    </div>
                </div>
                <div class=\"col-sm-9 padding-right\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->

                            <h3><a href=\"#\">Üye Bilgileri</a></h3>
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>";
        // line 32
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32)), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "password", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Surname</th>
                                    <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "surname", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "image", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "status", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th>
                                    <td>";
        // line 56
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "createdAt", [], "any", false, false, false, 56)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "createdAt", [], "any", false, false, false, 56), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <td>";
        // line 60
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "updatedAt", [], "any", false, false, false, 60)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "updatedAt", [], "any", false, false, false, 60), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn btn-success\">Edit Profile</a>
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
        return "userpanel/show.html.twig";
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
        return array (  188 => 64,  181 => 60,  174 => 56,  167 => 52,  160 => 48,  153 => 44,  146 => 40,  139 => 36,  132 => 32,  125 => 28,  118 => 24,  102 => 11,  95 => 6,  85 => 5,  64 => 3,  41 => 1,);
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

                            <h3><a href=\"#\">Üye Bilgileri</a></h3>
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ app.user.id }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ app.user.email }}</td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>{{ app.user.roles ? app.user.roles|json_encode : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>{{ app.user.password }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ app.user.name }}</td>
                                </tr>
                                <tr>
                                    <th>Surname</th>
                                    <td>{{ app.user.surname }}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>{{ app.user.image }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ app.user.status }}</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th>
                                    <td>{{ app.user.createdAt ? app.user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <td>{{ app.user.updatedAt ? app.user.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href=\"{{ path('user_edit', {'id': app.user.id}) }}\" class=\"btn btn-success\">Edit Profile</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "userpanel/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/userpanel/show.html.twig");
    }
}
