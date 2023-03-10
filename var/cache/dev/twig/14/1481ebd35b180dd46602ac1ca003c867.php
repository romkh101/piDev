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

/* categorie/afficherC.html.twig */
class __TwigTemplate_fef40c2b74c7338c35d8b5accc916704 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/afficherC.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/afficherC.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<!-- basic -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<!-- mobile metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta
\t\tname=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
\t\t<!-- site metas -->
\t\t<title>ABC-Sports</title>
\t\t<meta name=\"keywords\" content=\"\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">
\t\t<!-- site icon -->
\t\t<link
\t\trel=\"icon\" href=\"images/fevicon.png\" type=\"image/png\"/>
\t\t<!-- bootstrap css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>
\t\t<!-- site css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"style.css\"/>
\t\t<!-- responsive css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/responsive.css\"/>
\t\t<!-- color css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/colors.css\"/>
\t\t<!-- select bootstrap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/bootstrap-select.css\"/>
\t\t<!-- scrollbar css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/perfect-scrollbar.css\"/>
\t\t<!-- custom css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/custom.css\"/>
\t\t<!-- calendar file css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"js/semantic.min.css\"/>
\t\t<!-- fancy box js -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/jquery.fancybox.css\"/>
\t<!--[if lt IE 9]>
\t\t\t      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t\t      <![endif]-->
\t</head>
\t<body class=\"inner_page tables_page\">
\t\t<div class=\"full_container\">
\t\t\t<div
\t\t\t\tclass=\"inner_container\">
\t\t\t\t<!-- Sidebar  -->
\t\t\t\t<nav id=\"sidebar\">
\t\t\t\t\t<div class=\"sidebar_blog_1\">
\t\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t\t<div class=\"logo_section\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherA");
        echo "\"><img class=\"logo_icon img-responsive\" src=\"images/logo/logo_icon.png\" alt=\"#\"/></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar_user_info\">
\t\t\t\t\t\t\t<div class=\"icon_setting\"></div>
\t\t\t\t\t\t\t<div class=\"user_profle_side\">
\t\t\t\t\t\t\t\t<div class=\"user_img\"><img class=\"img-responsive\" src=\"images/layout_img/user_img.jpg\" alt=\"#\"/></div>
\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t<h6>John David</h6>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span class=\"online_animation\"></span>
\t\t\t\t\t\t\t\t\t\tOnline</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar_blog_2\">
\t\t\t\t\t\t<h4>General</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled components\">
\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#dashboard\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table purple_color2\"></i>
\t\t\t\t\t\t\t\t\t<span>Nos actualités</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"collapse list-unstyled\" id=\"dashboard\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherA");
        echo "\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Modifier une actualité</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterA");
        echo "\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Ajouter une actualité</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#additional_page\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clone yellow_color\"></i>
\t\t\t\t\t\t\t\t\t<span>Nos catégories</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"collapse list-unstyled\" id=\"additional_page\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherC");
        echo "\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Modifier une catégorie</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterC");
        echo "\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Ajouter une catégorie</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</ul>
\t\t\t</li>
\t\t</nav>
\t\t<!-- end sidebar -->
\t\t<!-- right content -->
\t\t<div
\t\t\tid=\"content\">
\t\t\t<!-- topbar -->
\t\t\t<div class=\"topbar\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t<div class=\"full\">
\t\t\t\t\t\t<button type=\"button\" id=\"sidebarCollapse\" class=\"sidebar_toggle\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"logo_section\">
\t\t\t\t\t\t\t<a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherA");
        echo "\"><img class=\"img-responsive\" src=\"\"/></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right_topbar\">
\t\t\t\t\t\t\t<div class=\"icon_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">2</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"user_profile_dd\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img class=\"img-responsive rounded-circle\" src=\"images/layout_img/user_img.jpg\" alt=\"#\"/><span class=\"name_user\">John David</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"profile.html\">My Profile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"help.html\">Help</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Log Out</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- end topbar -->
\t\t\t<!-- dashboard inner -->
\t\t\t<div class=\"midde_cont\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row column_title\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"page_title\">
\t\t\t\t\t\t\t\t<h2>Nos catégories</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- row -->


