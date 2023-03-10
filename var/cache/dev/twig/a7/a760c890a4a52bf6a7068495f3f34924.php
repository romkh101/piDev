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

/* ad/index.html.twig */
class __TwigTemplate_3cf79a779b85c069977edf2d4cffcd6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/index.html.twig"));

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
      <link rel=\"icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fevicon.png"), "html", null, true);
        echo "\" type=\"image/png\" />

      <!-- bootstrap css -->
      <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
      <!-- site css -->
      <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\" />
      <!-- responsive css -->
      <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" />
      <!-- color css -->
      <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/colors.css"), "html", null, true);
        echo "\" />
      <!-- select bootstrap -->
      <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-select.css"), "html", null, true);
        echo "\" />
      <!-- scrollbar css -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/perfect-scrollbar.cs"), "html", null, true);
        echo "\" />

      <!-- custom css -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/pcustom.css"), "html", null, true);
        echo "\" />
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
   </head>
   <body class=\"dashboard dashboard_1\">
      <div class=\"full_container\">
         <div class=\"inner_container\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
               <div class=\"sidebar_blog_1\">
                  <div class=\"sidebar-header\">
                     <div class=\"logo_section\">
                        <a href=\"index.html\"><img class=\"logo_icon img-responsive\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo_icon.png"), "html", null, true);
        echo "\" alt=\"#\" />
                 
