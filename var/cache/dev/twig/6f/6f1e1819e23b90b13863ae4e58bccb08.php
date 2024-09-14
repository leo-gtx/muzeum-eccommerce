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

/* email/confirmation.html.twig */
class __TwigTemplate_8f67ea0f8e76764cc243455717017659 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/confirmation.html.twig"));

        // line 1
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <title>Muzeum</title>

  <style type=\"text/css\">
    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #ff6f6f;
      font-weight: bold;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 30px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .button {
      padding: 30px 0 0;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .mini-block-container {
      padding: 30px 50px;
      width: 500px;
    }

    .mini-block {
      background-color: #ffffff;
      width: 498px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      padding: 45px 75px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 258px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-img {
      width: 480px;
      height: 1px !important;
    }

    .force-width-full {
      width: 600px;
      height: 1px !important;
    }

    .user-img img {
      width: 130px;
      border-radius: 5px;
      border: 1px solid #cccccc;
    }

    .user-img {
      text-align: center;
      border-radius: 100px;
      color: #ff6f6f;
      font-weight: 700;
    }

    .user-msg {
      padding-top: 10px;
      font-size: 14px;
      text-align: center;
      font-style: italic;
    }

    .mini-img {
      padding: 5px;
      width: 140px;
    }

    .mini-img img {
      border-radius: 5px;
      width: 140px;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

    .mini-imgs {
      padding: 25px 0 30px;
    }
  </style>

  <style type=\"text/css\" media=\"screen\">
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>

  <style type=\"text/css\" media=\"screen\">
    @media screen {
      /* Thanks Outlook 2013! */
      * {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type=\"text/css\" media=\"only screen and (max-width: 480px)\">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*=\"container-for-gmail-android\"] {
        min-width: 290px !important;
        width: 100% !important;
      }

      table[class=\"w320\"] {
        width: 320px !important;
      }

      img[class=\"force-width-gmail\"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      td[class*=\"mobile-header-padding-left\"] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*=\"mobile-header-padding-right\"] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class=\"mobile-block\"] {
        display: block !important;
      }

      td[class=\"mini-img\"],
      td[class=\"mini-img\"] img{
        width: 150px !important;
      }

      td[class=\"header-lg\"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class=\"header-md\"] {
        font-size: 18px !important;
        padding-bottom: 5px !important;
      }

      td[class=\"content-padding\"] {
        padding: 5px 0 30px !important;
      }

      td[class=\"button\"] {
        padding: 5px !important;
      }

      td[class*=\"free-text\"] {
        padding: 10px 18px 30px !important;
      }

      img[class=\"force-width-img\"],
      img[class=\"force-width-full\"] {
        display: none !important;
      }

      td[class=\"info-block\"] {
        display: block !important;
        width: 280px !important;
        padding-bottom: 40px !important;
      }

      td[class=\"info-img\"],
      img[class=\"info-img\"] {
        width: 278px !important;
      }

      td[class=\"mini-block-container\"] {
        padding: 8px 20px !important;
        width: 280px !important;
      }

      td[class=\"mini-block\"] {
        padding: 20px !important;
      }

      td[class=\"user-img\"] {
        display: block !important;
        text-align: center !important;
        width: 100% !important;
        padding-bottom: 10px;
      }

      td[class=\"user-msg\"] {
        display: block !important;
        padding-bottom: 20px;
      }
    }
  </style>
</head>

<body bgcolor=\"#f7f7f7\">
<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"container-for-gmail-android\" width=\"100%\">
  <tr>
    <td align=\"left\" valign=\"top\" width=\"100%\" >
      <center>
        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#ffffff\" style=\"background-color:transparent\">
          <tr>
            <td width=\"100%\" height=\"80\" valign=\"top\" style=\"text-align: center; vertical-align:middle;\">
            <!--[if gte mso 9]>
            <v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\" style=\"mso-width-percent:1000;height:80px; v-text-anchor:middle;\">
              <v:fill type=\"tile\" src=\"http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg\" color=\"#ffffff\" />
              <v:textbox inset=\"0,0,0,0\">
            <![endif]-->
              <center>
                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"w320\">
                  <tr>
                    <td class=\"mobile-header-padding-left\" style=\"vertical-align: middle;background-color:#fff\">
                    <center>
                      <a href=\"\"><img style=\"height:150px;width:auto;\" src=\"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/logo.png")), "html", null, true);
        yield "\" alt=\"logo\"></a>
                    </center>
                    </td>
                  </tr>
                </table>
              </center>
              <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align=\"center\" valign=\"top\" width=\"100%\" style=\"background-color: #f7f7f7;\" class=\"content-padding\">
      <center>
        <table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\">
          <tr>
            <td class=\"header-lg\">
                Merci pour votre achat!
            </td>
            <td>Commande: #";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 343, $this->source); })()), "id", [], "any", false, false, false, 343), "html", null, true);
        yield "</td>
          </tr>
          <tr>
            <td class=\"mini-block-container\">
              <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td class=\"mini-container-left\">
                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tr>
                        <td class=\"mini-block-padding\">
                          <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse:separate !important;\">
                            <tr>
                              <td class=\"mini-block\">
                                <span class=\"header-sm\">Payeur</span><br />
                                ";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 357, $this->source); })()), "name", [], "any", false, false, false, 357), "html", null, true);
        yield " <br />
                                ";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 358, $this->source); })()), "city", [], "any", false, false, false, 358), "html", null, true);
        yield " <br />
                                ";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 359, $this->source); })()), "address", [], "any", false, false, false, 359), "html", null, true);
        yield " <br />
                                ";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 360, $this->source); })()), "phone", [], "any", false, false, false, 360), "html", null, true);
        yield " <br />
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class=\"mini-container-right\">
                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tr>
                        <td class=\"mini-block-padding\">
                          <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse:separate !important;\">
                            <tr>
                              <td class=\"mini-block\">
                                <span class=\"header-sm\">Date</span><br />
                                ";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 376, $this->source); })()), "createdAt", [], "any", false, false, false, 376), "F jS \\a\\t g:ia"), "html", null, true);
        yield " <br />
                                <br />
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  
  <tr>
     <td align=\"center\" valign=\"top\" width=\"100%\" style=\"background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;\">
      <center>
        <table cellpadding=\"1\" cellspacing=\"1\" width=\"600\" class=\"w320\">
            <tr>
              <td class=\"item-table\">
                <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                  <tr>
                    <td class=\"title-dark\" width=\"300\">
                       Produit
                    </td>
                   
                    <td class=\"title-dark\" width=\"97\">
                      Prix
                    </td>
                     <td class=\"title-dark\" width=\"97\">
                      Quantité
                    </td>
                    <td class=\"title-dark\" width=\"97\">
                      Total
                    </td>
                  </tr>

                    ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orderDetail"]) || array_key_exists("orderDetail", $context) ? $context["orderDetail"] : (function () { throw new RuntimeError('Variable "orderDetail" does not exist.', 420, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 421
            yield "                  <tr>
                    <td class=\"item-col item\">
                      <table cellspacing=\"0\"  cellpadding=\"0\" width=\"100%\">
                        <tr>
                          <td class=\"product\">
                            <span style=\"color: #4d4d4d; font-weight:bold;\">";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 426), "html", null, true);
            yield "</span>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class=\"item-col\">
                      ";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 432), "html", null, true);
            yield " FCFA
                    </td>
                    <td class=\"item-col\">
                      ";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 435), "html", null, true);
            yield "
                    </td>
                    <td class=\"item-col\">
                      ";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 438) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 438)), "html", null, true);
            yield " FCFA
                    </td>
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 442
        yield "
               

                  <tr>
                    <td class=\"item-col item mobile-row-padding\">Total</td>
                    <td class=\"item-col price\">";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 447, $this->source); })()), "amount", [], "any", false, false, false, 447), "html", null, true);
        yield " FCFA</td>
                  </tr>

                </table>
              </td>
            </tr>
        </table>
      </center>
    </td>
  </tr>
  
  <tr>
    <td align=\"center\" valign=\"top\" width=\"100%\" style=\"background-color: #f7f7f7; height: 100px;\">
      <center>
        <table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\">
          <tr>
            <td style=\"padding: 25px 0 25px\">
              <strong>©Museum 2024</strong><br />
               www.museum.ndlpixel.com
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</body>
</html>
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
        return "email/confirmation.html.twig";
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
        return array (  539 => 447,  532 => 442,  522 => 438,  516 => 435,  510 => 432,  501 => 426,  494 => 421,  490 => 420,  443 => 376,  424 => 360,  420 => 359,  416 => 358,  412 => 357,  395 => 343,  368 => 319,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <title>Muzeum</title>

  <style type=\"text/css\">
    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #ff6f6f;
      font-weight: bold;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 30px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .button {
      padding: 30px 0 0;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .mini-block-container {
      padding: 30px 50px;
      width: 500px;
    }

    .mini-block {
      background-color: #ffffff;
      width: 498px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      padding: 45px 75px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 258px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-img {
      width: 480px;
      height: 1px !important;
    }

    .force-width-full {
      width: 600px;
      height: 1px !important;
    }

    .user-img img {
      width: 130px;
      border-radius: 5px;
      border: 1px solid #cccccc;
    }

    .user-img {
      text-align: center;
      border-radius: 100px;
      color: #ff6f6f;
      font-weight: 700;
    }

    .user-msg {
      padding-top: 10px;
      font-size: 14px;
      text-align: center;
      font-style: italic;
    }

    .mini-img {
      padding: 5px;
      width: 140px;
    }

    .mini-img img {
      border-radius: 5px;
      width: 140px;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

    .mini-imgs {
      padding: 25px 0 30px;
    }
  </style>

  <style type=\"text/css\" media=\"screen\">
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>

  <style type=\"text/css\" media=\"screen\">
    @media screen {
      /* Thanks Outlook 2013! */
      * {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type=\"text/css\" media=\"only screen and (max-width: 480px)\">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*=\"container-for-gmail-android\"] {
        min-width: 290px !important;
        width: 100% !important;
      }

      table[class=\"w320\"] {
        width: 320px !important;
      }

      img[class=\"force-width-gmail\"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      td[class*=\"mobile-header-padding-left\"] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*=\"mobile-header-padding-right\"] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class=\"mobile-block\"] {
        display: block !important;
      }

      td[class=\"mini-img\"],
      td[class=\"mini-img\"] img{
        width: 150px !important;
      }

      td[class=\"header-lg\"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class=\"header-md\"] {
        font-size: 18px !important;
        padding-bottom: 5px !important;
      }

      td[class=\"content-padding\"] {
        padding: 5px 0 30px !important;
      }

      td[class=\"button\"] {
        padding: 5px !important;
      }

      td[class*=\"free-text\"] {
        padding: 10px 18px 30px !important;
      }

      img[class=\"force-width-img\"],
      img[class=\"force-width-full\"] {
        display: none !important;
      }

      td[class=\"info-block\"] {
        display: block !important;
        width: 280px !important;
        padding-bottom: 40px !important;
      }

      td[class=\"info-img\"],
      img[class=\"info-img\"] {
        width: 278px !important;
      }

      td[class=\"mini-block-container\"] {
        padding: 8px 20px !important;
        width: 280px !important;
      }

      td[class=\"mini-block\"] {
        padding: 20px !important;
      }

      td[class=\"user-img\"] {
        display: block !important;
        text-align: center !important;
        width: 100% !important;
        padding-bottom: 10px;
      }

      td[class=\"user-msg\"] {
        display: block !important;
        padding-bottom: 20px;
      }
    }
  </style>
</head>

<body bgcolor=\"#f7f7f7\">
<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"container-for-gmail-android\" width=\"100%\">
  <tr>
    <td align=\"left\" valign=\"top\" width=\"100%\" >
      <center>
        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#ffffff\" style=\"background-color:transparent\">
          <tr>
            <td width=\"100%\" height=\"80\" valign=\"top\" style=\"text-align: center; vertical-align:middle;\">
            <!--[if gte mso 9]>
            <v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\" style=\"mso-width-percent:1000;height:80px; v-text-anchor:middle;\">
              <v:fill type=\"tile\" src=\"http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg\" color=\"#ffffff\" />
              <v:textbox inset=\"0,0,0,0\">
            <![endif]-->
              <center>
                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"w320\">
                  <tr>
                    <td class=\"mobile-header-padding-left\" style=\"vertical-align: middle;background-color:#fff\">
                    <center>
                      <a href=\"\"><img style=\"height:150px;width:auto;\" src=\"{{ absolute_url(asset('assets/client/img/logo.png'))}}\" alt=\"logo\"></a>
                    </center>
                    </td>
                  </tr>
                </table>
              </center>
              <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align=\"center\" valign=\"top\" width=\"100%\" style=\"background-color: #f7f7f7;\" class=\"content-padding\">
      <center>
        <table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\">
          <tr>
            <td class=\"header-lg\">
                Merci pour votre achat!
            </td>
            <td>Commande: #{{order.id}}</td>
          </tr>
          <tr>
            <td class=\"mini-block-container\">
              <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td class=\"mini-container-left\">
                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tr>
                        <td class=\"mini-block-padding\">
                          <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse:separate !important;\">
                            <tr>
                              <td class=\"mini-block\">
                                <span class=\"header-sm\">Payeur</span><br />
                                {{order.name}} <br />
                                {{order.city}} <br />
                                {{order.address}} <br />
                                {{order.phone}} <br />
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class=\"mini-container-right\">
                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tr>
                        <td class=\"mini-block-padding\">
                          <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse:separate !important;\">
                            <tr>
                              <td class=\"mini-block\">
                                <span class=\"header-sm\">Date</span><br />
                                {{order.createdAt|date(\"F jS \\\\a\\\\t g:ia\")}} <br />
                                <br />
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  
  <tr>
     <td align=\"center\" valign=\"top\" width=\"100%\" style=\"background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;\">
      <center>
        <table cellpadding=\"1\" cellspacing=\"1\" width=\"600\" class=\"w320\">
            <tr>
              <td class=\"item-table\">
                <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                  <tr>
                    <td class=\"title-dark\" width=\"300\">
                       Produit
                    </td>
                   
                    <td class=\"title-dark\" width=\"97\">
                      Prix
                    </td>
                     <td class=\"title-dark\" width=\"97\">
                      Quantité
                    </td>
                    <td class=\"title-dark\" width=\"97\">
                      Total
                    </td>
                  </tr>

                    {% for item in orderDetail %}
                  <tr>
                    <td class=\"item-col item\">
                      <table cellspacing=\"0\"  cellpadding=\"0\" width=\"100%\">
                        <tr>
                          <td class=\"product\">
                            <span style=\"color: #4d4d4d; font-weight:bold;\">{{item.name}}</span>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class=\"item-col\">
                      {{item.price}} FCFA
                    </td>
                    <td class=\"item-col\">
                      {{item.quantity}}
                    </td>
                    <td class=\"item-col\">
                      {{item.quantity * item.price }} FCFA
                    </td>
                  </tr>
                    {% endfor %}

               

                  <tr>
                    <td class=\"item-col item mobile-row-padding\">Total</td>
                    <td class=\"item-col price\">{{order.amount}} FCFA</td>
                  </tr>

                </table>
              </td>
            </tr>
        </table>
      </center>
    </td>
  </tr>
  
  <tr>
    <td align=\"center\" valign=\"top\" width=\"100%\" style=\"background-color: #f7f7f7; height: 100px;\">
      <center>
        <table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\">
          <tr>
            <td style=\"padding: 25px 0 25px\">
              <strong>©Museum 2024</strong><br />
               www.museum.ndlpixel.com
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</body>
</html>
", "email/confirmation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/apps/muzeum/templates/email/confirmation.html.twig");
    }
}
