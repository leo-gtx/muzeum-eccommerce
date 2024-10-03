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

/* user/comments.html.twig */
class __TwigTemplate_28b1d1ca1b8a5dc7b292694fda9e50c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/comments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/comments.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/comments.html.twig", 1);
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
        yield "<!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Mes commentaires</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Mes commentaires</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <section>
        <div class=\"container\">
            <div class=\"row\">
               
                <div class=\"col-sm-12\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Objet</th>
                                    <th>Commentaire</th>
                                    <th>Produit</th>
                                    <th>Créé le</th>
                                    <th>Note</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 42
            yield "                                    <tr>
                                        <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "subject", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                        <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                        <td nowrap><a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "productid", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 45), "html", null, true);
            yield "</a></td>
                                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 46), "d M Y H:i:s"), "html", null, true);
            yield "</td>
                                        <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                        <td>
                                            <form method=\"post\" action=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Voulez vous supprimez ce commentaire?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51))), "html", null, true);
            yield "\">
                                                <button class=\"genric-btn danger circle\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            yield "                                    <tr>
                                        <td colspan=\"10\">Aucun commentaire</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return "user/comments.html.twig";
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
        return array (  191 => 61,  182 => 57,  171 => 51,  166 => 49,  161 => 47,  157 => 46,  151 => 45,  147 => 44,  143 => 43,  140 => 42,  135 => 41,  104 => 13,  95 => 6,  85 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }} Profile{% endblock %}

{% block body %}
<!-- Start Banner Area -->
    <section class=\"banner-area organic-breadcrumb\">
        <div class=\"container\">
            <div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
                <div class=\"col-first\">
                    <h1>Mes commentaires</h1>
                    <nav class=\"d-flex align-items-center\">
                        <a href=\"{{path('home')}}\">Accueil<span class=\"lnr lnr-arrow-right\"></span></a>
                        <a href=\"#\">Mes commentaires</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <section>
        <div class=\"container\">
            <div class=\"row\">
               
                <div class=\"col-sm-12\">

                    <div class=\"left-sidebar\">
                        <div class=\"brands_products\"><!--brands_products-->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Objet</th>
                                    <th>Commentaire</th>
                                    <th>Produit</th>
                                    <th>Créé le</th>
                                    <th>Note</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for comment in comments %}
                                    <tr>
                                        <td>{{ comment.subject }}</td>
                                        <td>{{ comment.comment }}</td>
                                        <td nowrap><a href=\"{{ path('product_show', {'id': comment.productid}) }}\">{{ comment.title }}</a></td>
                                        <td>{{ comment.created_at|date('d M Y H:i:s') }}</td>
                                        <td>{{ comment.rate }}</td>
                                        <td>
                                            <form method=\"post\" action=\"{{path('user_delete_comment',{'id':comment.id})}}\" onsubmit=\"return confirm('Voulez vous supprimez ce commentaire?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ app.user.id) }}\">
                                                <button class=\"genric-btn danger circle\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"10\">Aucun commentaire</td>
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
", "user/comments.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/user/comments.html.twig");
    }
}
