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

/* admin/setting/show.html.twig */
class __TwigTemplate_4434eba38fe7a2ed1deac084ad9ea16c extends Template
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
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/setting/show.html.twig", 1);
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

        yield "Hello AdminController!";
        
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
    <!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Modal</h3>
                <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                    <li class=\"m-nav__item m-nav__item--home\">
                        <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                            <i class=\"m-nav__link-icon la la-home\"></i>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Base</span>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Modal</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <div class=\"m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\" aria-expanded=\"true\">
                    <a href=\"#\" class=\"m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle\">
                        <i class=\"la la-plus m--hide\"></i>
                        <i class=\"la la-ellipsis-h\"></i>
                    </a>
                    <div class=\"m-dropdown__wrapper\">
                        <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                        <div class=\"m-dropdown__inner\">
                            <div class=\"m-dropdown__body\">
                                <div class=\"m-dropdown__content\">
                                    <ul class=\"m-nav\">
                                        <li class=\"m-nav__section m-nav__section--first m--hide\">
                                            <span class=\"m-nav__section-text\">Quick Actions</span>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-share\"></i>
                                                <span class=\"m-nav__link-text\">Activity</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-chat-1\"></i>
                                                <span class=\"m-nav__link-text\">Messages</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-info\"></i>
                                                <span class=\"m-nav__link-text\">FAQ</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>
                                                <span class=\"m-nav__link-text\">Support</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__separator m-nav__separator--fit\">
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"#\" class=\"btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm\">Submit</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class=\"m-content\">

        <!--begin::Portlet-->
        <div class=\"m-portlet\">
            <div class=\"m-portlet__head\">
                <div class=\"m-portlet__head-caption\">
                    <div class=\"m-portlet__head-title\">
                        <h3 class=\"m-portlet__head-text\">
                            Modal Demos
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                <h1>Setting</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 111, $this->source); })()), "title", [], "any", false, false, false, 111), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Keywords</th>
                        <td>";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 115, $this->source); })()), "keywords", [], "any", false, false, false, 115), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 119, $this->source); })()), "description", [], "any", false, false, false, 119), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Company</th>
                        <td>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 123, $this->source); })()), "company", [], "any", false, false, false, 123), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 127, $this->source); })()), "address", [], "any", false, false, false, 127), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 131, $this->source); })()), "phone", [], "any", false, false, false, 131), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Fax</th>
                        <td>";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 135, $this->source); })()), "fax", [], "any", false, false, false, 135), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 139, $this->source); })()), "email", [], "any", false, false, false, 139), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Smtpserver</th>
                        <td>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 143, $this->source); })()), "smtpserver", [], "any", false, false, false, 143), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Smtpemail</th>
                        <td>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 147, $this->source); })()), "smtpemail", [], "any", false, false, false, 147), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Smtppassword</th>
                        <td>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 151, $this->source); })()), "smtppassword", [], "any", false, false, false, 151), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Smtpport</th>
                        <td>";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 155, $this->source); })()), "smtpport", [], "any", false, false, false, 155), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 159, $this->source); })()), "facebook", [], "any", false, false, false, 159), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 163, $this->source); })()), "instagram", [], "any", false, false, false, 163), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Twitter</th>
                        <td>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 167, $this->source); })()), "twitter", [], "any", false, false, false, 167), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Aboutus</th>
                        <td>";
        // line 171
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 171, $this->source); })()), "aboutus", [], "any", false, false, false, 171);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>";
        // line 175
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 175, $this->source); })()), "contact", [], "any", false, false, false, 175);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Reference</th>
                        <td>";
        // line 179
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 179, $this->source); })()), "reference", [], "any", false, false, false, 179);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 183, $this->source); })()), "status", [], "any", false, false, false, 183), "html", null, true);
        yield "</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        yield "\" class=\"btn btn-info\">Back to List</a>
                <br>
                <a href=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190)]), "html", null, true);
        yield "\" class=\"btn btn-success\">Edit</a>
            </div>
        </div>
        <!--end::Portlet-->
        <!--begin::Modal-->
        <div class=\"modaa fade\" id=\"m_modal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">

        </div>

    </div>


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
        return "admin/setting/show.html.twig";
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
        return array (  343 => 190,  338 => 188,  330 => 183,  323 => 179,  316 => 175,  309 => 171,  302 => 167,  295 => 163,  288 => 159,  281 => 155,  274 => 151,  267 => 147,  260 => 143,  253 => 139,  246 => 135,  239 => 131,  232 => 127,  225 => 123,  218 => 119,  211 => 115,  204 => 111,  197 => 107,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}

    <!-- BEGIN: Subheader -->
    <div class=\"m-subheader \">
        <div class=\"d-flex align-items-center\">
            <div class=\"mr-auto\">
                <h3 class=\"m-subheader__title m-subheader__title--separator\">Modal</h3>
                <ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">
                    <li class=\"m-nav__item m-nav__item--home\">
                        <a href=\"#\" class=\"m-nav__link m-nav__link--icon\">
                            <i class=\"m-nav__link-icon la la-home\"></i>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Base</span>
                        </a>
                    </li>
                    <li class=\"m-nav__separator\">-</li>
                    <li class=\"m-nav__item\">
                        <a href=\"\" class=\"m-nav__link\">
                            <span class=\"m-nav__link-text\">Modal</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <div class=\"m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\" aria-expanded=\"true\">
                    <a href=\"#\" class=\"m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle\">
                        <i class=\"la la-plus m--hide\"></i>
                        <i class=\"la la-ellipsis-h\"></i>
                    </a>
                    <div class=\"m-dropdown__wrapper\">
                        <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                        <div class=\"m-dropdown__inner\">
                            <div class=\"m-dropdown__body\">
                                <div class=\"m-dropdown__content\">
                                    <ul class=\"m-nav\">
                                        <li class=\"m-nav__section m-nav__section--first m--hide\">
                                            <span class=\"m-nav__section-text\">Quick Actions</span>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-share\"></i>
                                                <span class=\"m-nav__link-text\">Activity</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-chat-1\"></i>
                                                <span class=\"m-nav__link-text\">Messages</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-info\"></i>
                                                <span class=\"m-nav__link-text\">FAQ</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"\" class=\"m-nav__link\">
                                                <i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>
                                                <span class=\"m-nav__link-text\">Support</span>
                                            </a>
                                        </li>
                                        <li class=\"m-nav__separator m-nav__separator--fit\">
                                        </li>
                                        <li class=\"m-nav__item\">
                                            <a href=\"#\" class=\"btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm\">Submit</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class=\"m-content\">

        <!--begin::Portlet-->
        <div class=\"m-portlet\">
            <div class=\"m-portlet__head\">
                <div class=\"m-portlet__head-caption\">
                    <div class=\"m-portlet__head-title\">
                        <h3 class=\"m-portlet__head-text\">
                            Modal Demos
                        </h3>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__body\">
                <h1>Setting</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ setting.id }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{ setting.title }}</td>
                    </tr>
                    <tr>
                        <th>Keywords</th>
                        <td>{{ setting.keywords }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ setting.description }}</td>
                    </tr>
                    <tr>
                        <th>Company</th>
                        <td>{{ setting.company }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ setting.address }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ setting.phone }}</td>
                    </tr>
                    <tr>
                        <th>Fax</th>
                        <td>{{ setting.fax }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ setting.email }}</td>
                    </tr>
                    <tr>
                        <th>Smtpserver</th>
                        <td>{{ setting.smtpserver }}</td>
                    </tr>
                    <tr>
                        <th>Smtpemail</th>
                        <td>{{ setting.smtpemail }}</td>
                    </tr>
                    <tr>
                        <th>Smtppassword</th>
                        <td>{{ setting.smtppassword }}</td>
                    </tr>
                    <tr>
                        <th>Smtpport</th>
                        <td>{{ setting.smtpport }}</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>{{ setting.facebook }}</td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>{{ setting.instagram }}</td>
                    </tr>
                    <tr>
                        <th>Twitter</th>
                        <td>{{ setting.twitter }}</td>
                    </tr>
                    <tr>
                        <th>Aboutus</th>
                        <td>{{ setting.aboutus|raw }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ setting.contact|raw  }}</td>
                    </tr>
                    <tr>
                        <th>Reference</th>
                        <td>{{ setting.reference|raw  }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ setting.status }}</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('setting_index') }}\" class=\"btn btn-info\">Back to List</a>
                <br>
                <a href=\"{{ path('setting_edit', {'id': setting.id}) }}\" class=\"btn btn-success\">Edit</a>
            </div>
        </div>
        <!--end::Portlet-->
        <!--begin::Modal-->
        <div class=\"modaa fade\" id=\"m_modal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">

        </div>

    </div>


{% endblock %}

", "admin/setting/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/setting/show.html.twig");
    }
}
