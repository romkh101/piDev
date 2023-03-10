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

/* security/login.html.twig */
class __TwigTemplate_bc73c33051294d769392bb3fc2546a27 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>Login</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/css/style.css"), "html", null, true);
        echo "\">
   

\t</head>
\t<body class=\"img js-fullheight\" style=\"background-image: url('login/images/matériel-de-sport-2-22802518.jpg');\">
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t<div class=\"login-wrap p-0\">
\t\t      \t<h3 class=\"mb-4 text-center\">Have an account?</h3>
\t\t      \t<form method=\"post\" class=\"signin-form\">
                 ";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageKey", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageData", [], "any", false, false, false, 31), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "userIdentifier", [], "any", false, false, false, 36), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 39
        echo "\t\t      \t\t<div class=\"form-group\">
                            <input type=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>

\t\t      \t\t</div>
\t            <div class=\"form-group\">
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
     <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
\t              <span toggle=\"#password-field\" class=\"fa fa-fw fa-eye field-icon toggle-password\"></span>
\t            </div>
\t            <div class=\"form-group\">
\t            \t<button type=\"submit\" class=\"form-control btn btn-primary submit px-3\">Sign In</button>
                 
\t            </div>
\t            <div class=\"form-group d-md-flex\">
\t            \t<div class=\"w-50\">

\t\t\t\t\t\t\t\t\t<a href=\"register\" style=\"color: #fff\">&mdash; Sign Up &mdash;</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"w-50 text-md-right\">
\t\t\t\t\t\t\t\t\t<a href=\"forgot-password\" style=\"color: #fff\">&mdash; Forgot Password &mdash;</a>
\t\t\t\t\t\t\t\t</div>
\t            </div>
\t          </form>
\t          <p class=\"w-100 text-center\">&mdash; Or Sign In With &mdash;</p>
\t          <div class=\"social d-flex text-center\">
\t          \t<a href=\"#\" class=\"px-2 py-2 mr-md-1 rounded\"><span class=\"ion-logo-facebook mr-2\"></span> Facebook</a>
\t          \t<a href=\"#\" class=\"px-2 py-2 ml-md-1 rounded\"><span class=\"ion-logo-twitter mr-2\"></span> Twitter</a>
\t          </div>
\t\t      </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/js/popper.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/js/main.js"), "html", null, true);
        echo "\"></script>

\t</body>
</html>
   


    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 80,  176 => 79,  172 => 78,  167 => 76,  134 => 46,  125 => 40,  122 => 39,  114 => 36,  111 => 35,  109 => 34,  106 => 33,  100 => 31,  98 => 30,  82 => 17,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}


<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>Login</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t<link rel=\"stylesheet\" href=\"{{asset('login/css/style.css')}}\">
   

\t</head>
\t<body class=\"img js-fullheight\" style=\"background-image: url('login/images/matériel-de-sport-2-22802518.jpg');\">
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t<div class=\"login-wrap p-0\">
\t\t      \t<h3 class=\"mb-4 text-center\">Have an account?</h3>
\t\t      \t<form method=\"post\" class=\"signin-form\">
                 {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
\t\t      \t\t<div class=\"form-group\">
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>

\t\t      \t\t</div>
\t            <div class=\"form-group\">
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
     <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
\t              <span toggle=\"#password-field\" class=\"fa fa-fw fa-eye field-icon toggle-password\"></span>
\t            </div>
\t            <div class=\"form-group\">
\t            \t<button type=\"submit\" class=\"form-control btn btn-primary submit px-3\">Sign In</button>
                 
\t            </div>
\t            <div class=\"form-group d-md-flex\">
\t            \t<div class=\"w-50\">

\t\t\t\t\t\t\t\t\t<a href=\"register\" style=\"color: #fff\">&mdash; Sign Up &mdash;</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"w-50 text-md-right\">
\t\t\t\t\t\t\t\t\t<a href=\"forgot-password\" style=\"color: #fff\">&mdash; Forgot Password &mdash;</a>
\t\t\t\t\t\t\t\t</div>
\t            </div>
\t          </form>
\t          <p class=\"w-100 text-center\">&mdash; Or Sign In With &mdash;</p>
\t          <div class=\"social d-flex text-center\">
\t          \t<a href=\"#\" class=\"px-2 py-2 mr-md-1 rounded\"><span class=\"ion-logo-facebook mr-2\"></span> Facebook</a>
\t          \t<a href=\"#\" class=\"px-2 py-2 ml-md-1 rounded\"><span class=\"ion-logo-twitter mr-2\"></span> Twitter</a>
\t          </div>
\t\t      </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<script src=\"{{asset('login/js/jquery.min.js')}}\"></script>

  <script src=\"{{asset('login/js/popper.js')}}\"></script>
  <script src=\"{{asset('login/js/bootstrap.min.js')}}\"></script>
  <script src=\"{{asset('login/js/main.js')}}\"></script>

\t</body>
</html>
   


    
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Acer\\proj - Copie\\templates\\security\\login.html.twig");
    }
}
