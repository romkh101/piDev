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

/* temp.html.twig */
class __TwigTemplate_5f5dc7230cc8149c6f7d2d71a18ff9ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from doccure.dreamguystech.com/laravel/template/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 19:55:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>
<body>
";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "


";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "</body>
<!-- Mirrored from doccure.dreamguystech.com/laravel/template/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 19:57:01 GMT -->
</html>
<script>
    \$(document).ready(function(){
        // alert(1);
        /*\$('.submenu li a').click(function(){
          \$(.submenu li a).removeClass(\"active\");
          \$(this).addClass(\"active\");
          \$('.has-submenu a').removeClass(\"active\");
          \$('.has-submenu a').addClass(\"active\");
          //\$(this).toggleClass(\"active\");
        });*/
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/plugins/fontawesome/css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/plugins/fontawesome/css/all.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/aos.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "<div class=\"main-wrapper\">
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "

    </script><script src=\"FrontOffice/js/jquery-3.6.0.min.js\"></script>

    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/plugins/swiper/js/swiper.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/slick.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/aos.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "temp.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  232 => 49,  227 => 47,  222 => 45,  217 => 43,  212 => 41,  206 => 37,  196 => 36,  185 => 31,  175 => 30,  163 => 26,  153 => 25,  141 => 21,  136 => 19,  131 => 17,  126 => 15,  122 => 14,  117 => 12,  111 => 10,  101 => 9,  77 => 51,  75 => 36,  70 => 33,  68 => 30,  65 => 29,  63 => 25,  59 => 23,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from doccure.dreamguystech.com/laravel/template/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 19:55:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
{% block stylesheets %}
    <link type=\"image/x-icon\" href=\"{{asset('FrontOffice/img/favicon.png') }}\" rel=\"icon\">

    <link rel=\"stylesheet\" href=\"{{asset('FrontOffice/css/bootstrap.min.css')}}\">

    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/plugins/fontawesome/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/plugins/fontawesome/css/all.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/plugins/swiper/css/swiper.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/css/aos.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/css/style.css') }}\">
{% endblock %}
</head>
<body>
{% block header %}
<div class=\"main-wrapper\">
    
{% endblock %}

{% block body %}

{% endblock %}



{% block javascripts%}


    </script><script src=\"FrontOffice/js/jquery-3.6.0.min.js\"></script>

    <script src=\"{{ asset('FrontOffice/js/bootstrap.bundle.min.js') }}\"></script>

    <script src=\"{{ asset('FrontOffice/plugins/swiper/js/swiper.min.js') }}\"></script>

    <script src=\"{{ asset('FrontOffice/js/slick.js') }}\"></script>

    <script src=\"{{ asset('FrontOffice/js/aos.js') }}\"></script>

    <script src=\"{{ asset('FrontOffice/js/script.js') }}\"></script>
{% endblock %}
</body>
<!-- Mirrored from doccure.dreamguystech.com/laravel/template/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 19:57:01 GMT -->
</html>
<script>
    \$(document).ready(function(){
        // alert(1);
        /*\$('.submenu li a').click(function(){
          \$(.submenu li a).removeClass(\"active\");
          \$(this).addClass(\"active\");
          \$('.has-submenu a').removeClass(\"active\");
          \$('.has-submenu a').addClass(\"active\");
          //\$(this).toggleClass(\"active\");
        });*/
    });
</script>", "temp.html.twig", "C:\\Users\\Acer\\proj - Copie\\templates\\temp.html.twig");
    }
}
