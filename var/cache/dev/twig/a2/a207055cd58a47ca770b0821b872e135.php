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

/* user/pdf.html.twig */
class __TwigTemplate_ffd48661f4118b2013289ce600c5e522 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "email", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
    <style>
        .logo {
            width: 250px;
            height: 200px;
            float: left;
            margin-right: 20px;
        }
        .athlete {
            page-break-after: always;
        }
       
    </style>
</head>
<body>
<img src=\"data:image/png;base64,";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["image_data"]) || array_key_exists("image_data", $context) ? $context["image_data"] : (function () { throw new RuntimeError('Variable "image_data" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\" >
    <h1>User</h1>
 <p>voici les coordonnes de cet utilisateur
            <table border='4' >
            <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>email</th>
            
            </tr>
            <tr>
    <td>       ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
         <td>   ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
           <td>  ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
</tr>

            
             
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  85 => 32,  81 => 31,  67 => 20,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{{ user.email }}</title>
    <style>
        .logo {
            width: 250px;
            height: 200px;
            float: left;
            margin-right: 20px;
        }
        .athlete {
            page-break-after: always;
        }
       
    </style>
</head>
<body>
<img src=\"data:image/png;base64,{{ image_data }}\" alt=\"Logo\" class=\"logo\" >
    <h1>User</h1>
 <p>voici les coordonnes de cet utilisateur
            <table border='4' >
            <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>email</th>
            
            </tr>
            <tr>
    <td>       {{ user.nom }}</td>
         <td>   {{ user.prenom }}</td>
           <td>  {{ user.email }}</td>
</tr>

            
             
</body>
</html>
", "user/pdf.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\user\\pdf.html.twig");
    }
}
