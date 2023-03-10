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

/* actualite/afficher.html.twig */
class __TwigTemplate_3cc178f537b788bd1b96c35ffc04bc1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/afficher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/afficher.html.twig"));

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
\t\t<title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
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
\t      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t      <![endif]-->
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
\t\t\t\t<div class=\"sidebar_blog_2\">
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
        // line 139
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
\t\t\t\t
\t\t\t\t\t<div class=\"row column_title\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"page_title\">
\t\t\t\t\t\t\t\t<h2>Nos actualités</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- row -->


\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<!-- table section -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
        // line 201
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'form');
        echo "
\t\t\t\t\t\t<div class=\"white_shd full margin_bottom_30\">
\t\t\t\t\t\t\t<div class=\"full graph_head\">
\t\t\t\t\t\t\t\t<div class=\"heading1 margin_0\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"table_section padding_infor_info\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive-sm\">
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Contenu</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Auteur</th>
                                 <th>Categorie</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Operations</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 220, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 222), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Titre", [], "any", false, false, false, 223), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Contenu", [], "any", false, false, false, 224), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/actualites/" . twig_get_attribute($this->env, $this->source, $context["a"], "Image", [], "any", false, false, false, 225))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Image", [], "any", false, false, false, 225), "html", null, true);
            echo "\" width=\"100\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Auteur", [], "any", false, false, false, 226), "html", null, true);
            echo "</td>
                                                <td>";
            // line 227
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["a"], "Categorie", [], "any", false, false, false, 227))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "Categorie", [], "any", false, false, false, 227), "nom", [], "any", false, false, false, 227), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 228
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Date", [], "any", false, false, false, 228), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierA", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 231)]), "html", null, true);
            echo "\"  class=\"btn btn-warning mx-2\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerA", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 232)]), "html", null, true);
            echo "\" class=\"btn btn-danger mx-2\" >Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_actualite", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 233)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Exporter en PDF</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "\t\t\t\t\t\t\t\t\t</table>
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
        return "actualite/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 238,  334 => 233,  330 => 232,  326 => 231,  320 => 228,  314 => 227,  310 => 226,  304 => 225,  300 => 224,  296 => 223,  292 => 222,  289 => 221,  285 => 220,  263 => 201,  198 => 139,  170 => 114,  162 => 109,  143 => 93,  135 => 88,  106 => 62,  43 => 1,);
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
\t\t<title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
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
\t      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t      <![endif]-->
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
\t\t\t\t<div class=\"sidebar_blog_2\">
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
\t\t\t\t
\t\t\t\t\t<div class=\"row column_title\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"page_title\">
\t\t\t\t\t\t\t\t<h2>Nos actualités</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- row -->


\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<!-- table section -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t{{ form(form) }}
\t\t\t\t\t\t<div class=\"white_shd full margin_bottom_30\">
\t\t\t\t\t\t\t<div class=\"full graph_head\">
\t\t\t\t\t\t\t\t<div class=\"heading1 margin_0\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"table_section padding_infor_info\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive-sm\">
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Contenu</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Auteur</th>
                                 <th>Categorie</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Operations</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% for a in actualite %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{a.id}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{a.Titre}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{a.Contenu}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/images/actualites/' ~ a.Image) }}\" alt=\"{{ a.Image }}\" width=\"100\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{a.Auteur}}</td>
                                                <td>{% if a.Categorie is not null %}{{a.Categorie.nom}}{% endif %}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ a.Date|date('Y-m-d H:i:s') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ModifierA', {'id': a.id}) }}\"  class=\"btn btn-warning mx-2\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('SupprimerA', {'id': a.id}) }}\" class=\"btn btn-danger mx-2\" >Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('export_actualite', {'id': a.id}) }}\" class=\"btn btn-primary\">Exporter en PDF</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
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
", "actualite/afficher.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\actualite\\afficher.html.twig");
    }
}
