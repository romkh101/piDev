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

/* actualite/modifier.html.twig */
class __TwigTemplate_892be1a1c4069fab9158e4152ba16a46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/modifier.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
   <head>
      <!-- basic -->
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <!-- mobile metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name=\"keywords\" content=\"\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- site icon -->
      <link rel=\"icon\" href=\"images/fevicon.png\" type=\"image/png\" />
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" />
      <!-- site css -->
      <link rel=\"stylesheet\" href=\"style.css\" />
      <!-- responsive css -->
      <link rel=\"stylesheet\" href=\"css/responsive.css\" />
      <!-- color css -->
      <link rel=\"stylesheet\" href=\"css/colors.css\" />
      <!-- select bootstrap -->
      <link rel=\"stylesheet\" href=\"css/bootstrap-select.css\" />
      <!-- scrollbar css -->
      <link rel=\"stylesheet\" href=\"css/perfect-scrollbar.css\" />
      <!-- custom css -->
      <link rel=\"stylesheet\" href=\"css/custom.css\" />
      <!-- calendar file css -->
      <link rel=\"stylesheet\" href=\"js/semantic.min.css\" />
      <!-- fancy box js -->
      <link rel=\"stylesheet\" href=\"css/jquery.fancybox.css\" />
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
   </head>
   <body class=\"inner_page tables_page\">
      <div class=\"full_container\">
         <div class=\"inner_container\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
               <div class=\"sidebar_blog_1\">
                  <div class=\"sidebar-header\">
                     <div class=\"logo_section\">
                     </div>
                  </div>
                  <div class=\"sidebar_user_info\">
                     <div class=\"icon_setting\"></div>
                     <div class=\"user_profle_side\">
                        <div class=\"user_img\"><img class=\"img-responsive\" src=\"images/layout_img/user_img.jpg\" alt=\"#\" /></div>
                        <div class=\"user_info\">
                           <h6>John David</h6>
                           <p><span class=\"online_animation\"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
              <adiv class=\"sidebar_blog_2\">
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
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherA");
        echo "\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Modifier une actualité</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 76
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
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherC");
        echo "\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Modifier une catégorie</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterC");
        echo "\">>
\t\t\t\t\t\t\t\t\t\t\t<span>Ajouter une catégorie</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
               
               
                        </ul>
                     </li>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id=\"content\">
               <!-- topbar -->
               <div class=\"topbar\">
                  <nav class=\"navbar navbar-expand-lg navbar-light\">
                     <div class=\"full\">
                        <button type=\"button\" id=\"sidebarCollapse\" class=\"sidebar_toggle\"><i class=\"fa fa-bars\"></i></button>
                        <div class=\"logo_section\">
                           <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterA");
        echo "\"><img class=\"img-responsive\" src=\"\"  /></a>
                        </div>
                        <div class=\"right_topbar\">
                           <div class=\"icon_info\">
                              <ul>
                                 <li><a href=\"#\"><i class=\"fa fa-bell-o\"></i><span class=\"badge\">2</span></a></li>
                                 <li><a href=\"#\"><i class=\"fa fa-question-circle\"></i></a></li>
                                 <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge\">3</span></a></li>
                              </ul>
                              <ul class=\"user_profile_dd\">
                                 <li>
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img class=\"img-responsive rounded-circle\" src=\"images/layout_img/user_img.jpg\" alt=\"#\" /><span class=\"name_user\">John David</span></a>
                                    <div class=\"dropdown-menu\">
                                       <a class=\"dropdown-item\" href=\"profile.html\">My Profile</a>
                                       <a class=\"dropdown-item\" href=\"settings.html\">Settings</a>
                                       <a class=\"dropdown-item\" href=\"help.html\">Help</a>
                                       <a class=\"dropdown-item\" href=\"#\"><span>Log Out</span> <i class=\"fa fa-sign-out\"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class=\"midde_cont\">
                  <div class=\"container-fluid\">
                     <div class=\"row column_title\">
                        <div class=\"col-md-12\">
                           <div class=\"page_title\">
                              
                              <h1>Modifier l'actualité </h1>

                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     
 
                    
                      <div class=\"row justify-content-center\">
  <div class=\"row justify-content-center\">
  <div class=\"col-md-8 text-center\">
   <h1>Modifier l'actualité</h1>
