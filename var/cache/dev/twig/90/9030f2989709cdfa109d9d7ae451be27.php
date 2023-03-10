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

/* tournoi/show.html.twig */
class __TwigTemplate_e77f9ba6f193ff04814bf647baa5fbf8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'code' => [$this, 'block_code'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi/show.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "tournoi/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Tournoi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/tournoi.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_code($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "code"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "code"));

        // line 10
        echo "    <br>
    <br>
    <br>
    <h1>Tournoi</h1>
    <br>
    <br>
    <table class=\"table table-bordered table-striped\">
        <tbody>
            <tr>
                <th class=\"table-header\">Id</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"table-header\">titre</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 26, $this->source); })()), "athletes", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["athlete"]) {
            // line 27
            echo "            <tr>
                <th class=\"table-header\">name</th>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athlete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            <tr>
                <th class=\"table-header\">Date</th>
                <td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_index");
        echo "\">back to list</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">edit</a>
    
    <a class=\"btn btn-primary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tournoi_assign_athlete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">Participer</a>
<a class=\"btn btn-primary\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_pdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\">Download PDF</a>

    ";
        // line 46
        echo twig_include($this->env, $context, "tournoi/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tournoi/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 46,  179 => 44,  175 => 43,  170 => 41,  165 => 39,  157 => 34,  153 => 32,  144 => 29,  140 => 27,  136 => 26,  131 => 24,  124 => 20,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Tournoi{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/tournoi.css') }}\" />
{% endblock %}

{% block code %}
    <br>
    <br>
    <br>
    <h1>Tournoi</h1>
    <br>
    <br>
    <table class=\"table table-bordered table-striped\">
        <tbody>
            <tr>
                <th class=\"table-header\">Id</th>
                <td>{{ tournoi.id }}</td>
            </tr>
            <tr>
                <th class=\"table-header\">titre</th>
                <td>{{ tournoi.titre }}</td>
            </tr>
            {% for athlete in tournoi.athletes %}
            <tr>
                <th class=\"table-header\">name</th>
                <td>{{ athlete.name }}</td>
            </tr>
            {% endfor %}
            <tr>
                <th class=\"table-header\">Date</th>
                <td>{{ tournoi.date ? tournoi.date|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('app_tournoi_index') }}\">back to list</a>

    <a class=\"btn btn-primary\" href=\"{{ path('app_tournoi_edit', {'id': tournoi.id}) }}\">edit</a>
    
    <a class=\"btn btn-primary\" href=\"{{ path('tournoi_assign_athlete', {'id': tournoi.id}) }}\">Participer</a>
<a class=\"btn btn-primary\" href=\"{{ path('app_tournoi_pdf', {'id': tournoi.id}) }}\">Download PDF</a>

    {{ include('tournoi/_delete_form.html.twig') }}
{% endblock %}
", "tournoi/show.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\tournoi\\show.html.twig");
    }
}
