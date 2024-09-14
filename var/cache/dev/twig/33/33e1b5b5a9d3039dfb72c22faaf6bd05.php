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

/* home/newuser.html.twig */
class __TwigTemplate_19222e85b9d6c8f3dbe2b4da80afdfe3 extends Template
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
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/newuser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/newuser.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/newuser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "User Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
                <div class=\"left-sidebar\">
                    <div class=\"brands_products\"><!--brands_products-->
                        ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            yield "                        Zaten üyesiniz <br>
                        User Name : ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
            yield " <br>
                        User Email : ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12), "html", null, true);
            yield "  <br>
                        User Roles : ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield " <br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "                        <hr>
                        ";
        } else {
            // line 18
            yield "                        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
            yield "
                        <h1>Yeni Üye Formu</h1>

                        <form method=\"post\" class=\"form-horizontal\" name=\"user\" enctype=\"multipart/form-data\">
                            <div class=\"form-group\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Adı</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"user[name]\" class=\"form-control\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "\"placeholder=\"Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Soyadı</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"user[surname]\" class=\"form-control\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "surname", [], "any", false, false, false, 32), "html", null, true);
            yield "\"placeholder=\"Surname\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Email</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"email\" name=\"user[email]\" class=\"form-control\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
            yield "\" placeholder=\"Email\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Password</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"password\" name=\"user[password]\" class=\"form-control\" value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), "html", null, true);
            yield "\"placeholder=\"Password\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Address</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"user[address]\" class=\"form-control\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "address", [], "any", false, false, false, 50), "html", null, true);
            yield "\"placeholder=\"Address\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Şehir</label>
                                    <div class=\"col-sm-9\">
                                        <select name=\"user[city]\" >
                                            <option value=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "city", [], "any", false, false, false, 57), "html", null, true);
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
                                        <input type=\"text\" name=\"user[phone]\" class=\"form-control\" value=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 145, $this->source); })()), "phone", [], "any", false, false, false, 145), "html", null, true);
            yield "\"placeholder=\"Phone\">
                                    </div>
                                </div>






                                <input type=\"hidden\" name=\"user[roles]\" value=\"ROLE_USER\">
                                <input type=\"hidden\" name=\"token\" value=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("user-form"), "html", null, true);
            yield "\">
                                ";
            // line 166
            yield "                                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Sign up
                                </button>
                            </div>

                        </form>
                    </div>
                    ";
        }
        // line 174
        yield "                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
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
        return "home/newuser.html.twig";
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
        return array (  307 => 174,  297 => 166,  293 => 155,  280 => 145,  189 => 57,  179 => 50,  170 => 44,  161 => 38,  152 => 32,  143 => 26,  131 => 18,  127 => 16,  118 => 14,  114 => 13,  110 => 12,  106 => 11,  103 => 10,  101 => 9,  94 => 4,  84 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homebase.html.twig' %}
{% block title %}User Login{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
                <div class=\"left-sidebar\">
                    <div class=\"brands_products\"><!--brands_products-->
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        Zaten üyesiniz <br>
                        User Name : {{ app.user.name }} <br>
                        User Email : {{ app.user.email }}  <br>
                        User Roles : {% for item in app.user.roles %}
                            {{ item }} <br>
                        {% endfor %}
                        <hr>
                        {% else %}
                        {{ include('messages.html.twig') }}
                        <h1>Yeni Üye Formu</h1>

                        <form method=\"post\" class=\"form-horizontal\" name=\"user\" enctype=\"multipart/form-data\">
                            <div class=\"form-group\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Adı</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"user[name]\" class=\"form-control\" value=\"{{ user.name }}\"placeholder=\"Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Soyadı</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"user[surname]\" class=\"form-control\" value=\"{{ user.surname }}\"placeholder=\"Surname\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Email</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"email\" name=\"user[email]\" class=\"form-control\" value=\"{{ user.email }}\" placeholder=\"Email\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Password</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"password\" name=\"user[password]\" class=\"form-control\" value=\"{{ user.password }}\"placeholder=\"Password\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\">Address</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"user[address]\" class=\"form-control\" value=\"{{ user.address }}\"placeholder=\"Address\">
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
                                        <input type=\"text\" name=\"user[phone]\" class=\"form-control\" value=\"{{ user.phone }}\"placeholder=\"Phone\">
                                    </div>
                                </div>






                                <input type=\"hidden\" name=\"user[roles]\" value=\"ROLE_USER\">
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
                                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Sign up
                                </button>
                            </div>

                        </form>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
{% endblock %}

", "home/newuser.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/home/newuser.html.twig");
    }
}
