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

/* home/reg.html.twig */
class __TwigTemplate_08f5aac5297509717499fe19fa114633 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/reg.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/reg.html.twig"));

        // line 1
        echo "



<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("regform/fonts/material-icon/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">

    <!-- Main css -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("regform/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>

    <div class=\"main\">

        <!-- Sign up form -->
        <section class=\"signup\" >
            <div class=\"container\">
                <div class=\"signup-content\">
                    <div class=\"signup-form\">
                        <h2 class=\"form-title\">Sign up</h2>
                        <form method=\"POST\" class=\"register-form\" id=\"register-form\">
                            <div class=\"form-group\">
                                <label for=\"name\"><i class=\"zmdi zmdi-account material-icons-name\"></i></label>
                                <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Your Name\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\"><i class=\"zmdi zmdi-email\"></i></label>
                                <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Your Email\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"pass\"><i class=\"zmdi zmdi-lock\"></i></label>
                                <input type=\"password\" name=\"pass\" id=\"pass\" placeholder=\"Password\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"re-pass\"><i class=\"zmdi zmdi-lock-outline\"></i></label>
                                <input type=\"password\" name=\"re_pass\" id=\"re_pass\" placeholder=\"Repeat your password\"/>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"checkbox\" name=\"agree-term\" id=\"agree-term\" class=\"agree-term\" />
                                <label for=\"agree-term\" class=\"label-agree-term\"><span><span></span></span>I agree all statements in  <a href=\"#\" class=\"term-service\">Terms of service</a></label>
                            </div>
                            <div class=\"form-group form-button\">
                                <input type=\"submit\" name=\"signup\" id=\"signup\" class=\"form-submit\" value=\"Register\"/>
                            </div>
                        </form>
                    </div>
                    <div class=\"signup-image\">
                        <figure><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("regform/images/signup-image.jpg"), "html", null, true);
        echo "\" alt=\"sing up image\"></figure>
                        <a href=\"#\" class=\"signup-image-link\">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section class=\"sign-in\">
            <div class=\"container\">
                <div class=\"signin-content\">
                    <div class=\"signin-image\">
                        <figure><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("regform/images/signin-image.jpg"), "html", null, true);
        echo "\" alt=\"sing up image\"></figure>
                        <a href=\"#\" class=\"signup-image-link\">Create an account</a>
                    </div>

                    <div class=\"signin-form\">
                        <h2 class=\"form-title\">Sign up</h2>
                        <form method=\"POST\" class=\"register-form\" id=\"login-form\">
                            <div class=\"form-group\">
                                <label for=\"your_name\"><i class=\"zmdi zmdi-account material-icons-name\"></i></label>
                                <input type=\"text\" name=\"your_name\" id=\"your_name\" placeholder=\"Your Name\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"your_pass\"><i class=\"zmdi zmdi-lock\"></i></label>
                                <input type=\"password\" name=\"your_pass\" id=\"your_pass\" placeholder=\"Password\"/>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"checkbox\" name=\"remember-me\" id=\"remember-me\" class=\"agree-term\" />
                                <label for=\"remember-me\" class=\"label-agree-term\"><span><span></span></span>Remember me</label>
                            </div>
                            <div class=\"form-group form-button\">
                                <input type=\"submit\" name=\"signin\" id=\"signin\" class=\"form-submit\" value=\"Log in\"/>
                            </div>
                        </form>
                        <div class=\"social-login\">
                            <span class=\"social-label\">Or login with</span>
                            <ul class=\"socials\">
                                <li><a href=\"#\"><i class=\"display-flex-center zmdi zmdi-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"display-flex-center zmdi zmdi-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"display-flex-center zmdi zmdi-google\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
 ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/reg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 108,  163 => 107,  121 => 68,  106 => 56,  64 => 17,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel=\"stylesheet\" href=\"{{asset('regform/fonts/material-icon/css/material-design-iconic-font.min.css')}}\">

    <!-- Main css -->
    <link rel=\"stylesheet\" href=\"{{asset('regform/css/style.css')}}\">
</head>
<body>

    <div class=\"main\">

        <!-- Sign up form -->
        <section class=\"signup\" >
            <div class=\"container\">
                <div class=\"signup-content\">
                    <div class=\"signup-form\">
                        <h2 class=\"form-title\">Sign up</h2>
                        <form method=\"POST\" class=\"register-form\" id=\"register-form\">
                            <div class=\"form-group\">
                                <label for=\"name\"><i class=\"zmdi zmdi-account material-icons-name\"></i></label>
                                <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Your Name\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\"><i class=\"zmdi zmdi-email\"></i></label>
                                <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Your Email\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"pass\"><i class=\"zmdi zmdi-lock\"></i></label>
                                <input type=\"password\" name=\"pass\" id=\"pass\" placeholder=\"Password\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"re-pass\"><i class=\"zmdi zmdi-lock-outline\"></i></label>
                                <input type=\"password\" name=\"re_pass\" id=\"re_pass\" placeholder=\"Repeat your password\"/>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"checkbox\" name=\"agree-term\" id=\"agree-term\" class=\"agree-term\" />
                                <label for=\"agree-term\" class=\"label-agree-term\"><span><span></span></span>I agree all statements in  <a href=\"#\" class=\"term-service\">Terms of service</a></label>
                            </div>
                            <div class=\"form-group form-button\">
                                <input type=\"submit\" name=\"signup\" id=\"signup\" class=\"form-submit\" value=\"Register\"/>
                            </div>
                        </form>
                    </div>
                    <div class=\"signup-image\">
                        <figure><img src=\"{{asset('regform/images/signup-image.jpg')}}\" alt=\"sing up image\"></figure>
                        <a href=\"#\" class=\"signup-image-link\">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section class=\"sign-in\">
            <div class=\"container\">
                <div class=\"signin-content\">
                    <div class=\"signin-image\">
                        <figure><img src=\"{{asset('regform/images/signin-image.jpg')}}\" alt=\"sing up image\"></figure>
                        <a href=\"#\" class=\"signup-image-link\">Create an account</a>
                    </div>

                    <div class=\"signin-form\">
                        <h2 class=\"form-title\">Sign up</h2>
                        <form method=\"POST\" class=\"register-form\" id=\"login-form\">
                            <div class=\"form-group\">
                                <label for=\"your_name\"><i class=\"zmdi zmdi-account material-icons-name\"></i></label>
                                <input type=\"text\" name=\"your_name\" id=\"your_name\" placeholder=\"Your Name\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"your_pass\"><i class=\"zmdi zmdi-lock\"></i></label>
                                <input type=\"password\" name=\"your_pass\" id=\"your_pass\" placeholder=\"Password\"/>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"checkbox\" name=\"remember-me\" id=\"remember-me\" class=\"agree-term\" />
                                <label for=\"remember-me\" class=\"label-agree-term\"><span><span></span></span>Remember me</label>
                            </div>
                            <div class=\"form-group form-button\">
                                <input type=\"submit\" name=\"signin\" id=\"signin\" class=\"form-submit\" value=\"Log in\"/>
                            </div>
                        </form>
                        <div class=\"social-login\">
                            <span class=\"social-label\">Or login with</span>
                            <ul class=\"socials\">
                                <li><a href=\"#\"><i class=\"display-flex-center zmdi zmdi-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"display-flex-center zmdi zmdi-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"display-flex-center zmdi zmdi-google\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('js/main.js')}}\"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
 ", "home/reg.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\home\\reg.html.twig");
    }
}