";
        // line 165
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'form');
        echo "
  </div>
</div>
</div>
</div>
                        </div>
                        <!-- table section -->
                        
                     </div>
                  </div>
                  <!-- footer -->
                  <div class=\"container-fluid\">
                     <div class=\"footer\">
                        <p>Copyright © 2023 ABC-Sports. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class=\"modal fade\" id=\"myModal\">
            <div class=\"modal-dialog\">
               <div class=\"modal-content\">
                  <!-- Modal Header -->
                  <div class=\"modal-header\">
                     <h4 class=\"modal-title\">Modal Heading</h4>
                     <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class=\"modal-body\">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class=\"modal-footer\">
                     <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
      </div>
      <!-- jQuery -->
      <script src=\"js/jquery.min.js\"></script>
      <script src=\"js/popper.min.js\"></script>
      <script src=\"js/bootstrap.min.js\"></script>
      <!-- wow animation -->
      <script src=\"js/animate.js\"></script>
      <!-- select country -->
      <script src=\"js/bootstrap-select.js\"></script>
      <!-- owl carousel -->
      <script src=\"js/owl.carousel.js\"></script> 
      <!-- chart js -->
      <script src=\"js/Chart.min.js\"></script>
      <script src=\"js/Chart.bundle.min.js\"></script>
      <script src=\"js/utils.js\"></script>
      <script src=\"js/analyser.js\"></script>
      <!-- nice scrollbar -->
      <script src=\"js/perfect-scrollbar.min.js\"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- fancy box js -->
      <script src=\"js/jquery-3.3.1.min.js\"></script>
      <script src=\"js/jquery.fancybox.min.js\"></script>
      <!-- custom js -->
      <script src=\"js/custom.js\"></script>
      <!-- calendar file css -->    
      <script src=\"js/semantic.min.js\"></script>
   </body>
</html>





