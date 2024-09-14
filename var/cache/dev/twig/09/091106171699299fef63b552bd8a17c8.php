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

/* admin/footer.html.twig */
class __TwigTemplate_f46a59bffc8d93679af94536a0a76f42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        // line 1
        yield "<!-- begin::Footer -->
<footer class=\"m-grid__item\t\tm-footer \">
    <div class=\"m-container m-container--fluid m-container--full-height m-page__container\">
        <div class=\"m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop\">
            <div class=\"m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last\">
\t\t\t\t\t\t\t<span class=\"m-footer__copyright\">
\t\t\t\t\t\t\t\t2024 &copy; Muzeum
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</span>
            </div>
           
        </div>
    </div>

</footer>

<!-- end::Footer -->

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id=\"m_scroll_top\" class=\"m-scroll-top\">
    <i class=\"la la-arrow-up\"></i>
</div>

<!-- end::Scroll Top -->


<!-- begin::Quick Nav -->

<!--begin::Base Scripts -->
<script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/base/vendors.bundle.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/default/base/scripts.bundle.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>

<!--end::Base Scripts -->

<!--begin::Page Vendors Scripts -->
<script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Snippets -->
<script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/app/js/dashboard.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/app/js/my-script.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>


<!--end::Page Snippets -->
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/footer.html.twig";
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
        return array (  106 => 45,  102 => 44,  94 => 39,  86 => 34,  82 => 33,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- begin::Footer -->
<footer class=\"m-grid__item\t\tm-footer \">
    <div class=\"m-container m-container--fluid m-container--full-height m-page__container\">
        <div class=\"m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop\">
            <div class=\"m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last\">
\t\t\t\t\t\t\t<span class=\"m-footer__copyright\">
\t\t\t\t\t\t\t\t2024 &copy; Muzeum
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</span>
            </div>
           
        </div>
    </div>

</footer>

<!-- end::Footer -->

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id=\"m_scroll_top\" class=\"m-scroll-top\">
    <i class=\"la la-arrow-up\"></i>
</div>

<!-- end::Scroll Top -->


<!-- begin::Quick Nav -->

<!--begin::Base Scripts -->
<script src=\"{{asset('assets/vendors/base/vendors.bundle.js')}}\" type=\"text/javascript\"></script>
<script src=\"{{asset('assets/demo/default/base/scripts.bundle.js')}}\" type=\"text/javascript\"></script>

<!--end::Base Scripts -->

<!--begin::Page Vendors Scripts -->
<script src=\"{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}\" type=\"text/javascript\"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Snippets -->
<script src=\"{{asset('assets/app/js/dashboard.js')}}\" type=\"text/javascript\"></script>
<script src=\"{{asset('assets/app/js/my-script.js')}}\" type=\"text/javascript\"></script>


<!--end::Page Snippets -->
</div>", "admin/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/footer.html.twig");
    }
}
