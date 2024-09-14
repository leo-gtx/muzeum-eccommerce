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

/* sitemap/index.html.twig */
class __TwigTemplate_c4647820463c5f4e5eb9bbb3a87b4fe2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        // line 1
        yield "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 5
            yield "    <url>
        ";
            // line 7
            yield "        ";
            // line 8
            yield "        <loc>
            ";
            // line 9
            if ((Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 9), ["hostname" => ""]) == CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 9))) {
                // line 10
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 10, $this->source); })()), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 10), "html", null, true);
                yield "
            ";
            } else {
                // line 12
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 12), "html", null, true);
                yield "
            ";
            }
            // line 14
            yield "        </loc>

        ";
            // line 17
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["url"], "lastmod", [], "any", true, true, false, 17)) {
                // line 18
                yield "            <lastmod>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "lastmod", [], "any", false, false, false, 18), "html", null, true);
                yield "</lastmod>
        ";
            }
            // line 20
            yield "
        ";
            // line 22
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["url"], "changefreq", [], "any", true, true, false, 22)) {
                // line 23
                yield "            <changefreq>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "changefreq", [], "any", false, false, false, 23), "html", null, true);
                yield "</changefreq>
        ";
            }
            // line 25
            yield "
        ";
            // line 27
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["url"], "priority", [], "any", true, true, false, 27)) {
                // line 28
                yield "            <priority>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "priority", [], "any", false, false, false, 28), "html", null, true);
                yield "</priority>
        ";
            }
            // line 30
            yield "
        ";
            // line 32
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", true, true, false, 32) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 32)))) {
                // line 33
                yield "            <image:image>
                <image:loc>";
                // line 34
                if ((Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34), ["hostname" => ""]) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 34, $this->source); })()), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34), "html", null, true);
                }
                yield "</image:loc>
                <image:title>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
                yield "</image:title>
            </image:image>
        ";
            }
            // line 38
            yield "    </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "</urlset>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sitemap/index.html.twig";
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
        return array (  147 => 40,  140 => 38,  134 => 35,  125 => 34,  122 => 33,  119 => 32,  116 => 30,  110 => 28,  107 => 27,  104 => 25,  98 => 23,  95 => 22,  92 => 20,  86 => 18,  83 => 17,  79 => 14,  73 => 12,  66 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 5,  52 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
{# On boucle sur les URLs #}
{% for url in urls %}
    <url>
        {# On vérifie si le nom d'hôte (hostname) est présent dans l'url #}
        {# Si il n'y est pas, on l'ajoute #}
        <loc>
            {%if url.loc|replace({hostname:''}) == url.loc%}
                {{hostname}}{{url.loc}}
            {%else%}
                {{url.loc}}
            {%endif%}
        </loc>

        {# Si il y a une date de modification #}
        {% if url.lastmod is defined %}
            <lastmod>{{url.lastmod}}</lastmod>
        {% endif %}

        {# Si il y a une fréquence de modification #}
        {% if url.changefreq is defined %}
            <changefreq>{{url.changefreq}}</changefreq>
        {% endif %}

        {# Si il y a une priorité #}
        {% if url.priority is defined %}
            <priority>{{url.priority}}</priority>
        {% endif %}

        {# Si il y a une image #}
        {% if url.image is defined and url.image is not empty %}
            <image:image>
                <image:loc>{%if url.image.loc|replace({hostname:''}) == url.image.loc%}{{hostname}}{{url.image.loc}}{%else%}{{url.image.loc}}{%endif%}</image:loc>
                <image:title>{{ url.image.title }}</image:title>
            </image:image>
        {% endif %}
    </url>
{% endfor %}
</urlset>", "sitemap/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/sitemap/index.html.twig");
    }
}