\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<!-- table section -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"white_shd full margin_bottom_30\">
\t\t\t\t\t\t\t<div class=\"full graph_head\">
\t\t\t\t\t\t\t\t<div class=\"heading1 margin_0\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"table_section padding_infor_info\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive-sm\">
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Id</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Operations</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 216), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Nom", [], "any", false, false, false, 217), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierC", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 220)]), "html", null, true);
            echo "\" class=\"btn btn-warning mx-2\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerC", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 221)]), "html", null, true);
            echo "\" class=\"btn btn-danger mx-2\">Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- footer -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"footer\">
\t\t\t\t\t<p>Copyright © 2023 ABC-Sports. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end dashboard inner -->
\t</body>
</html></div></div><!-- model popup --><!-- The Modal --><div class=\"modal fade\" id=\"myModal\"><div class=\"modal-dialog\">
<div
\tclass=\"modal-content\">
\t<!-- Modal Header -->
\t<div class=\"modal-header\">
\t\t<h4 class=\"modal-title\">Modal Heading</h4>
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t</div>
\t<!-- Modal body -->
\t<div class=\"modal-body\">
\t\tModal body..
\t</div>
\t<!-- Modal footer -->
\t<div class=\"modal-footer\">
\t\t<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
\t</div>
</div></div></div><!-- end model popup --></div><!-- jQuery --><script src=\"js/jquery.min.js\"></script><script src=\"js/popper.min.js\"></script><script src=\"js/bootstrap.min.js\"></script><!-- wow animation --><script src=\"js/animate.js\"></script><!-- select country --><script src=\"js/bootstrap-select.js\"></script><!-- owl carousel --><script src=\"js/owl.carousel.js\"></script><!-- chart js --><script src=\"js/Chart.min.js\"></script><script src=\"js/Chart.bundle.min.js\"></script><script src=\"js/utils.js\"></script><script src=\"js/analyser.js\"></script><!-- nice scrollbar --><script src=\"js/perfect-scrollbar.min.js\"></script><script>var ps = new PerfectScrollbar('#sidebar');</script><!-- fancy box js --><script src=\"js/jquery-3.3.1.min.js\"></script><script src=\"js/jquery.fancybox.min.js\"></script><!-- custom js --><script src=\"js/custom.js\"></script><!-- calendar file css --><script src=\"js/semantic.min.js\"></script></body></html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "categorie/afficherC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 226,  297 => 221,  293 => 220,  287 => 217,  283 => 216,  280 => 215,  276 => 214,  197 => 138,  170 => 114,  162 => 109,  143 => 93,  135 => 88,  106 => 62,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<!-- basic -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<!-- mobile metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta
\t\tname=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
\t\t<!-- site metas -->
\t\t<title>ABC-Sports</title>
\t\t<meta name=\"keywords\" content=\"\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">
\t\t<!-- site icon -->
\t\t<link
\t\trel=\"icon\" href=\"images/fevicon.png\" type=\"image/png\"/>
\t\t<!-- bootstrap css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>
\t\t<!-- site css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"style.css\"/>
\t\t<!-- responsive css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/responsive.css\"/>
\t\t<!-- color css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/colors.css\"/>
\t\t<!-- select bootstrap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/bootstrap-select.css\"/>
\t\t<!-- scrollbar css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/perfect-scrollbar.css\"/>
\t\t<!-- custom css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/custom.css\"/>
\t\t<!-- calendar file css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"js/semantic.min.css\"/>
\t\t<!-- fancy box js -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/jquery.fancybox.css\"/>
\t<!--[if lt IE 9]>
\t\t\t      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t\t      <![endif]-->
\t</head>
\t<body class=\"inner_page tables_page\">
\t\t<div class=\"full_container\">
\t\t\t<div
\t\t\t\tclass=\"inner_container\">
\t\t\t\t<!-- Sidebar  -->
\t\t\t\t<nav id=\"sidebar\">
\t\t\t\t\t<div class=\"sidebar_blog_1\">
\t\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t\t<div class=\"logo_section\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('AfficherA') }}\"><img class=\"logo_icon img-responsive\" src=\"images/logo/logo_icon.png\" alt=\"#\"/></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar_user_info\">
\t\t\t\t\t\t\t<div class=\"icon_setting\"></div>
\t\t\t\t\t\t\t<div class=\"user_profle_side\">
\t\t\t\t\t\t\t\t<div class=\"user_img\"><img class=\"img-responsive\" src=\"images/layout_img/user_img.jpg\" alt=\"#\"/></div>
\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t<h6>John David</h6>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span class=\"online_animation\"></span>
\t\t\t\t\t\t\t\t\t\tOnline</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar_blog_2\">
\t\t\t\t\t\t<h4>General</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled components\">
\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#dashboard\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table purple_color2\"></i>
\t\t\t\t\t\t\t\t\t<span>Nos actualités</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"collapse list-unstyled\" id=\"dashboard\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('AfficherA') }}\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Modifier une actualité</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('AjouterA') }}\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Ajouter une actualité</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#additional_page\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clone yellow_color\"></i>
\t\t\t\t\t\t\t\t\t<span>Nos catégories</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"collapse list-unstyled\" id=\"additional_page\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('AfficherC') }}\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Modifier une catégorie</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('AjouterC') }}\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Ajouter une catégorie</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</ul>
\t\t\t</li>
\t\t</nav>
\t\t<!-- end sidebar -->
\t\t<!-- right content -->
\t\t<div
\t\t\tid=\"content\">
\t\t\t<!-- topbar -->
\t\t\t<div class=\"topbar\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t<div class=\"full\">
\t\t\t\t\t\t<button type=\"button\" id=\"sidebarCollapse\" class=\"sidebar_toggle\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"logo_section\">
\t\t\t\t\t\t\t<a href=\"{{ path('AfficherA') }}\"><img class=\"img-responsive\" src=\"\"/></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right_topbar\">
\t\t\t\t\t\t\t<div class=\"icon_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">2</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"user_profile_dd\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img class=\"img-responsive rounded-circle\" src=\"images/layout_img/user_img.jpg\" alt=\"#\"/><span class=\"name_user\">John David</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"profile.html\">My Profile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"help.html\">Help</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Log Out</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- end topbar -->
\t\t\t<!-- dashboard inner -->
\t\t\t<div class=\"midde_cont\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row column_title\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"page_title\">
\t\t\t\t\t\t\t\t<h2>Nos catégories</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- row -->


