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

/* userpanel/_form.html.twig */
class __TwigTemplate_0f3fe2901d2be971b4caa0b0b55dc77e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userpanel/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userpanel/_form.html.twig"));

        // line 1
        yield "<form method=\"post\" class=\"form-horizontal\" name=\"user\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Adı</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "\" placeholder=\"Name\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Soyadı</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"surname\" class=\"form-control\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "surname", [], "any", false, false, false, 12), "html", null, true);
        yield "\" placeholder=\"Surname\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Email</label>
            <div class=\"col-sm-9\">
                <input type=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        yield "\" placeholder=\"Email\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Password</label>
            <div class=\"col-sm-9\">
                <input type=\"password\" name=\"password\" class=\"form-control\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), "html", null, true);
        yield "\" placeholder=\"Password\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Address</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"address\" class=\"form-control\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "address", [], "any", false, false, false, 30), "html", null, true);
        yield "\" placeholder=\"Address\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Şehir</label>
            <div class=\"col-sm-9\">
                <select name=\"user[city]\" >
                    <option value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "city", [], "any", false, false, false, 37), "html", null, true);
        yield "\"></option>
                    <option value=\"İstanbul\">İstanbul</option>
                    <option value=\"Ankara\">Ankara</option>
                    <option value=\"İzmir\">İzmir</option>
                    <option value=\"Adana\">Adana</option>
                    <option value=\"Adıyaman\">Adıyaman</option>
                    <option value=\"Afyonkarahisar\">Afyonkarahisar</option>
                    <option value=\"Ağrı\">Ağrı</option>
                    <option value=\"Aksaray\">Aksaray</option>
                    <option value=\"Amasya\">Amasya</option>
                    <option value=\"Antalya\">Antalya</option>
                    <option value=\"Ardahan\">Ardahan</option>
                    <option value=\"Artvin\">Artvin</option>
                    <option value=\"Aydın\">Aydın</option>
                    <option value=\"Balıkesir\">Balıkesir</option>
                    <option value=\"Bartın\">Bartın</option>
                    <option value=\"Batman\">Batman</option>
                    <option value=\"Bayburt\">Bayburt</option>
                    <option value=\"Bilecik\">Bilecik</option>
                    <option value=\"Bingöl\">Bingöl</option>
                    <option value=\"Bitlis\">Bitlis</option>
                    <option value=\"Bolu\">Bolu</option>
                    <option value=\"Burdur\">Burdur</option>
                    <option value=\"Bursa\">Bursa</option>
                    <option value=\"Çanakkale\">Çanakkale</option>
                    <option value=\"Çankırı\">Çankırı</option>
                    <option value=\"Çorum\">Çorum</option>
                    <option value=\"Denizli\">Denizli</option>
                    <option value=\"Diyarbakır\">Diyarbakır</option>
                    <option value=\"Düzce\">Düzce</option>
                    <option value=\"Edirne\">Edirne</option>
                    <option value=\"Elazığ\">Elazığ</option>
                    <option value=\"Erzincan\">Erzincan</option>
                    <option value=\"Erzurum\">Erzurum</option>
                    <option value=\"Eskişehir\">Eskişehir</option>
                    <option value=\"Gaziantep\">Gaziantep</option>
                    <option value=\"Giresun\">Giresun</option>
                    <option value=\"Gümüşhane\">Gümüşhane</option>
                    <option value=\"Hakkâri\">Hakkâri</option>
                    <option value=\"Hatay\">Hatay</option>
                    <option value=\"Iğdır\">Iğdır</option>
                    <option value=\"Isparta\">Isparta</option>
                    <option value=\"Kahramanmaraş\">Kahramanmaraş</option>
                    <option value=\"Karabük\">Karabük</option>
                    <option value=\"Karaman\">Karaman</option>
                    <option value=\"Kars\">Kars</option>
                    <option value=\"Kastamonu\">Kastamonu</option>
                    <option value=\"Kayseri\">Kayseri</option>
                    <option value=\"Kırıkkale\">Kırıkkale</option>
                    <option value=\"Kırklareli\">Kırklareli</option>
                    <option value=\"Kırşehir\">Kırşehir</option>
                    <option value=\"Kilis\">Kilis</option>
                    <option value=\"Kocaeli\">Kocaeli</option>
                    <option value=\"Konya\">Konya</option>
                    <option value=\"Kütahya\">Kütahya</option>
                    <option value=\"Malatya\">Malatya</option>
                    <option value=\"Manisa\">Manisa</option>
                    <option value=\"Mardin\">Mardin</option>
                    <option value=\"Mersin\">Mersin</option>
                    <option value=\"Muğla\">Muğla</option>
                    <option value=\"Muş\">Muş</option>
                    <option value=\"Nevşehir\">Nevşehir</option>
                    <option value=\"Niğde\">Niğde</option>
                    <option value=\"Ordu\">Ordu</option>
                    <option value=\"Osmaniye\">Osmaniye</option>
                    <option value=\"Rize\">Rize</option>
                    <option value=\"Sakarya\">Sakarya</option>
                    <option value=\"Samsun\">Samsun</option>
                    <option value=\"Siirt\">Siirt</option>
                    <option value=\"Sinop\">Sinop</option>
                    <option value=\"Sivas\">Sivas</option>
                    <option value=\"Şırnak\">Şırnak</option>
                    <option value=\"Tekirdağ\">Tekirdağ</option>
                    <option value=\"Tokat\">Tokat</option>
                    <option value=\"Trabzon\">Trabzon</option>
                    <option value=\"Tunceli\">Tunceli</option>
                    <option value=\"Şanlıurfa\">Şanlıurfa</option>
                    <option value=\"Uşak\">Uşak</option>
                    <option value=\"Van\">Van</option>
                    <option value=\"Yalova\">Yalova</option>
                    <option value=\"Yozgat\">Yozgat</option>
                    <option value=\"Zonguldak\">Zonguldak</option>
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Telefon</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"phone\" class=\"form-control\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "phone", [], "any", false, false, false, 125), "html", null, true);
        yield "\" placeholder=\"Phone\">
            </div>
        </div>






        <input type=\"hidden\" name=\"token\" value=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("user-form"), "html", null, true);
        yield "\">
        ";
        // line 145
        yield "        <input class=\"btn btn-lg btn-primary\" type=\"submit\" value=\"GUNCELLE\">
    </div>

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
        return "userpanel/_form.html.twig";
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
        return array (  208 => 145,  204 => 134,  192 => 125,  101 => 37,  91 => 30,  82 => 24,  73 => 18,  64 => 12,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" class=\"form-horizontal\" name=\"user\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Adı</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"name\" class=\"form-control\" value=\"{{ user.name }}\" placeholder=\"Name\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Soyadı</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"surname\" class=\"form-control\" value=\"{{ user.surname }}\" placeholder=\"Surname\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Email</label>
            <div class=\"col-sm-9\">
                <input type=\"email\" name=\"email\" class=\"form-control\" value=\"{{ user.email }}\" placeholder=\"Email\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Password</label>
            <div class=\"col-sm-9\">
                <input type=\"password\" name=\"password\" class=\"form-control\" value=\"{{ user.password }}\" placeholder=\"Password\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Address</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"address\" class=\"form-control\" value=\"{{ user.address }}\" placeholder=\"Address\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Şehir</label>
            <div class=\"col-sm-9\">
                <select name=\"user[city]\" >
                    <option value=\"{{ user.city }}\"></option>
                    <option value=\"İstanbul\">İstanbul</option>
                    <option value=\"Ankara\">Ankara</option>
                    <option value=\"İzmir\">İzmir</option>
                    <option value=\"Adana\">Adana</option>
                    <option value=\"Adıyaman\">Adıyaman</option>
                    <option value=\"Afyonkarahisar\">Afyonkarahisar</option>
                    <option value=\"Ağrı\">Ağrı</option>
                    <option value=\"Aksaray\">Aksaray</option>
                    <option value=\"Amasya\">Amasya</option>
                    <option value=\"Antalya\">Antalya</option>
                    <option value=\"Ardahan\">Ardahan</option>
                    <option value=\"Artvin\">Artvin</option>
                    <option value=\"Aydın\">Aydın</option>
                    <option value=\"Balıkesir\">Balıkesir</option>
                    <option value=\"Bartın\">Bartın</option>
                    <option value=\"Batman\">Batman</option>
                    <option value=\"Bayburt\">Bayburt</option>
                    <option value=\"Bilecik\">Bilecik</option>
                    <option value=\"Bingöl\">Bingöl</option>
                    <option value=\"Bitlis\">Bitlis</option>
                    <option value=\"Bolu\">Bolu</option>
                    <option value=\"Burdur\">Burdur</option>
                    <option value=\"Bursa\">Bursa</option>
                    <option value=\"Çanakkale\">Çanakkale</option>
                    <option value=\"Çankırı\">Çankırı</option>
                    <option value=\"Çorum\">Çorum</option>
                    <option value=\"Denizli\">Denizli</option>
                    <option value=\"Diyarbakır\">Diyarbakır</option>
                    <option value=\"Düzce\">Düzce</option>
                    <option value=\"Edirne\">Edirne</option>
                    <option value=\"Elazığ\">Elazığ</option>
                    <option value=\"Erzincan\">Erzincan</option>
                    <option value=\"Erzurum\">Erzurum</option>
                    <option value=\"Eskişehir\">Eskişehir</option>
                    <option value=\"Gaziantep\">Gaziantep</option>
                    <option value=\"Giresun\">Giresun</option>
                    <option value=\"Gümüşhane\">Gümüşhane</option>
                    <option value=\"Hakkâri\">Hakkâri</option>
                    <option value=\"Hatay\">Hatay</option>
                    <option value=\"Iğdır\">Iğdır</option>
                    <option value=\"Isparta\">Isparta</option>
                    <option value=\"Kahramanmaraş\">Kahramanmaraş</option>
                    <option value=\"Karabük\">Karabük</option>
                    <option value=\"Karaman\">Karaman</option>
                    <option value=\"Kars\">Kars</option>
                    <option value=\"Kastamonu\">Kastamonu</option>
                    <option value=\"Kayseri\">Kayseri</option>
                    <option value=\"Kırıkkale\">Kırıkkale</option>
                    <option value=\"Kırklareli\">Kırklareli</option>
                    <option value=\"Kırşehir\">Kırşehir</option>
                    <option value=\"Kilis\">Kilis</option>
                    <option value=\"Kocaeli\">Kocaeli</option>
                    <option value=\"Konya\">Konya</option>
                    <option value=\"Kütahya\">Kütahya</option>
                    <option value=\"Malatya\">Malatya</option>
                    <option value=\"Manisa\">Manisa</option>
                    <option value=\"Mardin\">Mardin</option>
                    <option value=\"Mersin\">Mersin</option>
                    <option value=\"Muğla\">Muğla</option>
                    <option value=\"Muş\">Muş</option>
                    <option value=\"Nevşehir\">Nevşehir</option>
                    <option value=\"Niğde\">Niğde</option>
                    <option value=\"Ordu\">Ordu</option>
                    <option value=\"Osmaniye\">Osmaniye</option>
                    <option value=\"Rize\">Rize</option>
                    <option value=\"Sakarya\">Sakarya</option>
                    <option value=\"Samsun\">Samsun</option>
                    <option value=\"Siirt\">Siirt</option>
                    <option value=\"Sinop\">Sinop</option>
                    <option value=\"Sivas\">Sivas</option>
                    <option value=\"Şırnak\">Şırnak</option>
                    <option value=\"Tekirdağ\">Tekirdağ</option>
                    <option value=\"Tokat\">Tokat</option>
                    <option value=\"Trabzon\">Trabzon</option>
                    <option value=\"Tunceli\">Tunceli</option>
                    <option value=\"Şanlıurfa\">Şanlıurfa</option>
                    <option value=\"Uşak\">Uşak</option>
                    <option value=\"Van\">Van</option>
                    <option value=\"Yalova\">Yalova</option>
                    <option value=\"Yozgat\">Yozgat</option>
                    <option value=\"Zonguldak\">Zonguldak</option>
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Telefon</label>
            <div class=\"col-sm-9\">
                <input type=\"text\" name=\"phone\" class=\"form-control\" value=\"{{ user.phone }}\" placeholder=\"Phone\">
            </div>
        </div>






        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('user-form') }}\">
        {#
            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
            See https://symfony.com/doc/current/security/remember_me.html

            <div class=\"checkbox mb-3\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                </label>
            </div>
        #}
        <input class=\"btn btn-lg btn-primary\" type=\"submit\" value=\"GUNCELLE\">
    </div>

</form>", "userpanel/_form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/userpanel/_form.html.twig");
    }
}
