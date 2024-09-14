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

/* admin/orders/_form.html.twig */
class __TwigTemplate_1033be5d178f5c73d6eda5e62d48ba6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/orders/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/orders/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
<form class=\"form-horizontal\" name=\"order\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_new");
        yield "\" method=\"post\">
    <fieldset>
        <label class=\"col-sm-3 control-label\">Ödenecek Tutar:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[amount]\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"name\" class=\"input-xlarge\"/>
        </div>
        <hr>
        KARGO ALICI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[name]\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "\" placeholder=\"name\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Adresi:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"textarea\" name=\"orders[address]\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "address", [], "any", false, false, false, 18), "html", null, true);
        yield "\" placeholder=\"Adresi\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Şehir:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[city]\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "city", [], "any", false, false, false, 23), "html", null, true);
        yield "\" placeholder=\"subject\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Telefon:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[phone]\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "phone", [], "any", false, false, false, 28), "html", null, true);
        yield "\" placeholder=\"subject\" class=\"input-xlarge\"/>
        </div>
        <hr>

        KREDİ KARTI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardholdersname\" placeholder=\"Kart adı soyadı\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Kart Numarası:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardnumber\" placeholder=\"Kart Numarası\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Son Kullanma Tarihi:</label>
        <div class=\"control-group\" col-sm-3>
            <input type=\"text\" name=\"cardvaliddates\" placeholder=\"AY/YIL\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Güvenlik Kodu:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"number\" name=\"cardsecuritycode\" placeholder=\"Güvenlik kodu\" class=\"input-xlarge\"/>
        </div>

        <input type=\"hidden\" name=\"token\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-order"), "html", null, true);
        yield "\" />

        <label class=\"col-sm-3 control-label\"> </label>
        <div class=\"control-group\" col-sm-5>
            <input class=\"shopBtn\" type=\"submit\" value=\"SATIN AL\"/>
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
        return "admin/orders/_form.html.twig";
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
        return array (  122 => 54,  93 => 28,  85 => 23,  77 => 18,  69 => 13,  59 => 6,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
<form class=\"form-horizontal\" name=\"order\" action=\"{{ path('orders_new') }}\" method=\"post\">
    <fieldset>
        <label class=\"col-sm-3 control-label\">Ödenecek Tutar:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[amount]\" value=\"{{ total }}\" placeholder=\"name\" class=\"input-xlarge\"/>
        </div>
        <hr>
        KARGO ALICI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[name]\" value=\"{{ app.user.name }}\" placeholder=\"name\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Adresi:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"textarea\" name=\"orders[address]\" value=\"{{ app.user.address }}\" placeholder=\"Adresi\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Şehir:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[city]\" value=\"{{ app.user.city }}\" placeholder=\"subject\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Telefon:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"orders[phone]\" value=\"{{ app.user.phone }}\" placeholder=\"subject\" class=\"input-xlarge\"/>
        </div>
        <hr>

        KREDİ KARTI BİLGİLERİ
        <hr>
        <label class=\"col-sm-3 control-label\">Adı Soyadı:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardholdersname\" placeholder=\"Kart adı soyadı\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Kart Numarası:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"text\" name=\"cardnumber\" placeholder=\"Kart Numarası\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Son Kullanma Tarihi:</label>
        <div class=\"control-group\" col-sm-3>
            <input type=\"text\" name=\"cardvaliddates\" placeholder=\"AY/YIL\" class=\"input-xlarge\"/>
        </div>

        <label class=\"col-sm-3 control-label\">Güvenlik Kodu:</label>
        <div class=\"control-group\" col-sm-5>
            <input type=\"number\" name=\"cardsecuritycode\" placeholder=\"Güvenlik kodu\" class=\"input-xlarge\"/>
        </div>

        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-order') }}\" />

        <label class=\"col-sm-3 control-label\"> </label>
        <div class=\"control-group\" col-sm-5>
            <input class=\"shopBtn\" type=\"submit\" value=\"SATIN AL\"/>
        </div>
    </fieldset>
</form>", "admin/orders/_form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/admin/orders/_form.html.twig");
    }
}
