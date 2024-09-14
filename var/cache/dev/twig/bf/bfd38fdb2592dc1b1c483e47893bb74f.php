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

/* user/index.html.twig */
class __TwigTemplate_e4d20723cb86aa2ba6d35074d501d29a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/index.html.twig", 1);
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

        yield "User profile";
        
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
                <div class=\"col-sm-9 padding-right\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->
                            <h1>User index</h1>

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Password</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            yield "                                    <tr>
                                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                        <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                                        <td>";
            // line 37
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 37)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 37)), "html", null, true)) : (yield ""));
            yield "</td>
                                        <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                        <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                        <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                        <td>";
            // line 43
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 43)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 43), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                                        <td>";
            // line 44
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "updatedAt", [], "any", false, false, false, 44)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "updatedAt", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                                        <td>
                                            <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">show</a>
                                            <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\">edit</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            yield "                                    <tr>
                                        <td colspan=\"11\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                                </tbody>
                            </table>

                            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        yield "\">Create new</a>
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
        return "user/index.html.twig";
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
        return array (  199 => 58,  194 => 55,  185 => 51,  176 => 47,  172 => 46,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  128 => 34,  123 => 33,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}User profile{% endblock %}

{% block body %}

    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9 padding-right\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->
                            <h1>User index</h1>

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Password</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                                        <td>{{ user.password }}</td>
                                        <td>{{ user.name }}</td>
                                        <td>{{ user.surname }}</td>
                                        <td>{{ user.image }}</td>
                                        <td>{{ user.status }}</td>
                                        <td>{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                        <td>{{ user.updatedAt ? user.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                                        <td>
                                            <a href=\"{{ path('user_show', {'id': user.id}) }}\">show</a>
                                            <a href=\"{{ path('user_edit', {'id': user.id}) }}\">edit</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"11\">no records found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                            <a href=\"{{ path('user_new') }}\">Create new</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "user/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/user/index.html.twig");
    }
}
