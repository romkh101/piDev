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

/* actualite/afficheractualite.html.twig */
class __TwigTemplate_93211aaf2a6b931307d1129c5a93d79b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/afficheractualite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/afficheractualite.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">
       
\t\t<title>PIDEV</title>
\t\t<!--
\t\t\t\t\t\t
\t\t\t\t\t\tTemplateMo 548 Training Studio
\t\t\t\t\t\t
\t\t\t\t\t\thttps://templatemo.com/tm-548-training-studio
\t\t\t\t\t\t
\t\t\t\t\t\t-->
\t\t<!-- Additional CSS Files -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/font-awesome.css\">

\t\t<link rel=\"stylesheet\" href=\"assets/css/templatemo-training-studio.css\">

\t</head>

\t<body>

  <!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <nav class=\"main-nav\">
            <!-- ***** Logo Start ***** -->
            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite");
        echo "\"><img src=\"assets/images/logo.png\" style=\"max-height: 200px; max-width: 200px;margin-top: -60px;\"></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class=\"nav\">
              <li class=\"scroll-to-section\">
                <a href=\"#top\" class=\"active\">Acceuil</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficherfront");
        echo "\">Actualités</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#trainers\">Equipes</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#our-classes\">Athlétes</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#schedule\">Evenements</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#contact-us\">Forum</a>
              </li>
              <li class=\"main-button\">
                <a href=\"#\">Inscrivez-vous</a>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class=\"main-banner\" id=\"top\"></div>
  <!-- ***** Main Banner Area End ***** -->

  <!-- ***** Features Item Start ***** -->
  <section class=\"section\" id=\"features\" style=\"margin-top: 100px;\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          ";
        // line 97
        $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d H:i:s");
        // line 98
        echo "          <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/actualites/" . twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 98, $this->source); })()), "Image", [], "any", false, false, false, 98))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 98, $this->source); })()), "Image", [], "any", false, false, false, 98), "html", null, true);
        echo "\" style=\"width: 700px; height: 400px; margin-bottom: 20px;\">
          <h2 style=\"font-weight: bold;\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 99, $this->source); })()), "Titre", [], "any", false, false, false, 99), "html", null, true);
        echo "</h2>
          <td><strong>Categorie:</strong> ";
        // line 100
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 100, $this->source); })()), "Categorie", [], "any", false, false, false, 100))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 100, $this->source); })()), "Categorie", [], "any", false, false, false, 100), "nom", [], "any", false, false, false, 100), "html", null, true);
        }
        echo " <button id=\"translate-btn\" onclick=\"showTranslate()\">Traduire</button></td>
          <p>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 101, $this->source); })()), "Contenu", [], "any", false, false, false, 101), "html", null, true);
        echo "</p>
          <p><strong>Auteur:</strong> ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 102, $this->source); })()), "Auteur", [], "any", false, false, false, 102), "html", null, true);
        echo "</p>
          <span class=\"date\" >";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getTimeDiffInDays(twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 103, $this->source); })()), "Date", [], "any", false, false, false, 103), (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 103, $this->source); })())), "html", null, true);
        echo "</span>
          <div id =\"share-buttons\" class=\"share-buttons\">
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"https://twitter.com/intent/tweet?url=http://127.0.0.1/\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/shareArticle?url=http://127.0.0.1/\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                </div>
            </div>
\t\t\t
        </div>
    </div>
<center>
  <style>
    @media print {
  button.print-button {
    visibility: hidden;
  }
   #translate-btn {
    display: none;
  }
  #share-buttons{
    display: none;
  }
    }
  </style>
  <button class=\"print-button\" style=\"display: block; margin: 0 auto;\" onclick=\"window.print()\">Imprimer</button>
  
</center>
<div id=\"google_translate_element\" style=\"display: none; position: fixed; bottom: 20px; right: 20px;\"></div>

<script type=\"text/javascript\">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
    }\t
    
    function showTranslate() {
        var googleTranslateElement = document.getElementById('google_translate_element');
        if (googleTranslateElement.style.display === 'none') {
            googleTranslateElement.style.display = 'block';
        } else {
            googleTranslateElement.style.display = 'none';
        }
    }
</script>



<script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>

</section>
\t</body>
\t\t
\t
</div></div></div></section><!-- ***** Call to Action End ***** --><!-- ***** Our Classes Start ***** --><!-- ***** Our Classes End ***** --><!-- ***** Testimonials Starts ***** --><!-- ***** Testimonials Ends ***** --><!-- ***** Contact Us Area Starts ***** --><!-- ***** Contact Us Area Ends ***** --><!-- ***** Footer Start ***** --><footer><div class=\"container\"> <div class=\"row\">
<div class=\"col-lg-12\">
\t<p>Copyright &copy; 2023 ABC-Sports. All rights reserved.</p>

\t<!-- You shall support us a little via PayPal to info@templatemo.com -->

</div></div></div></footer><!-- jQuery --><script src=\"assets/js/jquery-2.1.0.min.js\"></script><!-- Bootstrap --><script src=\"assets/js/popper.js\"></script><script src=\"assets/js/bootstrap.min.js\"></script><!-- Plugins --><script src=\"assets/js/scrollreveal.min.js\"></script><script src=\"assets/js/waypoints.min.js\"></script><script src=\"assets/js/jquery.counterup.min.js\"></script><script src=\"assets/js/imgfix.min.js\"></script><script src=\"assets/js/mixitup.js\"></script><script src=\"assets/js/accordions.js\"></script><!-- Global Init --><script src=\"assets/js/custom.js\"></script></body></html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "actualite/afficheractualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 103,  170 => 102,  166 => 101,  160 => 100,  156 => 99,  149 => 98,  147 => 97,  106 => 59,  95 => 51,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">
       
