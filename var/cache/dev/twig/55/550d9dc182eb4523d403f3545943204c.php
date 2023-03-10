<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* emails/reset_password.html.twig */
class __TwigTemplate_8a04f758d4b6bda1629f5b82d7c5a226 extends Template
{
    private $source;
    private $macros = [];

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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reset_password.html.twig"));

        // line 2
        echo "
<p>Click the link below to reset your password:</p>
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">Reset Password</a>






<head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
    <title>Reset Password Email Template</title>
    <meta name=\"description\" content=\"Reset Password Email Template.\">
    <style type=\"text/css\">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" style=\"margin: 0px; background-color: #f2f3f8;\" leftmargin=\"0\">
    <!--100% body table-->
    <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#f2f3f8\"
        style=\"@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;\">
        <tr>
            <td>
                <table style=\"background-color: #f2f3f8; max-width:670px;  margin:0 auto;\" width=\"100%\" border=\"0\"
                    align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                    <tr>
                        <td style=\"height:80px;\">&nbsp;</td>
                    </tr>
                 
                    <tr>
                        <td style=\"height:20px;\">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                                style=\"max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);\">
                                <tr>
                                    <td style=\"height:40px;\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style=\"padding:0 35px;\">
                                        <h1 style=\"color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;\">You have
                                            requested to reset your password</h1>
                                        <span
                                            style=\"display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;\"></span>
                                        <p style=\"color:#455056; font-size:15px;line-height:24px; margin:0;\">
                                            We cannot simply send you your old password. A unique link to reset your
                                            password has been generated for you. To reset your password, click the
                                            following link and follow the instructions.
                                        </p>
                                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\"
                                            style=\"background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;\">Reset
                                            Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=\"height:40px;\">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style=\"height:20px;\">&nbsp;</td>
                    </tr>
                   
                    <tr>
                        <td style=\"height:80px;\">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 53,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/emails/reset_password.html.twig #}

<p>Click the link below to reset your password:</p>
<a href=\"{{ url}}\">Reset Password</a>






<head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
    <title>Reset Password Email Template</title>
    <meta name=\"description\" content=\"Reset Password Email Template.\">
    <style type=\"text/css\">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" style=\"margin: 0px; background-color: #f2f3f8;\" leftmargin=\"0\">
    <!--100% body table-->
    <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#f2f3f8\"
        style=\"@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;\">
        <tr>
            <td>
                <table style=\"background-color: #f2f3f8; max-width:670px;  margin:0 auto;\" width=\"100%\" border=\"0\"
                    align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                    <tr>
                        <td style=\"height:80px;\">&nbsp;</td>
                    </tr>
                 
                    <tr>
                        <td style=\"height:20px;\">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                                style=\"max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);\">
                                <tr>
                                    <td style=\"height:40px;\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style=\"padding:0 35px;\">
                                        <h1 style=\"color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;\">You have
                                            requested to reset your password</h1>
                                        <span
                                            style=\"display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;\"></span>
                                        <p style=\"color:#455056; font-size:15px;line-height:24px; margin:0;\">
                                            We cannot simply send you your old password. A unique link to reset your
                                            password has been generated for you. To reset your password, click the
                                            following link and follow the instructions.
                                        </p>
                                        <a href=\"{{ url}}\"
                                            style=\"background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;\">Reset
                                            Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=\"height:40px;\">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style=\"height:20px;\">&nbsp;</td>
                    </tr>
                   
                    <tr>
                        <td style=\"height:80px;\">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>


", "emails/reset_password.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\emails\\reset_password.html.twig");
    }
}