";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "actualite/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 165,  175 => 119,  150 => 97,  142 => 92,  123 => 76,  115 => 71,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
   <head>
      <!-- basic -->
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <!-- mobile metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name=\"keywords\" content=\"\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- site icon -->
      <link rel=\"icon\" href=\"images/fevicon.png\" type=\"image/png\" />
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" />
      <!-- site css -->
      <link rel=\"stylesheet\" href=\"style.css\" />
      <!-- responsive css -->
      <link rel=\"stylesheet\" href=\"css/responsive.css\" />
      <!-- color css -->
      <link rel=\"stylesheet\" href=\"css/colors.css\" />
      <!-- select bootstrap -->
      <link rel=\"stylesheet\" href=\"css/bootstrap-select.css\" />
      <!-- scrollbar css -->
      <link rel=\"stylesheet\" href=\"css/perfect-scrollbar.css\" />
      <!-- custom css -->
      <link rel=\"stylesheet\" href=\"css/custom.css\" />
      <!-- calendar file css -->
      <link rel=\"stylesheet\" href=\"js/semantic.min.css\" />
      <!-- fancy box js -->
      <link rel=\"stylesheet\" href=\"css/jquery.fancybox.css\" />
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
   </head>
   <body class=\"inner_page tables_page\">
      <div class=\"full_container\">
         <div class=\"inner_container\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
               <div class=\"sidebar_blog_1\">
                  <div class=\"sidebar-header\">
                     <div class=\"logo_section\">
                     </div>
                  </div>
                  <div class=\"sidebar_user_info\">
                     <div class=\"icon_setting\"></div>
                     <div class=\"user_profle_side\">
                        <div class=\"user_img\"><img class=\"img-responsive\" src=\"images/layout_img/user_img.jpg\" alt=\"#\" /></div>
                        <div class=\"user_info\">
                           <h6>John David</h6>
                           <p><span class=\"online_animation\"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
              <adiv class=\"sidebar_blog_2\">
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
               
               
                        </ul>
                     </li>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id=\"content\">
               <!-- topbar -->
               <div class=\"topbar\">
                  <nav class=\"navbar navbar-expand-lg navbar-light\">
                     <div class=\"full\">
                        <button type=\"button\" id=\"sidebarCollapse\" class=\"sidebar_toggle\"><i class=\"fa fa-bars\"></i></button>
                        <div class=\"logo_section\">
                           <a href=\"{{ path('AjouterA') }}\"><img class=\"img-responsive\" src=\"\"  /></a>
                        </div>
                        <div class=\"right_topbar\">
                           <div class=\"icon_info\">
                              <ul>
                                 <li><a href=\"#\"><i class=\"fa fa-bell-o\"></i><span class=\"badge\">2</span></a></li>
                                 <li><a href=\"#\"><i class=\"fa fa-question-circle\"></i></a></li>
                                 <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge\">3</span></a></li>
                              </ul>
                              <ul class=\"user_profile_dd\">
                                 <li>
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img class=\"img-responsive rounded-circle\" src=\"images/layout_img/user_img.jpg\" alt=\"#\" /><span class=\"name_user\">John David</span></a>
                                    <div class=\"dropdown-menu\">
                                       <a class=\"dropdown-item\" href=\"profile.html\">My Profile</a>
                                       <a class=\"dropdown-item\" href=\"settings.html\">Settings</a>
                                       <a class=\"dropdown-item\" href=\"help.html\">Help</a>
                                       <a class=\"dropdown-item\" href=\"#\"><span>Log Out</span> <i class=\"fa fa-sign-out\"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class=\"midde_cont\">
                  <div class=\"container-fluid\">
                     <div class=\"row column_title\">
                        <div class=\"col-md-12\">
                           <div class=\"page_title\">
                              
                              <h1>Modifier l'actualité </h1>

                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     
 
                    
                      <div class=\"row justify-content-center\">
  <div class=\"row justify-content-center\">
  <div class=\"col-md-8 text-center\">
   <h1>Modifier l'actualité</h1>
{{form(form)}}
  </div>
</div>
</div>
</div>
                        </div>
                        <!-- table section -->
                        
                     </div>
                  </div>
                  <!-- footer -->
                  <div class=\"container-fluid\">
                     <div class=\"footer\">
                        <p>Copyright © 2023 ABC-Sports. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class=\"modal fade\" id=\"myModal\">
            <div class=\"modal-dialog\">
               <div class=\"modal-content\">
                  <!-- Modal Header -->
                  <div class=\"modal-header\">
                     <h4 class=\"modal-title\">Modal Heading</h4>
                     <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class=\"modal-body\">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class=\"modal-footer\">
                     <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
      </div>
      <!-- jQuery -->
      <script src=\"js/jquery.min.js\"></script>
      <script src=\"js/popper.min.js\"></script>
      <script src=\"js/bootstrap.min.js\"></script>
      <!-- wow animation -->
      <script src=\"js/animate.js\"></script>
      <!-- select country -->
      <script src=\"js/bootstrap-select.js\"></script>
      <!-- owl carousel -->
      <script src=\"js/owl.carousel.js\"></script> 
      <!-- chart js -->
      <script src=\"js/Chart.min.js\"></script>
      <script src=\"js/Chart.bundle.min.js\"></script>
      <script src=\"js/utils.js\"></script>
      <script src=\"js/analyser.js\"></script>
      <!-- nice scrollbar -->
      <script src=\"js/perfect-scrollbar.min.js\"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- fancy box js -->
      <script src=\"js/jquery-3.3.1.min.js\"></script>
      <script src=\"js/jquery.fancybox.min.js\"></script>
      <!-- custom js -->
      <script src=\"js/custom.js\"></script>
      <!-- calendar file css -->    
      <script src=\"js/semantic.min.js\"></script>
   </body>
</html>





", "actualite/modifier.html.twig", "C:\\Users\\Acer\\Desktop\\proj - Copie\\templates\\actualite\\modifier.html.twig");
    }
}