\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<!-- table section -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"white_shd full margin_bottom_30\">
\t\t\t\t\t\t\t<div class=\"full graph_head\">
\t\t\t\t\t\t\t\t<div class=\"heading1 margin_0\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"table_section padding_infor_info\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive-sm\">
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Id</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Operations</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t{% for c in categorie %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ c.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ c.Nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ModifierC', {'id': c.id}) }}\" class=\"btn btn-warning mx-2\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('SupprimerC', {'id': c.id}) }}\" class=\"btn btn-danger mx-2\">Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- footer -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"footer\">
\t\t\t\t\t<p>Copyright © 2023 ABC-Sports. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end dashboard inner -->
\t</body>
</html></div></div><!-- model popup --><!-- The Modal --><div class=\"modal fade\" id=\"myModal\"><div class=\"modal-dialog\">
<div
\tclass=\"modal-content\">
\t<!-- Modal Header -->
\t<div class=\"modal-header\">
\t\t<h4 class=\"modal-title\">Modal Heading</h4>
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t</div>
\t<!-- Modal body -->
\t<div class=\"modal-body\">
\t\tModal body..
\t</div>
\t<!-- Modal footer -->
\t<div class=\"modal-footer\">
\t\t<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
\t</div>
</div></div></div><!-- end model popup --></div><!-- jQuery --><script src=\"js/jquery.min.js\"></script><script src=\"js/popper.min.js\"></script><script src=\"js/bootstrap.min.js\"></script><!-- wow animation --><script src=\"js/animate.js\"></script><!-- select country --><script src=\"js/bootstrap-select.js\"></script><!-- owl carousel --><script src=\"js/owl.carousel.js\"></script><!-- chart js --><script src=\"js/Chart.min.js\"></script><script src=\"js/Chart.bundle.min.js\"></script><script src=\"js/utils.js\"></script><script src=\"js/analyser.js\"></script><!-- nice scrollbar --><script src=\"js/perfect-scrollbar.min.js\"></script><script>var ps = new PerfectScrollbar('#sidebar');</script><!-- fancy box js --><script src=\"js/jquery-3.3.1.min.js\"></script><script src=\"js/jquery.fancybox.min.js\"></script><!-- custom js --><script src=\"js/custom.js\"></script><!-- calendar file css --><script src=\"js/semantic.min.js\"></script></body></html>

", "categorie/afficherC.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\categorie\\afficherC.html.twig");
    }
}