</a>
                     </div>
                  </div>
                  <div class=\"sidebar_user_info\">
                     <div class=\"icon_setting\"></div>
                     <div class=\"user_profle_side\">
                        <div class=\"user_img\"><img class=\"img-responsive\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/layout_img/user_img.jpg"), "html", null, true);
        echo "\" alt=\"#\" /></div>
                        <div class=\"user_info\">
                           <h6>John David</h6>
                           <p><span class=\"online_animation\"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"sidebar_blog_2\">
                  <h4>General</h4>
                  <ul class=\"list-unstyled components\">
                     <li class=\"active\">
                        <a href=\"#dashboard\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-dashboard yellow_color\"></i> <span>Dashboard</span></a>
                        <ul class=\"collapse list-unstyled\" id=\"dashboard\">
                           <li>
                              <a href=\"dashboard.html\">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href=\"dashboard_2.html\">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul>
                     </li>
                     
                    
                    
                     <li><a href=\"map.html\"><i class=\"fa fa-map purple_color2\"></i> <span>Map</span></a></li>
                     <li><a href=\"charts.html\"><i class=\"fa fa-bar-chart-o green_color\"></i> <span>Charts</span></a></li>
                     <li><a href=\"settings.html\"><i class=\"fa fa-cog yellow_color\"></i> <span>Settings</span></a></li>
                  </ul>
               </div>
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
                           <a href=\"index.html\"><img class=\"img-responsive\" src=\"images/logo/logo.png\" alt=\"#\" /></a>
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
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class=\"row column1\">
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-user yellow_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">2500</p>
                                    <p class=\"head_couter\">Welcome</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-clock-o blue1_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">123.50</p>
                                    <p class=\"head_couter\">Average Time</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-cloud-download green_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">1,805</p>
                                    <p class=\"head_couter\">Collections</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-comments-o red_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">54</p>
                                    <p class=\"head_couter\">Comments</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"row column1 social_media_section\">
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons fb margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-facebook\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>35k</strong></span>
                                       <span>Friends</span>
                                    </li>
                                    <li>
                                       <span><strong>128</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons tw margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-twitter\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>584k</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>978</strong></span>
                                       <span>Tweets</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons linked margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-linkedin\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>758+</strong></span>
                                       <span>Contacts</span>
                                    </li>
                                    <li>
                                       <span><strong>365</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons google_p margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-google-plus\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>450</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>57</strong></span>
                                       <span>Circles</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- graph -->
                     <div class=\"row column2 graph margin_bottom_30\">
                        <div class=\"col-md-l2 col-lg-12\">
                           <div class=\"white_shd full\">
                              <div class=\"full graph_head\">
                                 <div class=\"heading1 margin_0\">
                                    <h2>Extra Area Chart</h2>
                                 </div>
                              </div>
                              <div class=\"full graph_revenue\">
                                 <div class=\"row\">
                                    <div class=\"col-md-12\">
                                       <div class=\"content\">
                                          <div class=\"area_chart\">
                                             <canvas height=\"120\" id=\"canvas\"></canvas>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end graph -->
                     <div class=\"row column3\">
                        <!-- testimonial -->
                        <div class=\"col-md-6\">
                           <div class=\"dark_bg full margin_bottom_30\">
                              <div class=\"full graph_head\">
                                 <div class=\"heading1 margin_0\">
                                    <h2>Testimonial</h2>
                                 </div>
                              </div>
                              <div class=\"full graph_revenue\">
                                 <div class=\"row\">
                                    <div class=\"col-md-12\">
                                       <div class=\"content testimonial\">
                                          <div id=\"testimonial_slider\" class=\"carousel slide\" data-ride=\"carousel\">
                                             <!-- Wrapper for carousel items -->
                                             <div class=\"carousel-inner\">
                                                <div class=\"item carousel-item active\">
                                                   <div class=\"img-box\"><img src=\"images/layout_img/user_img.jpg\" alt=\"\"></div>
                                                   <p class=\"testimonial\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class=\"overview\"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                                <div class=\"item carousel-item\">
                                                   <div class=\"img-box\"><img src=\"images/layout_img/user_img.jpg\" alt=\"\"></div>
                                                   <p class=\"testimonial\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class=\"overview\"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                                <div class=\"item carousel-item\">
                                                   <div class=\"img-box\"><img src=\"images/layout_img/user_img.jpg\" alt=\"\"></div>
                                                   <p class=\"testimonial\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class=\"overview\"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class=\"carousel-control left carousel-control-prev\" href=\"#testimonial_slider\" data-slide=\"prev\">
                                             <i class=\"fa fa-angle-left\"></i>
                                             </a>
                                             <a class=\"carousel-control right carousel-control-next\" href=\"#testimonial_slider\" data-slide=\"next\">
                                             <i class=\"fa fa-angle-right\"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end testimonial -->
                        <!-- progress bar -->
                        <div class=\"col-md-6\">
                           <div class=\"white_shd full margin_bottom_30\">
                              <div class=\"full graph_head\">
                                 <div class=\"heading1 margin_0\">
                                    <h2>Progress Bar</h2>
                                 </div>
                              </div>
                              <div class=\"full progress_bar_inner\">
                                 <div class=\"row\">
                                    <div class=\"col-md-12\">
                                       <div class=\"progress_bar\">
                                          <!-- Skill Bars -->
                                          <span class=\"skill\" style=\"width:73%;\">Facebook <span class=\"info_valume\">73%</span></span>                  
                                          <div class=\"progress skill-bar \">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"73\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 73%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:62%;\">Twitter <span class=\"info_valume\">62%</span></span>   
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 62%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:54%;\">Instagram <span class=\"info_valume\">54%</span></span>
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"54\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 54%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:82%;\">Google plus <span class=\"info_valume\">82%</span></span>
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"82\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 82%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:48%;\">Other <span class=\"info_valume\">48%</span></span>
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"48\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 48%;\">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end progress bar -->
                     </div>
                     <div class=\"row column4 graph\">
                        <div class=\"col-md-6 margin_bottom_30\">
                           <div class=\"dash_blog\">
                              <div class=\"dash_blog_inner\">
                                 <div class=\"dash_head\">
                                    <h3><span><i class=\"fa fa-calendar\"></i> 6 July 2018</span><span class=\"plus_green_bt\"><a href=\"#\">+</a></span></h3>
                                 </div>
                                 <div class=\"list_cont\">
                                    <p>Today Tasks for Ronney Jack</p>
                                 </div>
                                 <div class=\"task_list_main\">
                                    <ul class=\"task_list\">
                                       <li><a href=\"#\">Meeting about plan for Admin Template 2018</a><br><strong>10:00 AM</strong></li>
                                       <li><a href=\"#\">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                       <li><a href=\"#\">Meeting about plan for Admin Template 2018</a><br><strong>11:00 AM</strong></li>
                                       <li><a href=\"#\">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                       <li><a href=\"#\">Meeting about plan for Admin Template 2018</a><br><strong>02:00 PM</strong></li>
                                    </ul>
                                 </div>
                                 <div class=\"read_more\">
                                    <div class=\"center\"><a class=\"main_bt read_bt\" href=\"#\">Read More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6\">
                           <div class=\"dash_blog\">
                              <div class=\"dash_blog_inner\">
                                 <div class=\"dash_head\">
                                    <h3><span><i class=\"fa fa-comments-o\"></i> Updates</span><span class=\"plus_green_bt\"><a href=\"#\">+</a></span></h3>
                                 </div>
                                 <div class=\"list_cont\">
                                    <p>User confirmation</p>
                                 </div>
                                 <div class=\"msg_list_main\">
                                    <ul class=\"msg_list\">
                                       <li>
                                          <span><img src=\"images/layout_img/msg2.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">Herman Beck</span>
                                          <span class=\"msg_user\">Sed ut perspiciatis unde omnis.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src=\"images/layout_img/msg3.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">John Smith</span>
                                          <span class=\"msg_user\">On the other hand, we denounce.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src=\"images/layout_img/msg2.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">John Smith</span>
                                          <span class=\"msg_user\">Sed ut perspiciatis unde omnis.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src=\"images/layout_img/msg3.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">John Smith</span>
                                          <span class=\"msg_user\">On the other hand, we denounce.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class=\"read_more\">
                                    <div class=\"center\"><a class=\"main_bt read_bt\" href=\"#\">Read More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class=\"container-fluid\">
                     <div class=\"footer\">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href=\"https://themewagon.com/\">ThemeWagon</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
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
      <!-- custom js -->
      <script src=\"js/custom.js\"></script>
      <script src=\"js/chart_custom_style1.js\"></script>
   </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "ad/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 54,  114 => 46,  97 => 32,  91 => 29,  86 => 27,  81 => 25,  76 => 23,  71 => 21,  66 => 19,  60 => 16,  43 => 1,);
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
      <link rel=\"icon\" href=\"{{asset('images/fevicon.png')}}\" type=\"image/png\" />

      <!-- bootstrap css -->
      <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\" />
      <!-- site css -->
      <link rel=\"stylesheet\" href=\"{{asset('style.css')}}\" />
      <!-- responsive css -->
      <link rel=\"stylesheet\" href=\"{{asset('css/responsive.css')}}\" />
      <!-- color css -->
      <link rel=\"stylesheet\" href=\"{{asset('css/colors.css')}}\" />
      <!-- select bootstrap -->
      <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-select.css')}}\" />
      <!-- scrollbar css -->
            <link rel=\"stylesheet\" href=\"{{asset('css/perfect-scrollbar.cs')}}\" />

      <!-- custom css -->
            <link rel=\"stylesheet\" href=\"{{asset('css/pcustom.css')}}\" />
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
   </head>
   <body class=\"dashboard dashboard_1\">
      <div class=\"full_container\">
         <div class=\"inner_container\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
               <div class=\"sidebar_blog_1\">
                  <div class=\"sidebar-header\">
                     <div class=\"logo_section\">
                        <a href=\"index.html\"><img class=\"logo_icon img-responsive\" src=\"{{asset('images/logo/logo_icon.png')}}\" alt=\"#\" />
                 
