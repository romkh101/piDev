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

/* competition/index.html.twig */
class __TwigTemplate_e3195628b2cc3e090086bb9890580dd1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "competition/index.html.twig", 1);
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

        echo "Competition index";
        
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
    <h1>Competition index</h1>
<br>
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
    <table class=\"table table-bordered\" id=\"myTable\">
        <thead>
            <tr>
                <th class=\"font-weight-bold\">Id</th>
                <th class=\"font-weight-bold\">NameAthlete</th>
                <th class=\"font-weight-bold\">NbrTrophet</th>
                <th class=\"font-weight-bold\">NbrParticipationInternational</th>
                <th class=\"font-weight-bold\">ClassementMondial</th>
                <th class=\"font-weight-bold\">Niveau</th>
                <th class=\"font-weight-bold\">actions</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 47
            echo "            <tr>
                <td class=\"font-weight-bold\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
               <td>
    ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["competition"], "athlete", [], "any", false, false, false, 50)) {
                // line 51
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["competition"], "athlete", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                echo "
    ";
            }
            // line 53
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbrTrophet", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbrParticipationInternational", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "ClaMondial", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "Niveau", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                 
                <td>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"6\" class=\"font-weight-bold\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 72,  194 => 69,  185 => 65,  176 => 61,  172 => 60,  166 => 57,  162 => 56,  158 => 55,  154 => 54,  151 => 53,  145 => 51,  143 => 50,  138 => 48,  135 => 47,  130 => 46,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Competition index{% endblock %}

{% block code %}
<br>
<br>
<br>
<br>
<br>
    <h1>Competition index</h1>
<br>
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
    <table class=\"table table-bordered\" id=\"myTable\">
        <thead>
            <tr>
                <th class=\"font-weight-bold\">Id</th>
                <th class=\"font-weight-bold\">NameAthlete</th>
                <th class=\"font-weight-bold\">NbrTrophet</th>
                <th class=\"font-weight-bold\">NbrParticipationInternational</th>
                <th class=\"font-weight-bold\">ClassementMondial</th>
                <th class=\"font-weight-bold\">Niveau</th>
                <th class=\"font-weight-bold\">actions</th>
                
            </tr>
        </thead>
        <tbody>
        {% for competition in competitions %}
            <tr>
                <td class=\"font-weight-bold\">{{ competition.id }}</td>
               <td>
    {% if competition.athlete %}
        {{ competition.athlete.name }}
    {% endif %}
</td>
                <td>{{ competition.nbrTrophet }}</td>
                <td>{{ competition.nbrParticipationInternational }}</td>
                <td>{{ competition.ClaMondial }}</td>
                <td>{{ competition.Niveau }}</td>
                 
                <td>
                    <a href=\"{{ path('app_competition_show', {'id': competition.id}) }}\">show</a>
                    <a href=\"{{ path('app_competition_edit', {'id': competition.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\" class=\"font-weight-bold\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_competition_new') }}\">Create new</a>
{% endblock %}
", "competition/index.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\competition\\index.html.twig");
    }
}
