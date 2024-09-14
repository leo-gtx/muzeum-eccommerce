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

/* admin/image/new.html.twig */
class __TwigTemplate_ce86cb464800f4cc7e37c8528e01da96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

        // line 1
        yield "<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/custom/fullcalendar/fullcalendar.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Page Vendors Styles -->

<!--begin::Base Styles -->
<link href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/base/vendors.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/vendors/base/vendors.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />-->
<link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/demo/default/base/style.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/demo/default/base/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Base Styles -->
<link rel=\"shortcut icon\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        yield "/demo/default/media/img/logo/favicon.ico\" />
<!--begin::Form-->
<div class=\"m-portlet m-portlet--tab\">
    <form role=\"form\" class=\"m-form m-form--fit m-form--label-align-right\" name=\"image\" action=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())]), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"m-portlet__body\">
            <div class=\"form-group m-form__group row\">
                <label for=\"example-text-input\" class=\"col-2 col-form-label\">Title</label>
                <div class=\"col-10\">
                    <input class=\"form-control m-input\" type=\"text\" value=\"Artisanal kale\" id=\"image_title\" name=\"image[title]\" maxlength=\"50\">
                    <input type=\"hidden\" id=\"image_product\" name=\"image[product]\" class=\"form-control\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\">
                </div>
            </div>
            <div class=\"form-group m-form__group\">
                <label for=\"exampleInputEmail1\">Galery Image</label>
                <div></div>
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" id=\"image_image\" name=\"image[image]\">
                    <label class=\"custom-file-label\" for=\"exampleInputFile\">Choose file</label>
                </div>
            </div>
        </div>
        <div class=\"m-portlet__foot m-portlet__foot--fit\">
            <div class=\"m-form__actions\">
                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </div>
        </div>
    </form>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 54
            yield "            <tr>
                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                <td><img src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 57))), "html", null, true);
            yield "\" height=\"60\"></td>
                <td>
                    <form method=\"post\" action=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 59), "pid" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 59, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 61))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-block btn-danger\">Delete</button>
                    </form>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            yield "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "        </tbody>
    </table>
</div>
<!--end::Form-->

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
        return "admin/image/new.html.twig";
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
        return array (  175 => 72,  166 => 68,  154 => 61,  149 => 59,  144 => 57,  140 => 56,  136 => 55,  133 => 54,  128 => 53,  97 => 25,  88 => 19,  82 => 16,  76 => 13,  71 => 11,  67 => 10,  62 => 8,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link href=\"{{asset('assets')}}/vendors/custom/fullcalendar/fullcalendar.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"{{asset('assets')}}/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Page Vendors Styles -->

<!--begin::Base Styles -->
<link href=\"{{asset('assets')}}/vendors/base/vendors.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"{{asset('assets')}}/vendors/base/vendors.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />-->
<link href=\"{{asset('assets')}}/demo/default/base/style.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />

<!--RTL version:<link href=\"{{asset('assets')}}/demo/default/base/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />-->

<!--end::Base Styles -->
<link rel=\"shortcut icon\" href=\"{{asset('assets')}}/demo/default/media/img/logo/favicon.ico\" />
<!--begin::Form-->
<div class=\"m-portlet m-portlet--tab\">
    <form role=\"form\" class=\"m-form m-form--fit m-form--label-align-right\" name=\"image\" action=\"{{ path('admin_image_new', {'id': id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"m-portlet__body\">
            <div class=\"form-group m-form__group row\">
                <label for=\"example-text-input\" class=\"col-2 col-form-label\">Title</label>
                <div class=\"col-10\">
                    <input class=\"form-control m-input\" type=\"text\" value=\"Artisanal kale\" id=\"image_title\" name=\"image[title]\" maxlength=\"50\">
                    <input type=\"hidden\" id=\"image_product\" name=\"image[product]\" class=\"form-control\" value=\"{{ id }}\">
                </div>
            </div>
            <div class=\"form-group m-form__group\">
                <label for=\"exampleInputEmail1\">Galery Image</label>
                <div></div>
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" id=\"image_image\" name=\"image[image]\">
                    <label class=\"custom-file-label\" for=\"exampleInputFile\">Choose file</label>
                </div>
            </div>
        </div>
        <div class=\"m-portlet__foot m-portlet__foot--fit\">
            <div class=\"m-form__actions\">
                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </div>
        </div>
    </form>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for image in images %}
            <tr>
                <td>{{ image.id }}</td>
                <td>{{ image.title }}</td>
                <td><img src=\"{{ asset('uploads/images/' ~ image.image) }}\" height=\"60\"></td>
                <td>
                    <form method=\"post\" action=\"{{ path('admin_image_delete', {'id': image.id, 'pid': id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ image.id) }}\">
                        <button class=\"btn btn-block btn-danger\">Delete</button>
                    </form>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
<!--end::Form-->

", "admin/image/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/image/new.html.twig");
    }
}