\t\t<title>PIDEV</title>
\t\t<!--
\t\t\t\t\t\t
\t\t\t\t\t\tTemplateMo 548 Training Studio
\t\t\t\t\t\t
\t\t\t\t\t\thttps://templatemo.com/tm-548-training-studio
\t\t\t\t\t\t
\t\t\t\t\t\t-->
\t\t<!-- Additional CSS Files -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/font-awesome.css\">

\t\t<link rel=\"stylesheet\" href=\"assets/css/templatemo-training-studio.css\">

\t</head>

\t<body>

  <!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <nav class=\"main-nav\">
            <!-- ***** Logo Start ***** -->
            <a href=\"{{ path('actualite') }}\"><img src=\"assets/images/logo.png\" style=\"max-height: 200px; max-width: 200px;margin-top: -60px;\"></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class=\"nav\">
              <li class=\"scroll-to-section\">
                <a href=\"#top\" class=\"active\">Acceuil</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"{{ path('Afficherfront') }}\">Actualités</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#trainers\">Equipes</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#our-classes\">Athlétes</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#schedule\">Evenements</a>
              </li>
              <li class=\"scroll-to-section\">
                <a href=\"#contact-us\">Forum</a>
              </li>
              <li class=\"main-button\">
                <a href=\"#\">Inscrivez-vous</a>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class=\"main-banner\" id=\"top\"></div>
  <!-- ***** Main Banner Area End ***** -->

  <!-- ***** Features Item Start ***** -->
  <section class=\"section\" id=\"features\" style=\"margin-top: 100px;\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          {% set now = \"now\"|date(\"Y-m-d H:i:s\") %}
          <img src=\"{{ asset('uploads/images/actualites/' ~ actualite.Image) }}\" alt=\"{{ actualite.Image }}\" style=\"width: 700px; height: 400px; margin-bottom: 20px;\">
          <h2 style=\"font-weight: bold;\">{{ actualite.Titre }}</h2>
          <td><strong>Categorie:</strong> {% if actualite.Categorie is not null %}{{actualite.Categorie.nom}}{% endif %} <button id=\"translate-btn\" onclick=\"showTranslate()\">Traduire</button></td>
          <p>{{ actualite.Contenu }}</p>
          <p><strong>Auteur:</strong> {{ actualite.Auteur }}</p>
          <span class=\"date\" >{{ actualite.Date|time_diff(now) }}</span>
          <div id =\"share-buttons\" class=\"share-buttons\">
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"https://twitter.com/intent/tweet?url=http://127.0.0.1/\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/shareArticle?url=http://127.0.0.1/\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                </div>
            </div>
\t\t\t
        </div>
    </div>
<center>
  <style>
    @media print {
  button.print-button {
    visibility: hidden;
  }
   #translate-btn {
    display: none;
  }
  #share-buttons{
    display: none;
  }
    }
  </style>
  <button class=\"print-button\" style=\"display: block; margin: 0 auto;\" onclick=\"window.print()\">Imprimer</button>
  
</center>
<div id=\"google_translate_element\" style=\"display: none; position: fixed; bottom: 20px; right: 20px;\"></div>

<script type=\"text/javascript\">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
    }\t
    
    function showTranslate() {
        var googleTranslateElement = document.getElementById('google_translate_element');
        if (googleTranslateElement.style.display === 'none') {
            googleTranslateElement.style.display = 'block';
        } else {
            googleTranslateElement.style.display = 'none';
        }
    }
</script>



<script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>

</section>
\t</body>
\t\t
\t
</div></div></div></section><!-- ***** Call to Action End ***** --><!-- ***** Our Classes Start ***** --><!-- ***** Our Classes End ***** --><!-- ***** Testimonials Starts ***** --><!-- ***** Testimonials Ends ***** --><!-- ***** Contact Us Area Starts ***** --><!-- ***** Contact Us Area Ends ***** --><!-- ***** Footer Start ***** --><footer><div class=\"container\"> <div class=\"row\">
<div class=\"col-lg-12\">
\t<p>Copyright &copy; 2023 ABC-Sports. All rights reserved.</p>

\t<!-- You shall support us a little via PayPal to info@templatemo.com -->

</div></div></div></footer><!-- jQuery --><script src=\"assets/js/jquery-2.1.0.min.js\"></script><!-- Bootstrap --><script src=\"assets/js/popper.js\"></script><script src=\"assets/js/bootstrap.min.js\"></script><!-- Plugins --><script src=\"assets/js/scrollreveal.min.js\"></script><script src=\"assets/js/waypoints.min.js\"></script><script src=\"assets/js/jquery.counterup.min.js\"></script><script src=\"assets/js/imgfix.min.js\"></script><script src=\"assets/js/mixitup.js\"></script><script src=\"assets/js/accordions.js\"></script><!-- Global Init --><script src=\"assets/js/custom.js\"></script></body></html>

", "actualite/afficheractualite.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\actualite\\afficheractualite.html.twig");
    }
}
