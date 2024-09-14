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

/* admin/head.html.twig */
class __TwigTemplate_4407b5263cd8ed1f2e383ce8e59aa76a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/head.html.twig"));

        // line 1
        yield "<meta name=\"description\" content=\"Modal examples\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
<!--begin::Web font -->
<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js\"></script>
<script>
    WebFont.load({
        google: {
            \"families\": [\"Poppins:300,400,500,600,700\", \"Roboto:300,400,500,600,700\"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!--end::Web font -->

<!--begin::Page Vendors Styles -->
<link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/custom/fullcalendar/fullcalendar.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Page Vendors Styles -->

<!--begin::Base Styles -->
<link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/base/vendors.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/base/vendors.bundle.rtl.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />-->
<link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/default/base/style.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/default/base/style.bundle.rtl.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Base Styles -->
<link rel=\"shortcut icon\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/default/media/img/logo/favicon.ico"), "html", null, true);
        yield "\" />


<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-37564768-1', 'auto');
    ga('send', 'pageview');
</script>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/head.html.twig";
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
        return array (  101 => 34,  95 => 31,  90 => 29,  86 => 28,  81 => 26,  73 => 21,  68 => 19,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<meta name=\"description\" content=\"Modal examples\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
<!--begin::Web font -->
<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js\"></script>
<script>
    WebFont.load({
        google: {
            \"families\": [\"Poppins:300,400,500,600,700\", \"Roboto:300,400,500,600,700\"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!--end::Web font -->

<!--begin::Page Vendors Styles -->
<link href=\"{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Page Vendors Styles -->

<!--begin::Base Styles -->
<link href=\"{{asset('assets/vendors/base/vendors.bundle.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"{{asset('assets/vendors/base/vendors.bundle.rtl.css')}}\" rel=\"stylesheet\" type=\"text/css\" />-->
<link href=\"{{asset('assets/demo/default/base/style.bundle.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"{{asset('assets/demo/default/base/style.bundle.rtl.css')}}\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Base Styles -->
<link rel=\"shortcut icon\" href=\"{{asset('assets/demo/default/media/img/logo/favicon.ico')}}\" />


<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-37564768-1', 'auto');
    ga('send', 'pageview');
</script>


", "admin/head.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/head.html.twig");
    }
}
