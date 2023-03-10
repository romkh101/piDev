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

/* actualite/afficherfront.html.twig */
class __TwigTemplate_3e9bb7913d20b9ac352bb3c04932346d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/afficherfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/afficherfront.html.twig"));

        // line 1
        echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <div class=\"col-lg-6 offset-lg-3\">
        
    <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    </div>
    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">
        

        <title>PIDEV</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
        <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/font-awesome.css\">

        <link rel=\"stylesheet\" href=\"assets/css/templatemo-training-studio.css\">

        </head>
        
        <body>
        
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
    
    <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
        <!-- ***** Header Area Start ***** --> 
        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite");
        echo "\" ><img src=\"assets/images/logo.png\" style=\"max-height: 200px; max-width:200px;margin-top: -60px;\"></a>
                            
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            
                    <ul class=\"nav\">
    <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Acceuil</a></li>
    <li class=\"scroll-to-section\"><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficherfront");
        echo "\">Actualités</a></li>
    <li class=\"scroll-to-section\"><a href=\"#trainers\">Equipes </a></li>
    <li class=\"scroll-to-section\"><a href=\"#our-classes\">Athlétes</a></li>
    <li class=\"scroll-to-section\"><a href=\"#schedule\">Evenements</a></li>
    <li class=\"scroll-to-section\"><a href=\"#schedule\">Forum</a></li>
    <li class=\"main-button\"><a href=\"#\">Inscrivez-vous</a></li>
    <!--<div id=\"google_translate_element\"></div>-->
    
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
        <div class=\"main-banner\" id=\"top\">
        <!----   <video autoplay muted loop id=\"bg-video\">
                <source src=\"assets/images/gym-video.mp4\" type=\"video/mp4\" />
            </video> -->
        

            
        </div>
        <!-- ***** Main Banner Area End ***** -->
 <section class=\"section\" id=\"features\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"section-heading text-center\">
                    <h2>Nos <em>actualités</em></h2>
                    <img src=\"assets/images/line-dec.png\" alt=\"waves\">
                    <p>Retrouvez les dernières actualités concernant votre sport préféré</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        
                    </div>
                </div>
                ";
        // line 113
        $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d H:i:s");
        // line 114
        echo "                <div class=\"row\">
                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter($this->env, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 115, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, $context["a"], "Date", [], "any", false, false, false, 115) > twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 115, $this->source); })()), "Date", [], "any", false, false, false, 115)); })));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 116
            echo "                        <div class=\"col-md-6\">
                            <div class=\"feature-item\">
                                <div class=\"feature-image\">
                                    <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficheractualite", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/actualites/" . twig_get_attribute($this->env, $this->source, $context["a"], "Image", [], "any", false, false, false, 119))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Image", [], "any", false, false, false, 119), "html", null, true);
            echo "\" style=\"width: 100%; max-height: 450px;\"></a>
                                </div>
                                <div class=\"feature-content\">
                                        <h3>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Titre", [], "any", false, false, false, 122), "html", null, true);
            echo "</h3>
                                    <div class=\"feature-details\">
                                        <span class=\"author\"><strong>Auteur :</strong> ";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Auteur", [], "any", false, false, false, 124), "html", null, true);
            echo "</span>
                                        ";
            // line 125
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["a"], "Categorie", [], "any", false, false, false, 125))) {
                // line 126
                echo "                                            <div><td><strong>Categorie:</strong> ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["a"], "Categorie", [], "any", false, false, false, 126))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "Categorie", [], "any", false, false, false, 126), "nom", [], "any", false, false, false, 126), "html", null, true);
                }
                echo "</td></div>
                                        ";
            }
            // line 128
            echo "                                    </div>
                                    <p>";
            // line 129
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Contenu", [], "any", false, false, false, 129), 0, 200), "html", null, true);
            echo "</p>
                                    <span class=\"date\">";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getTimeDiffInDays(twig_get_attribute($this->env, $this->source, $context["a"], "Date", [], "any", false, false, false, 130), (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 130, $this->source); })())), "html", null, true);
            echo "</span>
                                    <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficheractualite", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 131)]), "html", null, true);
            echo "\">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "      ";
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 136, $this->source); })()) > 1)) {
            // line 137
            echo "    <ul class=\"pagination\">
        ";
            // line 138
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 138, $this->source); })()) > 1)) {
                // line 139
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"?page=";
                // line 140
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 140, $this->source); })()) - 1), "html", null, true);
                echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        ";
            }
            // line 146
            echo "        
        ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 147, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 147, $this->source); })())), 0, "ceil")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 148
                echo "            <li class=\"page-item ";
                if (($context["item"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 148, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
                <a class=\"page-link\" href=\"?page=";
                // line 149
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "        
        ";
            // line 153
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 153, $this->source); })()) < twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 153, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 153, $this->source); })())), 0, "ceil"))) {
                // line 154
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"?page=";
                // line 155
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 155, $this->source); })()) + 1), "html", null, true);
                echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
            }
            // line 161
            echo "    </ul>
