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

/* orders/_form.html.twig */
class __TwigTemplate_2d51e9efa85d1bcf4de2c2c28105163b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/_form.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        yield "
<form class=\"form-horizontal\" name=\"order\" action=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_new");
        yield "\" method=\"post\">
    <fieldset>
        <label class=\"col-sm-3 control-label\">Ödenecek Tutar:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[amount]\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"name\" class=\"form-control\"/>
        </div>
        <hr>
        KARGO ALICI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[name]\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        yield "\" placeholder=\"name\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Adresi:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"textarea\" name=\"orders[address]\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "address", [], "any", false, false, false, 19), "html", null, true);
        yield "\" placeholder=\"Adresi\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Şehir:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[city]\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "city", [], "any", false, false, false, 24), "html", null, true);
        yield "\" placeholder=\"subject\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Telefon:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[phone]\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "phone", [], "any", false, false, false, 29), "html", null, true);
        yield "\" placeholder=\"subject\" class=\"form-control\"/>
        </div>
        <hr>

        KREDİ KARTI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardholdersname\" placeholder=\"Kart adı soyadı\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Kart Numarası:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardnumber\" placeholder=\"Kart Numarası\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Son Kullanma Tarihi:</label>
        <div class=\"control-group\" col-sm-3>
            <input type=\"text\" name=\"cardvaliddates\" placeholder=\"AY/YIL\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Güvenlik Kodu:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"number\" name=\"cardsecuritycode\" placeholder=\"Güvenlik kodu\" class=\"form-control\"/>
        </div>

        <input type=\"hidden\" name=\"token\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-order"), "html", null, true);
        yield "\" />

        <label class=\"col-sm-3 control-label\"> </label>
        <div class=\"control-group\" col-sm-5>
            <input class=\"btn btn-primary col-xs-12\" type=\"submit\" value=\"SATIN AL\"/>
        </div>
    </fieldset>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "orders/_form.html.twig";
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
        return array (  125 => 55,  96 => 29,  88 => 24,  80 => 19,  72 => 14,  62 => 7,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{{ form_start(form) }}
<form class=\"form-horizontal\" name=\"order\" action=\"{{ path('orders_new') }}\" method=\"post\">
    <fieldset>
        <label class=\"col-sm-3 control-label\">Ödenecek Tutar:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[amount]\" value=\"{{ total }}\" placeholder=\"name\" class=\"form-control\"/>
        </div>
        <hr>
        KARGO ALICI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[name]\" value=\"{{ app.user.name }}\" placeholder=\"name\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Adresi:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"textarea\" name=\"orders[address]\" value=\"{{ app.user.address }}\" placeholder=\"Adresi\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Şehir:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[city]\" value=\"{{ app.user.city }}\" placeholder=\"subject\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Telefon:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[phone]\" value=\"{{ app.user.phone }}\" placeholder=\"subject\" class=\"form-control\"/>
        </div>
        <hr>

        KREDİ KARTI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardholdersname\" placeholder=\"Kart adı soyadı\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Kart Numarası:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardnumber\" placeholder=\"Kart Numarası\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Son Kullanma Tarihi:</label>
        <div class=\"control-group\" col-sm-3>
            <input type=\"text\" name=\"cardvaliddates\" placeholder=\"AY/YIL\" class=\"form-control\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Güvenlik Kodu:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"number\" name=\"cardsecuritycode\" placeholder=\"Güvenlik kodu\" class=\"form-control\"/>
        </div>

        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-order') }}\" />

        <label class=\"col-sm-3 control-label\"> </label>
        <div class=\"control-group\" col-sm-5>
            <input class=\"btn btn-primary col-xs-12\" type=\"submit\" value=\"SATIN AL\"/>
        </div>
    </fieldset>
</form>", "orders/_form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/orders/_form.html.twig");
    }
}
