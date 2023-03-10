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

/* registration/register.html.twig */
class __TwigTemplate_201ad65022009893d0d62fcd9d1d858f extends Template
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
        return "temp.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("temp.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription";
        
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
        echo "    <body class=\"account-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">

                    <div class=\"account-content\">
                        <div class=\"row align-items-center justify-content-center\">
                            <div class=\"col-md-7 col-lg-6 login-left\">
                                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Doccure Register\">
                            </div>
                            <div class=\"col-md-12 col-lg-6 login-right\">
                                
                                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                  
                                <div class=\"form-group form-focus\">
                                  <label class=\"focus-label\">Nom</label>
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control floating"]]);
        echo "
                                  
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                                  
                                <div class=\"form-group form-focus\">
                                  <label class=\"focus-label\">Prenom</label>
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control floating"]]);
        echo "
                                  
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                                <div class=\"form-group form-focus\">
                                   <label class=\"focus-label\">Email</label>
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control floating"]]);
        echo "
                                 
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                                
                                <div class=\"form-group form-focus\">
                                  <label class=\"focus-label\">Password</label>
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control floating"]]);
        echo "
                                  
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                                  <label class=\"focus-label\">Insérer Image</label>
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "imageFile", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control floating"]]);
        echo "
                                  
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "imageFile", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "agreeTerms", [], "any", false, false, false, 51), 'widget');
        echo "
                                  
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "agreeTerms", [], "any", false, false, false, 53), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "


 
                                
                                <div class=\"text-end\">
                                    <a class=\"forgot-link\" href=\"login\">Vous avez déjà un compte?</a>
                                </div>

 <button type=\"submit\" class=\"btn btn-secondary\">Register</button>                               
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
                               
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 63,  176 => 53,  171 => 51,  167 => 50,  162 => 48,  156 => 45,  151 => 43,  143 => 38,  138 => 36,  131 => 32,  126 => 30,  118 => 25,  113 => 23,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'temp.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <body class=\"account-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">

                    <div class=\"account-content\">
                        <div class=\"row align-items-center justify-content-center\">
                            <div class=\"col-md-7 col-lg-6 login-left\">
                                <img src=\"{{ asset('assets/logo.png') }}\" class=\"img-fluid\" alt=\"Doccure Register\">
                            </div>
                            <div class=\"col-md-12 col-lg-6 login-right\">
                                
                                {{ form_start(registrationForm, {attr: {'novalidate': 'novalidate'}}) }}
                                  
                                <div class=\"form-group form-focus\">
                                  <label class=\"focus-label\">Nom</label>
                                    {{ form_widget(registrationForm.nom,{attr:{'class':'form-control floating'}}) }}
                                  
                                    {{ form_errors(registrationForm.nom,{'attr':{'class':'text-danger'}}) }}
                                </div>
                                  
                                <div class=\"form-group form-focus\">
                                  <label class=\"focus-label\">Prenom</label>
                                    {{ form_widget(registrationForm.prenom,{attr:{'class':'form-control floating'}}) }}
                                  
                                    {{ form_errors(registrationForm.prenom,{'attr':{'class':'text-danger'}}) }}
                                </div>
                                <div class=\"form-group form-focus\">
                                   <label class=\"focus-label\">Email</label>
                                    {{ form_widget(registrationForm.email,{attr:{'class':'form-control floating'}}) }}
                                 
                                    {{ form_errors(registrationForm.email,{'attr':{'class':'text-danger'}}) }}
                                </div>
                                
                                <div class=\"form-group form-focus\">
                                  <label class=\"focus-label\">Password</label>
                                    {{ form_widget(registrationForm.plainPassword,{attr:{'class':'form-control floating'}}) }}
                                  
                                    {{ form_errors(registrationForm.plainPassword,{'attr':{'class':'text-danger'}}) }}
                                </div>
                                  <label class=\"focus-label\">Insérer Image</label>
                                    {{ form_widget(registrationForm.imageFile,{attr:{'class':'form-control floating'}}) }}
                                  
                                    {{ form_errors(registrationForm.imageFile,{'attr':{'class':'text-danger'}}) }}
                                    {{ form_widget(registrationForm.agreeTerms) }}
                                  
                                    {{ form_errors(registrationForm.agreeTerms,{'attr':{'class':'text-danger'}}) }}


 
                                
                                <div class=\"text-end\">
                                    <a class=\"forgot-link\" href=\"login\">Vous avez déjà un compte?</a>
                                </div>

 <button type=\"submit\" class=\"btn btn-secondary\">Register</button>                               
{{ form_end(registrationForm) }}
                               
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </body>
{% endblock %}", "registration/register.html.twig", "C:\\Users\\Acer\\proj - Copie\\templates\\registration\\register.html.twig");
    }
}