</a>
                     </div>
                  </div>
                  <div class=\"sidebar_user_info\">
                     <div class=\"icon_setting\"></div>
                     <div class=\"user_profle_side\">
                        <div class=\"user_img\"><img class=\"img-responsive\" src=\"{{asset('images/layout_img/user_img.jpg')}}\" alt=\"#\" /></div>
                        <div class=\"user_info\">
                           <h6>John David</h6>
                           <p><span class=\"online_animation\"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"sidebar_blog_2\">
                  <h4>General</h4>
                  <ul class=\"list-unstyled components\">
                     <li class=\"active\">
                        <a href=\"#dashboard\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-dashboard yellow_color\"></i> <span>Dashboard</span></a>
                        <ul class=\"collapse list-unstyled\" id=\"dashboard\">
                           <li>
                              <a href=\"dashboard.html\">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href=\"dashboard_2.html\">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul>
                     </li>
                     
                    
                    
                     <li><a href=\"map.html\"><i class=\"fa fa-map purple_color2\"></i> <span>Map</span></a></li>
                     <li><a href=\"charts.html\"><i class=\"fa fa-bar-chart-o green_color\"></i> <span>Charts</span></a></li>
                     <li><a href=\"settings.html\"><i class=\"fa fa-cog yellow_color\"></i> <span>Settings</span></a></li>
                  </ul>
               </div>
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
                           <a href=\"index.html\"><img class=\"img-responsive\" src=\"images/logo/logo.png\" alt=\"#\" /></a>
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
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class=\"row column1\">
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-user yellow_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">2500</p>
                                    <p class=\"head_couter\">Welcome</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-clock-o blue1_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">123.50</p>
                                    <p class=\"head_couter\">Average Time</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-cloud-download green_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">1,805</p>
                                    <p class=\"head_couter\">Collections</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full counter_section margin_bottom_30\">
                              <div class=\"couter_icon\">
                                 <div> 
                                    <i class=\"fa fa-comments-o red_color\"></i>
                                 </div>
                              </div>
                              <div class=\"counter_no\">
                                 <div>
                                    <p class=\"total_no\">54</p>
                                    <p class=\"head_couter\">Comments</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"row column1 social_media_section\">
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons fb margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-facebook\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>35k</strong></span>
                                       <span>Friends</span>
                                    </li>
                                    <li>
                                       <span><strong>128</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons tw margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-twitter\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>584k</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>978</strong></span>
                                       <span>Tweets</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons linked margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-linkedin\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>758+</strong></span>
                                       <span>Contacts</span>
                                    </li>
                                    <li>
                                       <span><strong>365</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                           <div class=\"full socile_icons google_p margin_bottom_30\">
                              <div class=\"social_icon\">
                                 <i class=\"fa fa-google-plus\"></i>
                              </div>
                              <div class=\"social_cont\">
                                 <ul>
                                    <li>
                                       <span><strong>450</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>57</strong></span>
                                       <span>Circles</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- graph -->
                     <div class=\"row column2 graph margin_bottom_30\">
                        <div class=\"col-md-l2 col-lg-12\">
                           <div class=\"white_shd full\">
                              <div class=\"full graph_head\">
                                 <div class=\"heading1 margin_0\">
                                    <h2>Extra Area Chart</h2>
                                 </div>
                              </div>
                              <div class=\"full graph_revenue\">
                                 <div class=\"row\">
                                    <div class=\"col-md-12\">
                                       <div class=\"content\">
                                          <div class=\"area_chart\">
                                             <canvas height=\"120\" id=\"canvas\"></canvas>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end graph -->
                     <div class=\"row column3\">
                        <!-- testimonial -->
                        <div class=\"col-md-6\">
                           <div class=\"dark_bg full margin_bottom_30\">
                              <div class=\"full graph_head\">
                                 <div class=\"heading1 margin_0\">
                                    <h2>Testimonial</h2>
                                 </div>
                              </div>
                              <div class=\"full graph_revenue\">
                                 <div class=\"row\">
                                    <div class=\"col-md-12\">
                                       <div class=\"content testimonial\">
                                          <div id=\"testimonial_slider\" class=\"carousel slide\" data-ride=\"carousel\">
                                             <!-- Wrapper for carousel items -->
                                             <div class=\"carousel-inner\">
                                                <div class=\"item carousel-item active\">
                                                   <div class=\"img-box\"><img src=\"images/layout_img/user_img.jpg\" alt=\"\"></div>
                                                   <p class=\"testimonial\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class=\"overview\"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                                <div class=\"item carousel-item\">
                                                   <div class=\"img-box\"><img src=\"images/layout_img/user_img.jpg\" alt=\"\"></div>
                                                   <p class=\"testimonial\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class=\"overview\"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                                <div class=\"item carousel-item\">
                                                   <div class=\"img-box\"><img src=\"images/layout_img/user_img.jpg\" alt=\"\"></div>
                                                   <p class=\"testimonial\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class=\"overview\"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class=\"carousel-control left carousel-control-prev\" href=\"#testimonial_slider\" data-slide=\"prev\">
                                             <i class=\"fa fa-angle-left\"></i>
                                             </a>
                                             <a class=\"carousel-control right carousel-control-next\" href=\"#testimonial_slider\" data-slide=\"next\">
                                             <i class=\"fa fa-angle-right\"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end testimonial -->
                        <!-- progress bar -->
                        <div class=\"col-md-6\">
                           <div class=\"white_shd full margin_bottom_30\">
                              <div class=\"full graph_head\">
                                 <div class=\"heading1 margin_0\">
                                    <h2>Progress Bar</h2>
                                 </div>
                              </div>
                              <div class=\"full progress_bar_inner\">
                                 <div class=\"row\">
                                    <div class=\"col-md-12\">
                                       <div class=\"progress_bar\">
                                          <!-- Skill Bars -->
                                          <span class=\"skill\" style=\"width:73%;\">Facebook <span class=\"info_valume\">73%</span></span>                  
                                          <div class=\"progress skill-bar \">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"73\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 73%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:62%;\">Twitter <span class=\"info_valume\">62%</span></span>   
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 62%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:54%;\">Instagram <span class=\"info_valume\">54%</span></span>
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"54\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 54%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:82%;\">Google plus <span class=\"info_valume\">82%</span></span>
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"82\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 82%;\">
                                             </div>
                                          </div>
                                          <span class=\"skill\" style=\"width:48%;\">Other <span class=\"info_valume\">48%</span></span>
                                          <div class=\"progress skill-bar\">
                                             <div class=\"progress-bar progress-bar-animated progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"48\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 48%;\">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end progress bar -->
                     </div>
                     <div class=\"row column4 graph\">
                        <div class=\"col-md-6 margin_bottom_30\">
                           <div class=\"dash_blog\">
                              <div class=\"dash_blog_inner\">
                                 <div class=\"dash_head\">
                                    <h3><span><i class=\"fa fa-calendar\"></i> 6 July 2018</span><span class=\"plus_green_bt\"><a href=\"#\">+</a></span></h3>
                                 </div>
                                 <div class=\"list_cont\">
                                    <p>Today Tasks for Ronney Jack</p>
                                 </div>
                                 <div class=\"task_list_main\">
                                    <ul class=\"task_list\">
                                       <li><a href=\"#\">Meeting about plan for Admin Template 2018</a><br><strong>10:00 AM</strong></li>
                                       <li><a href=\"#\">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                       <li><a href=\"#\">Meeting about plan for Admin Template 2018</a><br><strong>11:00 AM</strong></li>
                                       <li><a href=\"#\">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                       <li><a href=\"#\">Meeting about plan for Admin Template 2018</a><br><strong>02:00 PM</strong></li>
                                    </ul>
                                 </div>
                                 <div class=\"read_more\">
                                    <div class=\"center\"><a class=\"main_bt read_bt\" href=\"#\">Read More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-md-6\">
                           <div class=\"dash_blog\">
                              <div class=\"dash_blog_inner\">
                                 <div class=\"dash_head\">
                                    <h3><span><i class=\"fa fa-comments-o\"></i> Updates</span><span class=\"plus_green_bt\"><a href=\"#\">+</a></span></h3>
                                 </div>
                                 <div class=\"list_cont\">
                                    <p>User confirmation</p>
                                 </div>
                                 <div class=\"msg_list_main\">
                                    <ul class=\"msg_list\">
                                       <li>
                                          <span><img src=\"images/layout_img/msg2.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">Herman Beck</span>
                                          <span class=\"msg_user\">Sed ut perspiciatis unde omnis.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src=\"images/layout_img/msg3.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">John Smith</span>
                                          <span class=\"msg_user\">On the other hand, we denounce.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src=\"images/layout_img/msg2.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">John Smith</span>
                                          <span class=\"msg_user\">Sed ut perspiciatis unde omnis.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src=\"images/layout_img/msg3.png\" class=\"img-responsive\" alt=\"#\" /></span>
                                          <span>
                                          <span class=\"name_user\">John Smith</span>
                                          <span class=\"msg_user\">On the other hand, we denounce.</span>
                                          <span class=\"time_ago\">12 min ago</span>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class=\"read_more\">
                                    <div class=\"center\"><a class=\"main_bt read_bt\" href=\"#\">Read More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class=\"container-fluid\">
                     <div class=\"footer\">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href=\"https://themewagon.com/\">ThemeWagon</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
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
      <!-- custom js -->
      <script src=\"js/custom.js\"></script>
      <script src=\"js/chart_custom_style1.js\"></script>
   </body>
</html>", "ad/index.html.twig", "C:\\Users\\Acer\\proj - Copie\\templates\\ad\\index.html.twig");
    }
}
