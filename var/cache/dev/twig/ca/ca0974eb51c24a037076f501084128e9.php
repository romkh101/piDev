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

/* base1.html.twig */
class __TwigTemplate_cbfdfdcca5e3f5edd5d518733313fbe8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'code' => [$this, 'block_code'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

    <title>PIDEV</title>
    <script  src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap -->
    <script  src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script  src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugins -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imgfix.min.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mixitup.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/accordions.js"), "html", null, true);
        echo "\"></script>
    

    
    <!-- Global Init -->
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-training-studio.css"), "html", null, true);
        echo "\">
    
    

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
    
    
    <!-- ***** Header Area Start ***** -->
    
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"/home\" ><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\"style=\"max-height: 200px; max-width: 200px;margin-top: -60px;\"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Acceuil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#features\">Actualités</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#trainers\">Equipes </a></li>
                            <li class=\"scroll-to-section\"><a href=\"/athlete\">Athlétes</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#schedule\">Evenements</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#contact-us\">Forum</a></li> 
                            <li class=\"main-button\"><a href=\"#register\">Inscrivez-vous</a></li>
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
";
        // line 96
        $this->displayBlock('code', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_code($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "code"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "code"));

        // line 97
        echo "    <!-- ***** Main Banner Area Start ***** -->
    <div class=\"main-banner\" id=\"top\">
      <!----   <video autoplay muted loop id=\"bg-video\">
            <source src=\"assets/images/gym-video.mp4\" type=\"video/mp4\" />
        </video> -->
     <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cover.jpg"), "html", null, true);
        echo "\" id=\"bg-video\">

        
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class=\"section\" id=\"features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Nos <em>actualités</em></h2>
                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"waves\">
                        <p>Retrouvez les derniers actualités concernant votre sport preferé</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/art1.jpg"), "html", null, true);
        echo "\" alt=\"First One\" style=\"width:337px;height:382px>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>Patrick Mahomes</h4>
                                <p> \"être au niveau de tom brady semble impossible.\"</p>
                                <a href=\"#\" class=\"text-button\">Lire tout</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/art2.jpg"), "html", null, true);
        echo "\" alt=\"second one\" style=\"width:337px;height:382px>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/art3.jpg"), "html", null, true);
        echo "\" alt=\"third gym training\" style=\"width:337px;height:382px>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel=\"nofollow\" href=\"https://www.pexels.com\" target=\"_blank\">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/art7.jpg"), "html", null, true);
        echo "\" alt=\"fourth muscle\" style=\"width:337px;height:382px;>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel=\"nofollow\" href=\"https://templatemo.com/tag/digital-marketing\" target=\"_parent\">Digital Marketing</a> or <a href=\"https://templatemo.com/tag/corporate\">Corporate</a> HTML CSS templates on our website.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/art5.jpg"), "html", null, true);
        echo "\" alt=\"training fifth\" style=\"width:337px;height:382px;>
                            </div>
                            <div class=\"right-content\">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/art6.jpg"), "html", null, true);
        echo "\" alt=\"gym training\" style=\"width:337px;height:382px;>
                            </div>
                            <div class=\"right-content\">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class=\"section\" id=\"call-to-action\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"cta-content\">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class=\"main-button scroll-to-section\">
                            <a href=\"#our-classes\">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class=\"section\" id=\"our-classes\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Nos <em>Athletes</em></h2>
                        <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                        
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\" id=\"tabs\">
              <div class=\"col-lg-4\">
              src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"
                <ul>
                  <li><a href='#tabs-1'><img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Football</a></li>
                  <li><a href='#tabs-2'><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Rugby</a></a></li>
                  <li><a href='#tabs-3'><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Basket</a></a></li>
                  <li><a href='#tabs-4'><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Tennis</a></a></li>
                  <div class=\"main-rounded-button\"><a href=\"#\">Voir tous les sports</a></div>
                </ul>
              </div>
              <div class=\"col-lg-8\">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cristiano.jpg"), "html", null, true);
        echo "\" alt=\"First Class\">
                    <h4>Cristiano Ronaldo</h4>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/rugby.jpg"), "html", null, true);
        echo "\" alt=\"Second Training\">
                    <h4>Beauden Barrett</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cobe.jpg"), "html", null, true);
        echo "\" alt=\"Third Class\">
                    <h4>Cobe bryant</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/roger.jpg"), "html", null, true);
        echo "\" alt=\"Fourth Training\">
                    <h4>Roger Federer</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class=\"section\" id=\"schedule\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading dark-bg\">
                        <h2>Nos <em>Evenements</em></h2>
                        <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                       
                        <p>La listes des evenements sportifs à venir</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"filters\">
                        <ul class=\"schedule-filter\">
                            <li class=\"active\" data-tsfilter=\"monday\">Monday</li>
                            <li data-tsfilter=\"tuesday\">Tuesday</li>
                            <li data-tsfilter=\"wednesday\">Wednesday</li>
                            <li data-tsfilter=\"thursday\">Thursday</li>
                            <li data-tsfilter=\"friday\">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"schedule-table filtering\">
                        <table>
                            <tbody>
                                <tr>
                                    <td class=\"day-time\">SuperBowl</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">10:00AM - 11:30AM</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Championnat local</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">10:00AM - 11:30AM</td>
                                    <td class=\"thursday friday ts-item\" data-tsmeta=\"thursday\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Randonnée</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">10:00AM - 11:30AM</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Match amateur</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">10:00AM - 11:30AM</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Advanced Training</td>
                                    <td class=\"thursday ts-item\" data-tsmeta=\"thursday\">10:00AM - 11:30AM</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <section class=\"section\" id=\"trainers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Les <em>Clubs</em></h2>
                        <img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>decouvrez les clubs sportifs</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ psg.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"down-content\">
                            <span>Paris saint germain</span>
                            <h4>Football</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ lakers.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"down-content\">
                            <span>Basketball</span>
                            <h4>Los angeles Lakers </h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ arizona.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"down-content\">
                            <span>Arizona cardinals</span>
                            <h4>NFL</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class=\"section\" id=\"contact-us\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div id=\"map\">
                      <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"100%\" height=\"600px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div class=\"contact-form\">
                        <form id=\"contact\" action=\"\" method=\"post\">
                          <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                              <fieldset>
                                <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name*\" required=\"\">
                              </fieldset>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                              <fieldset>
                                <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email*\" required=\"\">
                              </fieldset>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                              <fieldset>
                                <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\">
                              </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                              <fieldset>
                                <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Message\" required=\"\"></textarea>
                              </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                              <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; 2020 Training Studio
                    
                    - Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\" target=\"_parent\">TemplateMo</a></p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    

  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 397,  549 => 379,  528 => 361,  516 => 352,  446 => 285,  423 => 265,  412 => 257,  401 => 249,  390 => 241,  380 => 234,  376 => 233,  372 => 232,  368 => 231,  363 => 229,  352 => 221,  309 => 181,  296 => 171,  282 => 160,  264 => 145,  250 => 134,  236 => 123,  225 => 115,  209 => 102,  202 => 97,  183 => 96,  158 => 74,  125 => 44,  120 => 42,  115 => 40,  102 => 30,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  68 => 17,  64 => 16,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

    <title>PIDEV</title>
    <script  src=\"{{ asset('assets/js/jquery-2.1.0.min.js') }}\"></script>

    <!-- Bootstrap -->
    <script  src=\"{{ asset('assets/js/popper.js') }}\"></script>
    <script  src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

    <!-- Plugins -->
    <script src=\"{{ asset('assets/js/scrollreveal.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/imgfix.min.js') }}\"></script> 
    <script src=\"{{ asset('assets/js/mixitup.js') }}\"></script> 
    <script src=\"{{ asset('assets/js/accordions.js') }}\"></script>
    

    
    <!-- Global Init -->
    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
    
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/bootstrap.min.css')}}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/font-awesome.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('assets/css/templatemo-training-studio.css')}}\">
    
    

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
    
    
    <!-- ***** Header Area Start ***** -->
    
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"/home\" ><img src=\"{{asset('logo.png') }}\"style=\"max-height: 200px; max-width: 200px;margin-top: -60px;\"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Acceuil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#features\">Actualités</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#trainers\">Equipes </a></li>
                            <li class=\"scroll-to-section\"><a href=\"/athlete\">Athlétes</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#schedule\">Evenements</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#contact-us\">Forum</a></li> 
                            <li class=\"main-button\"><a href=\"#register\">Inscrivez-vous</a></li>
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
{% block code %}
    <!-- ***** Main Banner Area Start ***** -->
    <div class=\"main-banner\" id=\"top\">
      <!----   <video autoplay muted loop id=\"bg-video\">
            <source src=\"assets/images/gym-video.mp4\" type=\"video/mp4\" />
        </video> -->
     <img src=\"{{ asset('assets/images/cover.jpg') }}\" id=\"bg-video\">

        
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class=\"section\" id=\"features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Nos <em>actualités</em></h2>
                        <img src=\"{{ asset('assets/images/line-dec.png') }}\" alt=\"waves\">
                        <p>Retrouvez les derniers actualités concernant votre sport preferé</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/art1.jpg') }}\" alt=\"First One\" style=\"width:337px;height:382px>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>Patrick Mahomes</h4>
                                <p> \"être au niveau de tom brady semble impossible.\"</p>
                                <a href=\"#\" class=\"text-button\">Lire tout</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/art2.jpg') }}\" alt=\"second one\" style=\"width:337px;height:382px>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/art3.jpg') }}\" alt=\"third gym training\" style=\"width:337px;height:382px>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel=\"nofollow\" href=\"https://www.pexels.com\" target=\"_blank\">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/art7.jpg') }}\" alt=\"fourth muscle\" style=\"width:337px;height:382px;>
                                
                            </div>
                            <div class=\"right-content\">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel=\"nofollow\" href=\"https://templatemo.com/tag/digital-marketing\" target=\"_parent\">Digital Marketing</a> or <a href=\"https://templatemo.com/tag/corporate\">Corporate</a> HTML CSS templates on our website.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/art5.jpg') }}\" alt=\"training fifth\" style=\"width:337px;height:382px;>
                            </div>
                            <div class=\"right-content\">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/art6.jpg') }}\" alt=\"gym training\" style=\"width:337px;height:382px;>
                            </div>
                            <div class=\"right-content\">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class=\"section\" id=\"call-to-action\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"cta-content\">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class=\"main-button scroll-to-section\">
                            <a href=\"#our-classes\">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class=\"section\" id=\"our-classes\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Nos <em>Athletes</em></h2>
                        <img src=\"{{ asset('assets/images/line-dec.png') }}\" alt=\"\">
                        
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\" id=\"tabs\">
              <div class=\"col-lg-4\">
              src=\"{{ asset('assets/js/popper.js') }}\"
                <ul>
                  <li><a href='#tabs-1'><img src=\"{{asset('assets/images/tabs-first-icon.png')}}\" alt=\"\">Football</a></li>
                  <li><a href='#tabs-2'><img src=\"{{asset('assets/images/tabs-first-icon.png')}}\" alt=\"\">Rugby</a></a></li>
                  <li><a href='#tabs-3'><img src=\"{{asset('assets/images/tabs-first-icon.png')}}\" alt=\"\">Basket</a></a></li>
                  <li><a href='#tabs-4'><img src=\"{{asset('assets/images/tabs-first-icon.png')}}\" alt=\"\">Tennis</a></a></li>
                  <div class=\"main-rounded-button\"><a href=\"#\">Voir tous les sports</a></div>
                </ul>
              </div>
              <div class=\"col-lg-8\">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src=\"{{ asset('assets/images/cristiano.jpg') }}\" alt=\"First Class\">
                    <h4>Cristiano Ronaldo</h4>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src=\"{{ asset('assets/images/rugby.jpg') }}\" alt=\"Second Training\">
                    <h4>Beauden Barrett</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src=\"{{ asset('assets/images/cobe.jpg') }}\" alt=\"Third Class\">
                    <h4>Cobe bryant</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src=\"{{ asset('assets/images/roger.jpg') }}\" alt=\"Fourth Training\">
                    <h4>Roger Federer</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class=\"main-button\">
                        <a href=\"#\">Voir tout</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class=\"section\" id=\"schedule\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading dark-bg\">
                        <h2>Nos <em>Evenements</em></h2>
                        <img src=\"{{ asset('assets/images/ line-dec.png') }}\" alt=\"\">
                       
                        <p>La listes des evenements sportifs à venir</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"filters\">
                        <ul class=\"schedule-filter\">
                            <li class=\"active\" data-tsfilter=\"monday\">Monday</li>
                            <li data-tsfilter=\"tuesday\">Tuesday</li>
                            <li data-tsfilter=\"wednesday\">Wednesday</li>
                            <li data-tsfilter=\"thursday\">Thursday</li>
                            <li data-tsfilter=\"friday\">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"schedule-table filtering\">
                        <table>
                            <tbody>
                                <tr>
                                    <td class=\"day-time\">SuperBowl</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">10:00AM - 11:30AM</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Championnat local</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">10:00AM - 11:30AM</td>
                                    <td class=\"thursday friday ts-item\" data-tsmeta=\"thursday\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Randonnée</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">10:00AM - 11:30AM</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Match amateur</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">10:00AM - 11:30AM</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Advanced Training</td>
                                    <td class=\"thursday ts-item\" data-tsmeta=\"thursday\">10:00AM - 11:30AM</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <section class=\"section\" id=\"trainers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Les <em>Clubs</em></h2>
                        <img src=\"{{ asset('assets/images/ line-dec.png') }}\" alt=\"\">
                        <p>decouvrez les clubs sportifs</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img src=\"{{ asset('assets/images/ psg.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"down-content\">
                            <span>Paris saint germain</span>
                            <h4>Football</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img src=\"{{ asset('assets/images/ lakers.png') }}\" alt=\"\">
                        </div>
                        <div class=\"down-content\">
                            <span>Basketball</span>
                            <h4>Los angeles Lakers </h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img src=\"{{ asset('assets/images/ arizona.png') }}\" alt=\"\">
                        </div>
                        <div class=\"down-content\">
                            <span>Arizona cardinals</span>
                            <h4>NFL</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class=\"section\" id=\"contact-us\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div id=\"map\">
                      <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"100%\" height=\"600px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div class=\"contact-form\">
                        <form id=\"contact\" action=\"\" method=\"post\">
                          <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                              <fieldset>
                                <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name*\" required=\"\">
                              </fieldset>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                              <fieldset>
                                <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email*\" required=\"\">
                              </fieldset>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                              <fieldset>
                                <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\">
                              </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                              <fieldset>
                                <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Message\" required=\"\"></textarea>
                              </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                              <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; 2020 Training Studio
                    
                    - Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\" target=\"_parent\">TemplateMo</a></p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    

  </body>
</html>
{% endblock %}
", "base1.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\base1.html.twig");
    }
}
