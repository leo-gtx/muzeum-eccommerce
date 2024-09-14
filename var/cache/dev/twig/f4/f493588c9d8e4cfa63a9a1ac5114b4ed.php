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

/* home/blackfriday.html.twig */
class __TwigTemplate_37d39f0001c5b833a0846db92544eb27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blackfriday.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blackfriday.html.twig"));

        // line 1
        yield "
<!-- Start exclusive deal Area -->
\t<section class=\"exclusive-deal-area\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-left\" style=\"background-image: url('";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "image", [], "any", false, false, false, 6))), "html", null, true);
        yield "')\">
\t\t\t\t\t<div class=\"row clock_sec clockdiv\" id=\"clockdiv";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<h1>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
\t\t\t\t\t\t\t<p>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"row clock-wrap\">
\t\t\t\t\t\t\t\t<div class=\"col clockinner1 clockinner\">
\t\t\t\t\t\t\t\t\t<h1 class=\"days\">1</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Jours</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t<h1 class=\"hours\">00</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Heure</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t<h1 class=\"minutes\">00</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Min</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t<h1 class=\"seconds\">00</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Sec</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-right\">
\t\t\t\t\t<div class=\"active-exclusive-product-slider\">
\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 36, $this->source); })()), "products", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 37
            yield "\t\t\t\t\t\t
\t\t\t\t\t\t<!-- single exclusive carousel -->
\t\t\t\t\t\t<div class=\"single-exclusive-slider\">
\t\t\t\t\t\t\t<a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<div class=\"scene\">
\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 43))), "html", null, true);
            yield "');\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 43), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 45), "html", null, true);
            yield "</span></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t<h6>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52), "html", null, true);
            yield " XAF</h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "originalPrice", [], "any", false, false, false, 53), "html", null, true);
            yield " XAF</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 55), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\"><span class=\"ti-bag\"></span></a>
\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Ajouter au panier</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t<script src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/js/countdown.js"), "html", null, true);
        yield "\"></script>
\t\t<script>
\t\t\t// Parse the event start and end times
\t\t\tvar startAt = new Date(\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 73, $this->source); })()), "startAt", [], "any", false, false, false, 73), "Y-m-d H:i:s"), "html", null, true);
        yield "\");
\t\t\tvar endAt = new Date(\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 74, $this->source); })()), "endAt", [], "any", false, false, false, 74), "Y-m-d H:i:s"), "html", null, true);
        yield "\");

\t\t\t// Calculate the total event duration (in milliseconds)
\t\t\tvar totalDuration = endAt - startAt;

\t\t\t// Calculate the time elapsed since the event started
\t\t\tvar now = new Date();
\t\t\tvar timeElapsed = now - startAt;

\t\t\t// Calculate the remaining time by subtracting the elapsed time from the total duration
\t\t\tvar remainingTime = totalDuration - timeElapsed;

\t\t\t// Set the deadline to the current time plus the remaining time
\t\t\tvar deadline = new Date(now.getTime() + remainingTime);
\t\t\tinitializeClock('clockdiv";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
        yield "', deadline);
\t\t</script>

\t<!-- End exclusive deal Area -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/blackfriday.html.twig";
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
        return array (  194 => 88,  177 => 74,  173 => 73,  167 => 70,  160 => 65,  147 => 58,  141 => 55,  136 => 53,  132 => 52,  127 => 50,  119 => 45,  112 => 43,  106 => 40,  101 => 37,  97 => 36,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!-- Start exclusive deal Area -->
\t<section class=\"exclusive-deal-area\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-left\" style=\"background-image: url('{{ asset('uploads/images/' ~ event.image) }}')\">
\t\t\t\t\t<div class=\"row clock_sec clockdiv\" id=\"clockdiv{{event.id}}\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<h1>{{event.title}}</h1>
\t\t\t\t\t\t\t<p>{{event.description}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"row clock-wrap\">
\t\t\t\t\t\t\t\t<div class=\"col clockinner1 clockinner\">
\t\t\t\t\t\t\t\t\t<h1 class=\"days\">1</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Jours</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t<h1 class=\"hours\">00</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Heure</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t<h1 class=\"minutes\">00</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Min</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t<h1 class=\"seconds\">00</h1>
\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Sec</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-right\">
\t\t\t\t\t<div class=\"active-exclusive-product-slider\">
\t\t\t\t\t{% for product in event.products %}
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- single exclusive carousel -->
\t\t\t\t\t\t<div class=\"single-exclusive-slider\">
\t\t\t\t\t\t\t<a href=\"{{path('product_show', {'id':product.id})}}\">
\t\t\t\t\t\t\t\t<div class=\"scene\">
\t\t\t\t\t\t\t\t\t<div class=\"dvd-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cover front\" style=\"background-image: url('{{ asset('uploads/images/' ~ product.image) }}');\">{{product.slug}}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cover back\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"spine\"><span class=\"vertical-text\">{{product.title}}</span></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t<a href=\"{{path('product_show', {'id':product.id})}}\">
\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t<h6>{{product.price }} XAF</h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">{{product.originalPrice}} XAF</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4>{{product.title}}</h4>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"{{path('shopcart_new', {'productId':product.id})}}\"><span class=\"ti-bag\"></span></a>
\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Ajouter au panier</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t<script src=\"{{asset('assets/client/js/countdown.js')}}\"></script>
\t\t<script>
\t\t\t// Parse the event start and end times
\t\t\tvar startAt = new Date(\"{{ event.startAt | date('Y-m-d H:i:s') }}\");
\t\t\tvar endAt = new Date(\"{{ event.endAt | date('Y-m-d H:i:s') }}\");

\t\t\t// Calculate the total event duration (in milliseconds)
\t\t\tvar totalDuration = endAt - startAt;

\t\t\t// Calculate the time elapsed since the event started
\t\t\tvar now = new Date();
\t\t\tvar timeElapsed = now - startAt;

\t\t\t// Calculate the remaining time by subtracting the elapsed time from the total duration
\t\t\tvar remainingTime = totalDuration - timeElapsed;

\t\t\t// Set the deadline to the current time plus the remaining time
\t\t\tvar deadline = new Date(now.getTime() + remainingTime);
\t\t\tinitializeClock('clockdiv{{event.id}}', deadline);
\t\t</script>

\t<!-- End exclusive deal Area -->", "home/blackfriday.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/blackfriday.html.twig");
    }
}
