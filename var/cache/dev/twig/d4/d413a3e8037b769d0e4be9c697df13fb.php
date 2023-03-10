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

/* athlete/index.html.twig */
class __TwigTemplate_8e6bbc3789f41055ae4aa9d1b7c836b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "athlete/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "athlete/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "athlete/index.html.twig", 1);
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

        echo "Athlete index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_code($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "code"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "code"));

        // line 6
        echo "<br>
<br>
<br>
<br>
<br>
 <h1>Athlete index</h1>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
              <script>
\$(document).ready(function(){
  \$(\"#myInput\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\"#myTable tr\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    
<form class=\"d-flex align-items-center col-12 col-md-8 col-lg-3\">
               <span class=\"position-absolute pl-3 search-icon\">
                <i class=\"fe fe-search\"></i>
              </span>
<input type=\"search\" id=\"myInput\" class=\"form-control pl-6\" placeholder=\"Search \" />
          
            </form>
 ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "<br>
    <table class=\"table\" id=\"myTable\">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>actions</th>
             
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["athletes"]) || array_key_exists("athletes", $context) ? $context["athletes"] : (function () { throw new RuntimeError('Variable "athletes" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["athlete"]) {
            // line 52
            echo "        
            <tr>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "prenom", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "Age", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "poids", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "taille", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                 
           
        
                <td>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_athlete_show", ["id" => twig_get_attribute($this->env, $this->source, $context["athlete"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_athlete_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["athlete"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">edit</a>
                   
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_com", ["id" => twig_get_attribute($this->env, $this->source, $context["athlete"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">NewCompetition</a>
                    
                    
                    
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athlete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        
        </tbody>
    </table>

    <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_athlete_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "athlete/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 82,  214 => 78,  205 => 74,  193 => 67,  188 => 65,  184 => 64,  176 => 59,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  152 => 52,  147 => 51,  128 => 34,  119 => 32,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Athlete index{% endblock %}

{% block code %}
<br>
<br>
<br>
<br>
<br>
 <h1>Athlete index</h1>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
              <script>
\$(document).ready(function(){
  \$(\"#myInput\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\"#myTable tr\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    
<form class=\"d-flex align-items-center col-12 col-md-8 col-lg-3\">
               <span class=\"position-absolute pl-3 search-icon\">
                <i class=\"fe fe-search\"></i>
              </span>
<input type=\"search\" id=\"myInput\" class=\"form-control pl-6\" placeholder=\"Search \" />
          
            </form>
 {% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">{{ message }}</div>
{% endfor %}
<br>
    <table class=\"table\" id=\"myTable\">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>actions</th>
             
               
            </tr>
        </thead>
        <tbody>
        {% for athlete in athletes %}
        
            <tr>
                <td>{{ athlete.id }}</td>
                <td>{{ athlete.name }}</td>
                <td>{{ athlete.prenom }}</td>
                <td>{{ athlete.Age }}</td>
                <td>{{ athlete.poids }}</td>
                <td>{{ athlete.taille }}</td>
                 
           
        
                <td>
                    <a href=\"{{ path('app_athlete_show', {'id': athlete.id}) }}\">show</a>
                    <a href=\"{{ path('app_athlete_edit', {'id': athlete.id}) }}\">edit</a>
                   
                    <a href=\"{{ path('app_com', {'id': athlete.id}) }}\">NewCompetition</a>
                    
                    
                    
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        
        </tbody>
    </table>

    <a href=\"{{ path('app_athlete_new') }}\">Create new</a>
{% endblock %}", "athlete/index.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\athlete\\index.html.twig");
    }
}
