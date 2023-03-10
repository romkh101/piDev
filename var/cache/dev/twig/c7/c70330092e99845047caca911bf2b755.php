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

/* back/index.html.twig */
class __TwigTemplate_e500e65bddcc9a1fc877d88857d0afed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/index.html.twig", 1);
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

        echo "Evennement index";
        
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
        echo "    <h1>Evennement index</h1>

    <table  class=\"table\" id=\"calendar\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Nb_max_part</th>             
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backs"]) || array_key_exists("backs", $context) ? $context["backs"] : (function () { throw new RuntimeError('Variable "backs" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["back"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["back"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["back"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["back"], "date", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["back"], "date", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["back"], "time", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["back"], "time", [], "any", false, false, false, 26), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["back"], "nbMaxPart", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["back"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["back"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["back"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['back'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_new");
        echo "\">Create new</a>

   <script>
  // Get the table rows from the HTML table
  const tableRows = document.querySelectorAll('#calendar tbody tr');

  // Loop through the table rows
  tableRows.forEach((row) => {
    // Extract the date and name data from the table row
    const dateStr = row.querySelector('td:nth-child(3)').textContent;
    const name = row.querySelector('td:nth-child(2)').textContent;

    // Create a Date object from the date string
    const date = new Date(dateStr);

    // Create a new Date object for the first day of the month
    const firstDayOfMonth = new Date(date.getFullYear(), date.getMonth(), 1);

    // Create a new row for the calendar
    const newRow = document.createElement('tr');

    // Loop through the days of the month
    for (let i = 0; i < 31; i++) {
      const cell = document.createElement('td');

      // Calculate the date of the current cell
      const cellDate = new Date(firstDayOfMonth.getFullYear(), firstDayOfMonth.getMonth(), i + 1);

      // If the cell date matches the row date, add the name to the cell
      if (cellDate.toDateString() === date.toDateString()) {
        cell.textContent = name;
      }

      newRow.appendChild(cell);
    }

    // Add the new row to the calendar table
    document.querySelector('#calendar').appendChild(newRow);
  });
</script>
<!-- HTML calendar structure -->
<div class=\"calendar\">
  <div class=\"calendar-header\">
    <button class=\"prev-button\">&lt;</button>
    <h2 class=\"month-year\"></h2>
    <button class=\"next-button\">&gt;</button>
  </div>
  <table class=\"calendar-body\">
    <thead>
      <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  160 => 39,  151 => 35,  142 => 31,  138 => 30,  133 => 28,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Evennement index{% endblock %}

{% block body %}
    <h1>Evennement index</h1>

    <table  class=\"table\" id=\"calendar\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Nb_max_part</th>             
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for back in backs %}
            <tr>
                <td>{{ back.id }}</td>
                <td>{{ back.name }}</td>
                <td>{{ back.date ? back.date|date('Y-m-d') : '' }}</td>
                <td>{{ back.time ? back.time|date('H:i:s') : '' }}</td>
                <td>{{ back.nbMaxPart }}</td>
                <td>{{ back.description }}</td>
                <td>
                    <a href=\"{{ path('app_back_show', {'id': back.id}) }}\">show</a>
                    <a href=\"{{ path('app_back_edit', {'id': back.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_back_new') }}\">Create new</a>

   <script>
  // Get the table rows from the HTML table
  const tableRows = document.querySelectorAll('#calendar tbody tr');

  // Loop through the table rows
  tableRows.forEach((row) => {
    // Extract the date and name data from the table row
    const dateStr = row.querySelector('td:nth-child(3)').textContent;
    const name = row.querySelector('td:nth-child(2)').textContent;

    // Create a Date object from the date string
    const date = new Date(dateStr);

    // Create a new Date object for the first day of the month
    const firstDayOfMonth = new Date(date.getFullYear(), date.getMonth(), 1);

    // Create a new row for the calendar
    const newRow = document.createElement('tr');

    // Loop through the days of the month
    for (let i = 0; i < 31; i++) {
      const cell = document.createElement('td');

      // Calculate the date of the current cell
      const cellDate = new Date(firstDayOfMonth.getFullYear(), firstDayOfMonth.getMonth(), i + 1);

      // If the cell date matches the row date, add the name to the cell
      if (cellDate.toDateString() === date.toDateString()) {
        cell.textContent = name;
      }

      newRow.appendChild(cell);
    }

    // Add the new row to the calendar table
    document.querySelector('#calendar').appendChild(newRow);
  });
</script>
<!-- HTML calendar structure -->
<div class=\"calendar\">
  <div class=\"calendar-header\">
    <button class=\"prev-button\">&lt;</button>
    <h2 class=\"month-year\"></h2>
    <button class=\"next-button\">&gt;</button>
  </div>
  <table class=\"calendar-body\">
    <thead>
      <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>

{% endblock %}", "back/index.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\back\\index.html.twig");
    }
}
