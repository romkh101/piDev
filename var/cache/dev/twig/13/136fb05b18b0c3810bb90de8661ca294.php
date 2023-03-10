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

/* tournoi/index.html.twig */
class __TwigTemplate_7305cdc3afca4d2187fc68e6d46f14da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "tournoi/index.html.twig", 1);
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

        echo "Tournoi index";
        
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
        echo "    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>Tournoi index</h1>
    <br>
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
    <br>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    <table class=\"table table-bordered\" id=\"myTable\">
        <thead>
            <tr>
                <th class=\"font-weight-bold\">Id</th>
                <th class=\"font-weight-bold\">Titre</th>
                <th class=\"font-weight-bold\">Date</th>
                <th class=\"font-weight-bold\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tournoi"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 48
            echo "                <tr>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "titre", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            ((twig_get_attribute($this->env, $this->source, $context["tournoi"], "date", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "date", [], "any", false, false, false, 51), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>
                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">show</a>
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>

    ";
        // line 65
        if ((twig_length_filter($this->env, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 65, $this->source); })())) > 0)) {
            // line 66
            echo "        <ul class=\"pagination justify-content-center\">
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 67, $this->source); })()), "page", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 68
                echo "                <li ";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "isCurrentPage", [], "any", false, false, false, 68)) {
                    echo "class=\"active\"";
                }
                echo ">
                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_index", ["page" => twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 69), "q" => (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 69, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 69), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </ul>
   
        ";
            // line 74
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 74, $this->source); })()));
            echo "
    ";
        }
        // line 76
        echo "
    <a class=\"btn btn-primary\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tournoi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 77,  227 => 76,  222 => 74,  218 => 72,  207 => 69,  200 => 68,  196 => 67,  193 => 66,  191 => 65,  186 => 62,  177 => 58,  168 => 54,  164 => 53,  159 => 51,  155 => 50,  151 => 49,  148 => 48,  143 => 47,  131 => 37,  122 => 35,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Tournoi index{% endblock %}

{% block code %}
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>Tournoi index</h1>
    <br>
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
    <br>
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">{{ message }}</div>
{% endfor %}
    <table class=\"table table-bordered\" id=\"myTable\">
        <thead>
            <tr>
                <th class=\"font-weight-bold\">Id</th>
                <th class=\"font-weight-bold\">Titre</th>
                <th class=\"font-weight-bold\">Date</th>
                <th class=\"font-weight-bold\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for tournoi in tournoi %}
                <tr>
                    <td>{{ tournoi.id }}</td>
                    <td>{{ tournoi.titre }}</td>
                    <td>{{ tournoi.date ? tournoi.date|date('Y-m-d H:i:s') : '' }}</td>
                    <td>
                        <a href=\"{{ path('app_tournoi_show', {'id': tournoi.id}) }}\">show</a>
                        <a href=\"{{ path('app_tournoi_edit', {'id': tournoi.id}) }}\">edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    {% if tournoi|length > 0 %}
        <ul class=\"pagination justify-content-center\">
            {% for page in tournoi.page %}
                <li {% if page.isCurrentPage %}class=\"active\"{% endif %}>
                    <a href=\"{{ path('app_tournoi_index', {'page': page.number, 'q': q}) }}\">{{ page.number }}</a>
                </li>
            {% endfor %}
        </ul>
   
        {{ knp_pagination_render(tournoi) }}
    {% endif %}

    <a class=\"btn btn-primary\" href=\"{{ path('app_tournoi_new') }}\">Create new</a>
{% endblock %}
", "tournoi/index.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\tournoi\\index.html.twig");
    }
}
