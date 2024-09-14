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

/* messages.html.twig */
class __TwigTemplate_f92e0c82c364f50e847e7eaae0add66f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "flashbag", [], "any", false, false, false, 1), "all", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 3
                yield "        ";
                if (($context["label"] == "success")) {
                    // line 4
                    yield "            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">x</button>
                <h4><i class=\"icon fa fa-check\"></i> Info!</h4>
                ";
                    // line 7
                    yield $context["flash"];
                    yield "
            </div>
        ";
                } elseif ((                // line 9
$context["label"] == "error")) {
                    // line 10
                    yield "            <div class=\"alert alert-danger\">
                <strong>Error!</strong>";
                    // line 11
                    yield $context["flash"];
                    yield "
            </div>
        ";
                } elseif ((                // line 13
$context["label"] == "info")) {
                    // line 14
                    yield "            <div class=\"alert alert-danger\">
                <strong>Error!</strong>";
                    // line 15
                    yield $context["flash"];
                    yield "
            </div>
        ";
                } elseif ((                // line 17
$context["label"] == "warning")) {
                    // line 18
                    yield "            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                <h4><i class=\"icon fa fa-warning\"></i> Attention!</h4>
                ";
                    // line 21
                    yield $context["flash"];
                    yield "
            </div>
        ";
                }
                // line 24
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "messages.html.twig";
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
        return array (  103 => 24,  97 => 21,  92 => 18,  90 => 17,  85 => 15,  82 => 14,  80 => 13,  75 => 11,  72 => 10,  70 => 9,  65 => 7,  60 => 4,  57 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for label, flashes in app.session.flashbag.all %}
    {% for flash in flashes %}
        {% if ( label == 'success') %}
            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">x</button>
                <h4><i class=\"icon fa fa-check\"></i> Info!</h4>
                {{ flash|raw }}
            </div>
        {% elseif ( label == 'error') %}
            <div class=\"alert alert-danger\">
                <strong>Error!</strong>{{ flash|raw }}
            </div>
        {% elseif ( label == 'info') %}
            <div class=\"alert alert-danger\">
                <strong>Error!</strong>{{ flash|raw }}
            </div>
        {% elseif ( label == 'warning') %}
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                <h4><i class=\"icon fa fa-warning\"></i> Attention!</h4>
                {{ flash|raw }}
            </div>
        {% endif %}
    {% endfor %}
{% endfor %}", "messages.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/messages.html.twig");
    }
}
