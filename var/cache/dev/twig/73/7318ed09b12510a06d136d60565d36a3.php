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

/* tournoi/pdf.html.twig */
class __TwigTemplate_f0ecbf5c70a5eb0a5622daaa595740db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
    <style>
        .logo {
            width: 100px;
            height: 100px;
            float: left;
            margin-right: 20px;
        }
        .athlete {
            page-break-after: always;
        }
    </style>
</head>
<body>
   
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 20, $this->source); })()), "athletes", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["athlete"]) {
            // line 21
            echo "     <img src=\"data:image/png;base64,";
            echo twig_escape_filter($this->env, (isset($context["image_data"]) || array_key_exists("image_data", $context) ? $context["image_data"] : (function () { throw new RuntimeError('Variable "image_data" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" alt=\"Logo\" class=\"logo\">
    <h1 style=\"margin-bottom: 50px;\">Certificat de participation</h1>

        <div class=\"athlete\">
            <p>Ce certificat atteste que ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo " a participé au tournoi ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), "html", null, true);
            echo " organisé par notre association.</p>
            <p>Date : ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</p>
            <p>Signature : ____________________________</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athlete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tournoi/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  85 => 26,  79 => 25,  71 => 21,  67 => 20,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{{ tournoi.titre }}</title>
    <style>
        .logo {
            width: 100px;
            height: 100px;
            float: left;
            margin-right: 20px;
        }
        .athlete {
            page-break-after: always;
        }
    </style>
</head>
<body>
   
    {% for athlete in tournoi.athletes %}
     <img src=\"data:image/png;base64,{{ image_data }}\" alt=\"Logo\" class=\"logo\">
    <h1 style=\"margin-bottom: 50px;\">Certificat de participation</h1>

        <div class=\"athlete\">
            <p>Ce certificat atteste que {{ athlete.name }} a participé au tournoi {{ tournoi.titre }} organisé par notre association.</p>
            <p>Date : {{ tournoi.date | date(\"d/m/Y\") }}</p>
            <p>Signature : ____________________________</p>
        </div>
    {% endfor %}
</body>
</html>
", "tournoi/pdf.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\tournoi\\pdf.html.twig");
    }
}