";
        }
        // line 163
        echo "
                </div>
                <div class=\"row justify-content-center\">
                    
                </div>
            </div>
        </div>
    </div>
</section>
        
        <!-- ***** Features Item End ***** -->

        <!-- ***** Call to Action Start ***** -->
        
        <!-- ***** Call to Action End ***** -->

        <!-- ***** Our Classes Start ***** -->
    
        <!-- ***** Our Classes End ***** -->
        
        <!-- ***** Testimonials Starts ***** -->
        
        <!-- ***** Testimonials Ends ***** -->
        
        <!-- ***** Contact Us Area Starts ***** -->

        <!-- ***** Contact Us Area Ends ***** -->
        
        <!-- ***** Footer Start ***** -->
        <footer>
        
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; 2023 ABC-Sports. All rights reserved.
        </p>
                        
                        <!-- You shall support us a little via PayPal to info@templatemo.com -->
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src=\"assets/js/jquery-2.1.0.min.js\"></script>

        <!-- Bootstrap -->
        <script src=\"assets/js/popper.js\"></script>
        <script src=\"assets/js/bootstrap.min.js\"></script>

        <!-- Plugins -->
        <script src=\"assets/js/scrollreveal.min.js\"></script>
        <script src=\"assets/js/waypoints.min.js\"></script>
        <script src=\"assets/js/jquery.counterup.min.js\"></script>
        <script src=\"assets/js/imgfix.min.js\"></script> 
        <script src=\"assets/js/mixitup.js\"></script> 
        <script src=\"assets/js/accordions.js\"></script>
        
        <!-- Global Init -->
        <script src=\"assets/js/custom.js\"></script>

    </body>
    </html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "actualite/afficherfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 163,  290 => 161,  281 => 155,  278 => 154,  276 => 153,  273 => 152,  262 => 149,  255 => 148,  251 => 147,  248 => 146,  239 => 140,  236 => 139,  234 => 138,  231 => 137,  228 => 136,  217 => 131,  213 => 130,  209 => 129,  206 => 128,  198 => 126,  196 => 125,  192 => 124,  187 => 122,  177 => 119,  172 => 116,  168 => 115,  165 => 114,  163 => 113,  114 => 67,  104 => 60,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!DOCTYPE html>
    <html lang=\"en\">
    <div class=\"col-lg-6 offset-lg-3\">
        
    <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    </div>
    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">
        

        <title>PIDEV</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
        <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/font-awesome.css\">

        <link rel=\"stylesheet\" href=\"assets/css/templatemo-training-studio.css\">

        </head>
        
        <body>
        
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
    
    <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
        <!-- ***** Header Area Start ***** --> 
        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"{{ path('actualite') }}\" ><img src=\"assets/images/logo.png\" style=\"max-height: 200px; max-width:200px;margin-top: -60px;\"></a>
                            
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            
                    <ul class=\"nav\">
    <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Acceuil</a></li>
    <li class=\"scroll-to-section\"><a href=\"{{ path('Afficherfront') }}\">Actualités</a></li>
    <li class=\"scroll-to-section\"><a href=\"#trainers\">Equipes </a></li>
    <li class=\"scroll-to-section\"><a href=\"#our-classes\">Athlétes</a></li>
    <li class=\"scroll-to-section\"><a href=\"#schedule\">Evenements</a></li>
    <li class=\"scroll-to-section\"><a href=\"#schedule\">Forum</a></li>
    <li class=\"main-button\"><a href=\"#\">Inscrivez-vous</a></li>
    <!--<div id=\"google_translate_element\"></div>-->
    
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
        <div class=\"main-banner\" id=\"top\">
        <!----   <video autoplay muted loop id=\"bg-video\">
                <source src=\"assets/images/gym-video.mp4\" type=\"video/mp4\" />
            </video> -->
        

            
        </div>
        <!-- ***** Main Banner Area End ***** -->
 <section class=\"section\" id=\"features\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"section-heading text-center\">
                    <h2>Nos <em>actualités</em></h2>
                    <img src=\"assets/images/line-dec.png\" alt=\"waves\">
                    <p>Retrouvez les dernières actualités concernant votre sport préféré</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        
                    </div>
                </div>
                {% set now = \"now\"|date(\"Y-m-d H:i:s\") %}
                <div class=\"row\">
                    {% for a in actualite|sort((a, b) => a.Date > b.Date)|reverse %}
                        <div class=\"col-md-6\">
                            <div class=\"feature-item\">
                                <div class=\"feature-image\">
                                    <a href=\"{{ path('Afficheractualite', {'id': a.id}) }}\"><img src=\"{{ asset('uploads/images/actualites/' ~ a.Image) }}\" alt=\"{{ a.Image }}\" style=\"width: 100%; max-height: 450px;\"></a>
                                </div>
                                <div class=\"feature-content\">
                                        <h3>{{ a.Titre }}</h3>
                                    <div class=\"feature-details\">
                                        <span class=\"author\"><strong>Auteur :</strong> {{ a.Auteur }}</span>
                                        {% if a.Categorie is not null %}
                                            <div><td><strong>Categorie:</strong> {% if a.Categorie is not null %}{{a.Categorie.nom}}{% endif %}</td></div>
                                        {% endif %}
                                    </div>
                                    <p>{{ a.Contenu|slice(0, 200) }}</p>
                                    <span class=\"date\">{{ a.Date|time_diff(now) }}</span>
                                    <a href=\"{{ path('Afficheractualite', {'id': a.id}) }}\">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
      {% if total > 1 %}
    <ul class=\"pagination\">
        {% if page > 1 %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"?page={{ page - 1 }}\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        {% endif %}
        
        {% for item in 1..(( total / limit )| round (0,'ceil') ) %}
            <li class=\"page-item {% if item == page %}active{% endif %}\">
                <a class=\"page-link\" href=\"?page={{ item }}\">{{ item }}</a>
            </li>
        {% endfor %}
        
        {% if page < (total / limit)|round(0, 'ceil') %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"?page={{ page + 1 }}\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}

                </div>
                <div class=\"row justify-content-center\">
                    
                </div>
            </div>
        </div>
    </div>
</section>
        
        <!-- ***** Features Item End ***** -->

        <!-- ***** Call to Action Start ***** -->
        
        <!-- ***** Call to Action End ***** -->

        <!-- ***** Our Classes Start ***** -->
    
        <!-- ***** Our Classes End ***** -->
        
        <!-- ***** Testimonials Starts ***** -->
        
        <!-- ***** Testimonials Ends ***** -->
        
        <!-- ***** Contact Us Area Starts ***** -->

        <!-- ***** Contact Us Area Ends ***** -->
        
        <!-- ***** Footer Start ***** -->
        <footer>
        
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; 2023 ABC-Sports. All rights reserved.
        </p>
                        
                        <!-- You shall support us a little via PayPal to info@templatemo.com -->
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src=\"assets/js/jquery-2.1.0.min.js\"></script>

        <!-- Bootstrap -->
        <script src=\"assets/js/popper.js\"></script>
        <script src=\"assets/js/bootstrap.min.js\"></script>

        <!-- Plugins -->
        <script src=\"assets/js/scrollreveal.min.js\"></script>
        <script src=\"assets/js/waypoints.min.js\"></script>
        <script src=\"assets/js/jquery.counterup.min.js\"></script>
        <script src=\"assets/js/imgfix.min.js\"></script> 
        <script src=\"assets/js/mixitup.js\"></script> 
        <script src=\"assets/js/accordions.js\"></script>
        
        <!-- Global Init -->
        <script src=\"assets/js/custom.js\"></script>

    </body>
    </html>", "actualite/afficherfront.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\actualite\\afficherfront.html.twig");
    }
}
