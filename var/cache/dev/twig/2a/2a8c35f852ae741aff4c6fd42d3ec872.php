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

/* home/head.html.twig */
class __TwigTemplate_e2b4b6a06842075d669c93d65fc336a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        // line 1
        yield "<!--
\t\tCSS
\t\t============================================= -->
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/linearicons.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/font-awesome.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/themify-icons.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/bootstrap.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/owl.carousel.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/nice-select.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/nouislider.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/ion.rangeSlider.css"), "html", null, true);
        yield "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/ion.rangeSlider.skinFlat.css"), "html", null, true);
        yield "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/magnific-popup.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/css/main.css"), "html", null, true);
        yield "\">
\t<!-- Include Floating WhatsApp CSS -->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/floating-whatsapp@1.0.0/dist/floating-wpp.min.css\">
  <!-- Favicon-->
\t    <link rel=\"shortcut icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/fav.png"), "html", null, true);
        yield "\">

<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/fav.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/fav.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/fav.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/fav.png"), "html", null, true);
        yield "\">";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/head.html.twig";
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
        return array (  117 => 23,  113 => 22,  109 => 21,  105 => 20,  100 => 18,  93 => 14,  89 => 13,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!--
\t\tCSS
\t\t============================================= -->
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/linearicons.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/font-awesome.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/themify-icons.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/bootstrap.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/owl.carousel.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/nice-select.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/nouislider.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/ion.rangeSlider.css')}}\" />
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/ion.rangeSlider.skinFlat.css')}}\" />
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/magnific-popup.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/client/css/main.css')}}\">
\t<!-- Include Floating WhatsApp CSS -->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/floating-whatsapp@1.0.0/dist/floating-wpp.min.css\">
  <!-- Favicon-->
\t    <link rel=\"shortcut icon\" href=\"{{asset('assets/client/img/fav.png')}}\">

<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{asset('assets/client/img/fav.png')}}\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{asset('assets/client/img/fav.png')}}\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{asset('assets/client/img/fav.png')}}\">
<link rel=\"apple-touch-icon-precomposed\" href=\"{{asset('assets/client/img/fav.png')}}\">", "home/head.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/head.html.twig");
    }
}
