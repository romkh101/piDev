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

/* back/show.html.twig */
class __TwigTemplate_7f867d9d80f44e10bc9ad950a3819935 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/show.html.twig", 1);
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

        echo "Evennement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    <h1>Evennement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 24, $this->source); })()), "time", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 24, $this->source); })()), "time", [], "any", false, false, false, 24), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Nb_max_part</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 28, $this->source); })()), "nbMaxPart", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>

             <tr> <th> <h1>Participants </h1> </th> </tr>
 
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 37, $this->source); })()), "participants", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 38
            echo "            <tr>
                <th class=\"table-header\">name</th>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_assign_participant", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">Confirmer</a>

    ";
        // line 50
        echo twig_include($this->env, $context, "back/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 50,  169 => 48,  165 => 47,  160 => 45,  156 => 43,  147 => 40,  143 => 38,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Evennement{% endblock %}

{% block body %}
    <h1>Evennement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ back.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ back.name }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ back.date ? back.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>{{ back.time ? back.time|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Nb_max_part</th>
                <td>{{ back.nbMaxPart }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ back.description }}</td>
            </tr>

             <tr> <th> <h1>Participants </h1> </th> </tr>
 
            {% for participant in back.participants %}
            <tr>
                <th class=\"table-header\">name</th>
                <td>{{ participant.nom }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <a href=\"{{ path('app_back_index') }}\">back to list</a>

    <a href=\"{{ path('app_back_edit', {'id': back.id}) }}\">edit</a>
    <a class=\"btn btn-primary\" href=\"{{ path('back_assign_participant', {'id': back.id}) }}\">Confirmer</a>

    {{ include('back/_delete_form.html.twig') }}
{% endblock %}
", "back/show.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\back\\show.html.twig");
    }
}
