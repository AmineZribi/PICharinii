<?php

/* layoutAdmin.html.twig */
class __TwigTemplate_793f3a07b70892147c862d6cb9b2f51130f8af1d8c3244b332322565859a52ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'adminName' => array($this, 'block_adminName'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13a84e699a7d08c73332d73402e9e136256bcc846fbba1bb261bd26e408d089e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a84e699a7d08c73332d73402e9e136256bcc846fbba1bb261bd26e408d089e->enter($__internal_13a84e699a7d08c73332d73402e9e136256bcc846fbba1bb261bd26e408d089e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <meta name=\"keywords\" content=\"admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"ThemeBucket\">
    <link rel=\"shortcut icon\" href=\"#\" type=\"image/png\">

    <title>AdminX</title>
    <!--DataTable-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/advanced-datatable/css/demo_page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/advanced-datatable/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheet\" href=\"js/data-tables/DT_bootstrap.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--icheck-->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/skins/minimal/minimal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/skins/square/square.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/skins/square/red.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/skins/square/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--dashboard calendar-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/clndr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--Morris Chart CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-chart/morris.css"), "html", null, true);
        echo "\">

    <!--common-->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!--Sweet Alert-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/sweetalert.css"), "html", null, true);
        echo "\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body class=\"sticky-header\">

<section>
    <!-- left side start-->
    <div class=\"left-side sticky-left-side\">

        <!--logo and iconic logo start-->
        <div class=\"logo\">
            <a href=\"index.html\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"   alt=\"\"></a>
        </div>

        <div class=\"logo-icon text-center\">
            <a href=\"index.html\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_icon.png"), "html", null, true);
        echo "\"  alt=\"\"></a>
        </div>
        <!--logo and iconic logo end-->

        <div class=\"left-side-inner\">

            <!-- visible to small devices only -->
            <div class=\"visible-xs hidden-sm hidden-md hidden-lg\">
                <div class=\"media logged-user\">
                    <img alt=\"\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/photos/user-avatar.png"), "html", null, true);
        echo "\" class=\"media-object\">
                    <div class=\"media-body\">
                        <h4><a href=\"#\"></a></h4>
                        <span>\"Hello There...\"</span>
                    </div>
                </div>

                <h5 class=\"left-nav-title\">Account Information</h5>
                <ul class=\"nav nav-pills nav-stacked custom-nav\">
                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> <span>Profile</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Settings</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-sign-out\"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class=\"nav nav-pills nav-stacked custom-nav\">
                <li class=\"menu-list nav-active\"><a href=\"index.html\"><i class=\"fa fa-home\"></i> <span>Dashboard</span></a>
                    <ul class=\"sub-menu-list\">
                        <li class=\"active\"><a href=\"index_alt.html\"> Dashboard 1</a></li>
                        <li><a href=\"index.html\"> Dashboard 2</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-laptop\"></i> <span>Layouts</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"blank_page.html\"> Blank Page</a></li>
                        <li><a href=\"boxed_view.html\"> Boxed Page</a></li>
                        <li><a href=\"leftmenu_collapsed_view.html\"> Sidebar Collapsed</a></li>
                        <li><a href=\"horizontal_menu.html\"> Horizontal Menu</a></li>

                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-book\"></i> <span>UI Elements</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"general.html\"> General</a></li>
                        <li><a href=\"buttons.html\"> Buttons</a></li>
                        <li><a href=\"tabs-accordions.html\"> Tabs & Accordions</a></li>
                        <li><a href=\"typography.html\"> Typography</a></li>
                        <li><a href=\"slider.html\"> Slider</a></li>
                        <li><a href=\"panels.html\"> Panels</a></li>
                        <li><a href=\"widgets.html\"> Widgets</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-cogs\"></i> <span>Components</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"grids.html\"> Grids</a></li>
                        <li><a href=\"gallery.html\"> Media Gallery</a></li>
                        <li><a href=\"calendar.html\"> Calendar</a></li>
                        <li><a href=\"tree_view.html\"> Tree View</a></li>
                        <li><a href=\"nestable.html\"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href=\"fontawesome.html\"><i class=\"fa fa-bullhorn\"></i> <span>Fontawesome</span></a></li>

                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-envelope\"></i> <span>Mail</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"mail.html\"> Inbox</a></li>
                        <li><a href=\"mail_compose.html\"> Compose Mail</a></li>
                        <li><a href=\"mail_view.html\"> View Mail</a></li>
                    </ul>
                </li>

                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-tasks\"></i> <span>Forms</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"form_layouts.html\"> Form Layouts</a></li>
                        <li><a href=\"form_advanced_components.html\"> Advanced Components</a></li>
                        <li><a href=\"form_wizard.html\"> Form Wizards</a></li>
                        <li><a href=\"form_validation.html\"> Form Validation</a></li>
                        <li><a href=\"editors.html\"> Editors</a></li>
                        <li><a href=\"inline_editors.html\"> Inline Editors</a></li>
                        <li><a href=\"pickers.html\"> Pickers</a></li>
                        <li><a href=\"dropzone.html\"> Dropzone</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-bar-chart-o\"></i> <span>Charts</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"flot_chart.html\"> Flot Charts</a></li>
                        <li><a href=\"morris.html\"> Morris Charts</a></li>
                        <li><a href=\"chartjs.html\"> Chartjs</a></li>
                        <li><a href=\"c3chart.html\"> C3 Charts</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"#\"><i class=\"fa fa-th-list\"></i> <span>Data Tables</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"basic_table.html\"> Basic Table</a></li>
                        <li><a href=\"dynamic_table.html\"> Advanced Table</a></li>
                        <li><a href=\"responsive_table.html\"> Responsive Table</a></li>
                        <li><a href=\"editable_table.html\"> Edit Table</a></li>
                    </ul>
                </li>

                <li class=\"menu-list\"><a href=\"#\"><i class=\"fa fa-map-marker\"></i> <span>Maps</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"google_map.html\"> Google Map</a></li>
                        <li><a href=\"vector_map.html\"> Vector Map</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-file-text\"></i> <span>Extra Pages</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"profile.html\"> Profile</a></li>
                        <li><a href=\"invoice.html\"> Invoice</a></li>
                        <li><a href=\"pricing_table.html\"> Pricing Table</a></li>
                        <li><a href=\"timeline.html\"> Timeline</a></li>
                        <li><a href=\"blog_list.html\"> Blog List</a></li>
                        <li><a href=\"blog_details.html\"> Blog Details</a></li>
                        <li><a href=\"directory.html\"> Directory </a></li>
                        <li><a href=\"chat.html\"> Chat </a></li>
                        <li><a href=\"404.html\"> 404 Error</a></li>
                        <li><a href=\"500.html\"> 500 Error</a></li>
                        <li><a href=\"registration.html\"> Registration Page</a></li>
                        <li><a href=\"lock_screen.html\"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href=\"login.html\"><i class=\"fa fa-sign-in\"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class=\"main-content\" >

        <!-- header section start-->
        <div class=\"header-section\">

            <!--toggle button start-->
            <a class=\"toggle-btn\"><i class=\"fa fa-bars\"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class=\"searchform\" action=\"index.html\" method=\"post\">
                <input type=\"text\" class=\"form-control\" name=\"keyword\" placeholder=\"Search here...\" />
            </form>
            <!--search end-->

            <!--notification menu start -->
            <div class=\"menu-right\">
                <ul class=\"notification-menu\">
                    <li>
                        <a href=\"#\" class=\"btn btn-default dropdown-toggle info-number\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-tasks\"></i>
                            <span class=\"badge\">8</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-head pull-right\">
                            <h5 class=\"title\">You have 8 pending task</h5>
                            <ul class=\"dropdown-list user-list\">
                                <li class=\"new\">
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Database update</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 40%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"40\" role=\"progressbar\" class=\"progress-bar progress-bar-warning\">
                                                <span class=\"\">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 90%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"90\" role=\"progressbar\" class=\"progress-bar progress-bar-success\">
                                                <span class=\"\">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Web Development</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 66%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"66\" role=\"progressbar\" class=\"progress-bar progress-bar-info\">
                                                <span class=\"\">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 33%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"33\" role=\"progressbar\" class=\"progress-bar progress-bar-danger\">
                                                <span class=\"\">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 80%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"80\" role=\"progressbar\" class=\"progress-bar\">
                                                <span class=\"\">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"new\"><a href=\"\">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn btn-default dropdown-toggle info-number\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge\">5</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-head pull-right\">
                            <h5 class=\"title\">You have 5 Mails </h5>
                            <ul class=\"dropdown-list normal-list\">
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user1.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\"> <span class=\"badge badge-success\">new</span></span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user2.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Jonathan Smith</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user3.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Jane Doe</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user4.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Mark Henry</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user5.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Jim Doe</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class=\"new\"><a href=\"\">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn btn-default dropdown-toggle info-number\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"badge\">4</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-head pull-right\">
                            <h5 class=\"title\">Notifications</h5>
                            <ul class=\"dropdown-list normal-list\">
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #1 overloaded.  </span>
                                        <em class=\"small\">34 mins</em>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #3 overloaded.  </span>
                                        <em class=\"small\">1 hrs</em>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #5 overloaded.  </span>
                                        <em class=\"small\">4 hrs</em>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #31 overloaded.  </span>
                                        <em class=\"small\">4 hrs</em>
                                    </a>
                                </li>
                                <li class=\"new\"><a href=\"\">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        ";
        // line 380
        $this->displayBlock('adminName', $context, $blocks);
        // line 382
        echo "
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class=\"page-heading\">
            <h3>
                Dashboard
            </h3>
            <ul class=\"breadcrumb\">
                <li>
                    <a href=\"#\">Dashboard</a>
                </li>
                <li class=\"active\"> My Dashboard </li>
            </ul>
            <div class=\"state-info\">
                <section class=\"panel\">
                    <div class=\"panel-body\">
                        <div class=\"summary\">
                            <span>yearly expense</span>
                            <h3 class=\"red-txt\">\$ 45,600</h3>
                        </div>
                        <div id=\"income\" class=\"chart-bar\"></div>
                    </div>
                </section>
                <section class=\"panel\">
                    <div class=\"panel-body\">
                        <div class=\"summary\">
                            <span>yearly  income</span>
                            <h3 class=\"green-txt\">\$ 45,600</h3>
                        </div>
                        <div id=\"expense\" class=\"chart-bar\"></div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class=\"wrapper\">

            ";
        // line 429
        $this->displayBlock('content', $context, $blocks);
        // line 431
        echo "
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by ThemeBucket
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>

<!--easy pie chart-->
<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart/easypiechart-init.js"), "html", null, true);
        echo "\" ></script>

<!--Sparkline Chart-->
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sparkline/sparkline-init.js"), "html", null, true);
        echo "\" ></script>

<!--icheck -->
<script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/jquery.icheck.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/icheck-init.js"), "html", null, true);
        echo "\" ></script>

<!-- jQuery Flot Chart-->
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot-chart/jquery.flot.tooltip.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\" ></script>


<!--Morris Chart-->
<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-chart/morris.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-chart/raphael-min.js"), "html", null, true);
        echo "\" ></script>

<!--Calendar-->
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar/clndr.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar/evnt.calendar.init.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar/moment-2.2.1.js"), "html", null, true);
        echo "\" ></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js\"></script>

<!--common scripts for all pages-->
<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\" ></script>

<!--Dashboard Charts-->
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dashboard-chart-init.js"), "html", null, true);
        echo "\"></script>
<!--dynamic table-->
<script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/advanced-datatable/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/data-tables/DT_bootstrap.js"), "html", null, true);
        echo "\"></script>
<!--dynamic table initialization -->
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dynamic_table_init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://getbootstrap.com/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_13a84e699a7d08c73332d73402e9e136256bcc846fbba1bb261bd26e408d089e->leave($__internal_13a84e699a7d08c73332d73402e9e136256bcc846fbba1bb261bd26e408d089e_prof);

    }

    // line 380
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_1a5d0f5fb62e1257b9d091dd1f5aac57aac69da73e7824d6f4c0f3051647e02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5d0f5fb62e1257b9d091dd1f5aac57aac69da73e7824d6f4c0f3051647e02f->enter($__internal_1a5d0f5fb62e1257b9d091dd1f5aac57aac69da73e7824d6f4c0f3051647e02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

        // line 381
        echo "                        ";
        
        $__internal_1a5d0f5fb62e1257b9d091dd1f5aac57aac69da73e7824d6f4c0f3051647e02f->leave($__internal_1a5d0f5fb62e1257b9d091dd1f5aac57aac69da73e7824d6f4c0f3051647e02f_prof);

    }

    // line 429
    public function block_content($context, array $blocks = array())
    {
        $__internal_2644430947fdd0124e550f64324a15281dd14cef6a5c7bab554581cf5862d173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2644430947fdd0124e550f64324a15281dd14cef6a5c7bab554581cf5862d173->enter($__internal_2644430947fdd0124e550f64324a15281dd14cef6a5c7bab554581cf5862d173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 430
        echo "            ";
        
        $__internal_2644430947fdd0124e550f64324a15281dd14cef6a5c7bab554581cf5862d173->leave($__internal_2644430947fdd0124e550f64324a15281dd14cef6a5c7bab554581cf5862d173_prof);

    }

    public function getTemplateName()
    {
        return "layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 430,  687 => 429,  680 => 381,  674 => 380,  662 => 495,  658 => 494,  654 => 493,  649 => 491,  644 => 489,  640 => 488,  635 => 486,  629 => 483,  622 => 479,  618 => 478,  614 => 477,  608 => 474,  604 => 473,  597 => 469,  593 => 468,  589 => 467,  583 => 464,  579 => 463,  573 => 460,  569 => 459,  563 => 456,  559 => 455,  553 => 452,  549 => 451,  545 => 450,  541 => 449,  537 => 448,  533 => 447,  515 => 431,  513 => 429,  464 => 382,  462 => 380,  145 => 66,  133 => 57,  126 => 53,  111 => 41,  107 => 40,  100 => 36,  94 => 33,  90 => 32,  84 => 29,  78 => 26,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <meta name=\"keywords\" content=\"admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"ThemeBucket\">
    <link rel=\"shortcut icon\" href=\"#\" type=\"image/png\">

    <title>AdminX</title>
    <!--DataTable-->
    <link href=\"{{ asset('js/advanced-datatable/css/demo_page.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('js/advanced-datatable/css/demo_table.css') }}\" rel=\"stylesheet\" />
    <link rel=\"{{ asset('stylesheet\" href=\"js/data-tables/DT_bootstrap.css') }}\" />
    <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css')}}\" rel=\"stylesheet\">

    <!--icheck-->
    <link href=\"{{ asset('js/iCheck/skins/minimal/minimal.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('js/iCheck/skins/square/square.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('js/iCheck/skins/square/red.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('js/iCheck/skins/square/blue.css') }}\" rel=\"stylesheet\">

    <!--dashboard calendar-->
    <link href=\"{{ asset('css/clndr.css') }}\" rel=\"stylesheet\">

    <!--Morris Chart CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('js/morris-chart/morris.css') }}\">

    <!--common-->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css') }}\" rel=\"stylesheet\">

<!--Sweet Alert-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('dist/sweetalert.css') }}\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('js/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('js/respond.min.js') }}\"></script>
    <![endif]-->
</head>

<body class=\"sticky-header\">

<section>
    <!-- left side start-->
    <div class=\"left-side sticky-left-side\">

        <!--logo and iconic logo start-->
        <div class=\"logo\">
            <a href=\"index.html\"><img src=\"{{ asset('images/logo.png') }}\"   alt=\"\"></a>
        </div>

        <div class=\"logo-icon text-center\">
            <a href=\"index.html\"><img src=\"{{ asset('images/logo_icon.png') }}\"  alt=\"\"></a>
        </div>
        <!--logo and iconic logo end-->

        <div class=\"left-side-inner\">

            <!-- visible to small devices only -->
            <div class=\"visible-xs hidden-sm hidden-md hidden-lg\">
                <div class=\"media logged-user\">
                    <img alt=\"\" src=\"{{ asset('images/photos/user-avatar.png') }}\" class=\"media-object\">
                    <div class=\"media-body\">
                        <h4><a href=\"#\"></a></h4>
                        <span>\"Hello There...\"</span>
                    </div>
                </div>

                <h5 class=\"left-nav-title\">Account Information</h5>
                <ul class=\"nav nav-pills nav-stacked custom-nav\">
                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> <span>Profile</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Settings</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-sign-out\"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class=\"nav nav-pills nav-stacked custom-nav\">
                <li class=\"menu-list nav-active\"><a href=\"index.html\"><i class=\"fa fa-home\"></i> <span>Dashboard</span></a>
                    <ul class=\"sub-menu-list\">
                        <li class=\"active\"><a href=\"index_alt.html\"> Dashboard 1</a></li>
                        <li><a href=\"index.html\"> Dashboard 2</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-laptop\"></i> <span>Layouts</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"blank_page.html\"> Blank Page</a></li>
                        <li><a href=\"boxed_view.html\"> Boxed Page</a></li>
                        <li><a href=\"leftmenu_collapsed_view.html\"> Sidebar Collapsed</a></li>
                        <li><a href=\"horizontal_menu.html\"> Horizontal Menu</a></li>

                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-book\"></i> <span>UI Elements</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"general.html\"> General</a></li>
                        <li><a href=\"buttons.html\"> Buttons</a></li>
                        <li><a href=\"tabs-accordions.html\"> Tabs & Accordions</a></li>
                        <li><a href=\"typography.html\"> Typography</a></li>
                        <li><a href=\"slider.html\"> Slider</a></li>
                        <li><a href=\"panels.html\"> Panels</a></li>
                        <li><a href=\"widgets.html\"> Widgets</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-cogs\"></i> <span>Components</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"grids.html\"> Grids</a></li>
                        <li><a href=\"gallery.html\"> Media Gallery</a></li>
                        <li><a href=\"calendar.html\"> Calendar</a></li>
                        <li><a href=\"tree_view.html\"> Tree View</a></li>
                        <li><a href=\"nestable.html\"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href=\"fontawesome.html\"><i class=\"fa fa-bullhorn\"></i> <span>Fontawesome</span></a></li>

                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-envelope\"></i> <span>Mail</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"mail.html\"> Inbox</a></li>
                        <li><a href=\"mail_compose.html\"> Compose Mail</a></li>
                        <li><a href=\"mail_view.html\"> View Mail</a></li>
                    </ul>
                </li>

                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-tasks\"></i> <span>Forms</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"form_layouts.html\"> Form Layouts</a></li>
                        <li><a href=\"form_advanced_components.html\"> Advanced Components</a></li>
                        <li><a href=\"form_wizard.html\"> Form Wizards</a></li>
                        <li><a href=\"form_validation.html\"> Form Validation</a></li>
                        <li><a href=\"editors.html\"> Editors</a></li>
                        <li><a href=\"inline_editors.html\"> Inline Editors</a></li>
                        <li><a href=\"pickers.html\"> Pickers</a></li>
                        <li><a href=\"dropzone.html\"> Dropzone</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-bar-chart-o\"></i> <span>Charts</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"flot_chart.html\"> Flot Charts</a></li>
                        <li><a href=\"morris.html\"> Morris Charts</a></li>
                        <li><a href=\"chartjs.html\"> Chartjs</a></li>
                        <li><a href=\"c3chart.html\"> C3 Charts</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"#\"><i class=\"fa fa-th-list\"></i> <span>Data Tables</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"basic_table.html\"> Basic Table</a></li>
                        <li><a href=\"dynamic_table.html\"> Advanced Table</a></li>
                        <li><a href=\"responsive_table.html\"> Responsive Table</a></li>
                        <li><a href=\"editable_table.html\"> Edit Table</a></li>
                    </ul>
                </li>

                <li class=\"menu-list\"><a href=\"#\"><i class=\"fa fa-map-marker\"></i> <span>Maps</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"google_map.html\"> Google Map</a></li>
                        <li><a href=\"vector_map.html\"> Vector Map</a></li>
                    </ul>
                </li>
                <li class=\"menu-list\"><a href=\"\"><i class=\"fa fa-file-text\"></i> <span>Extra Pages</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"profile.html\"> Profile</a></li>
                        <li><a href=\"invoice.html\"> Invoice</a></li>
                        <li><a href=\"pricing_table.html\"> Pricing Table</a></li>
                        <li><a href=\"timeline.html\"> Timeline</a></li>
                        <li><a href=\"blog_list.html\"> Blog List</a></li>
                        <li><a href=\"blog_details.html\"> Blog Details</a></li>
                        <li><a href=\"directory.html\"> Directory </a></li>
                        <li><a href=\"chat.html\"> Chat </a></li>
                        <li><a href=\"404.html\"> 404 Error</a></li>
                        <li><a href=\"500.html\"> 500 Error</a></li>
                        <li><a href=\"registration.html\"> Registration Page</a></li>
                        <li><a href=\"lock_screen.html\"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href=\"login.html\"><i class=\"fa fa-sign-in\"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class=\"main-content\" >

        <!-- header section start-->
        <div class=\"header-section\">

            <!--toggle button start-->
            <a class=\"toggle-btn\"><i class=\"fa fa-bars\"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class=\"searchform\" action=\"index.html\" method=\"post\">
                <input type=\"text\" class=\"form-control\" name=\"keyword\" placeholder=\"Search here...\" />
            </form>
            <!--search end-->

            <!--notification menu start -->
            <div class=\"menu-right\">
                <ul class=\"notification-menu\">
                    <li>
                        <a href=\"#\" class=\"btn btn-default dropdown-toggle info-number\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-tasks\"></i>
                            <span class=\"badge\">8</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-head pull-right\">
                            <h5 class=\"title\">You have 8 pending task</h5>
                            <ul class=\"dropdown-list user-list\">
                                <li class=\"new\">
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Database update</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 40%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"40\" role=\"progressbar\" class=\"progress-bar progress-bar-warning\">
                                                <span class=\"\">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 90%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"90\" role=\"progressbar\" class=\"progress-bar progress-bar-success\">
                                                <span class=\"\">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Web Development</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 66%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"66\" role=\"progressbar\" class=\"progress-bar progress-bar-info\">
                                                <span class=\"\">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 33%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"33\" role=\"progressbar\" class=\"progress-bar progress-bar-danger\">
                                                <span class=\"\">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div style=\"width: 80%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"80\" role=\"progressbar\" class=\"progress-bar\">
                                                <span class=\"\">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"new\"><a href=\"\">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn btn-default dropdown-toggle info-number\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge\">5</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-head pull-right\">
                            <h5 class=\"title\">You have 5 Mails </h5>
                            <ul class=\"dropdown-list normal-list\">
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user1.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\"> <span class=\"badge badge-success\">new</span></span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user2.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Jonathan Smith</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user3.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Jane Doe</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user4.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Mark Henry</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"\">
                                        <span class=\"thumb\"><img src=\"images/photos/user5.png\" alt=\"\" /></span>
                                        <span class=\"desc\">
                                          <span class=\"name\">Jim Doe</span>
                                          <span class=\"msg\">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class=\"new\"><a href=\"\">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn btn-default dropdown-toggle info-number\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"badge\">4</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-head pull-right\">
                            <h5 class=\"title\">Notifications</h5>
                            <ul class=\"dropdown-list normal-list\">
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #1 overloaded.  </span>
                                        <em class=\"small\">34 mins</em>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #3 overloaded.  </span>
                                        <em class=\"small\">1 hrs</em>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #5 overloaded.  </span>
                                        <em class=\"small\">4 hrs</em>
                                    </a>
                                </li>
                                <li class=\"new\">
                                    <a href=\"\">
                                        <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                        <span class=\"name\">Server #31 overloaded.  </span>
                                        <em class=\"small\">4 hrs</em>
                                    </a>
                                </li>
                                <li class=\"new\"><a href=\"\">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        {% block adminName %}
                        {% endblock %}

                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class=\"page-heading\">
            <h3>
                Dashboard
            </h3>
            <ul class=\"breadcrumb\">
                <li>
                    <a href=\"#\">Dashboard</a>
                </li>
                <li class=\"active\"> My Dashboard </li>
            </ul>
            <div class=\"state-info\">
                <section class=\"panel\">
                    <div class=\"panel-body\">
                        <div class=\"summary\">
                            <span>yearly expense</span>
                            <h3 class=\"red-txt\">\$ 45,600</h3>
                        </div>
                        <div id=\"income\" class=\"chart-bar\"></div>
                    </div>
                </section>
                <section class=\"panel\">
                    <div class=\"panel-body\">
                        <div class=\"summary\">
                            <span>yearly  income</span>
                            <h3 class=\"green-txt\">\$ 45,600</h3>
                        </div>
                        <div id=\"expense\" class=\"chart-bar\"></div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class=\"wrapper\">

            {% block content %}
            {% endblock %}

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by ThemeBucket
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"{{ asset('js/jquery-1.10.2.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-migrate-1.2.1.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/modernizr.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.nicescroll.js') }}\"></script>

<!--easy pie chart-->
<script src=\"{{ asset('js/easypiechart/jquery.easypiechart.js') }}\"></script>
<script src=\"{{ asset('js/easypiechart/easypiechart-init.js') }}\" ></script>

<!--Sparkline Chart-->
<script src=\"{{ asset('js/sparkline/jquery.sparkline.js') }}\"></script>
<script src=\"{{ asset('js/sparkline/sparkline-init.js') }}\" ></script>

<!--icheck -->
<script src=\"{{ asset('js/iCheck/jquery.icheck.js') }}\" ></script>
<script src=\"{{ asset('js/icheck-init.js') }}\" ></script>

<!-- jQuery Flot Chart-->
<script src=\"{{ asset('js/flot-chart/jquery.flot.js') }}\" ></script>
<script src=\"{{ asset('js/flot-chart/jquery.flot.tooltip.js') }}\" ></script>
<script src=\"{{ asset('js/flot-chart/jquery.flot.resize.js') }}\" ></script>


<!--Morris Chart-->
<script src=\"{{ asset('js/morris-chart/morris.js') }}\" ></script>
<script src=\"{{ asset('js/morris-chart/raphael-min.js') }}\" ></script>

<!--Calendar-->
<script src=\"{{ asset('js/calendar/clndr.js') }}\" ></script>
<script src=\"{{ asset('js/calendar/evnt.calendar.init.js') }}\" ></script>
<script src=\"{{ asset('js/calendar/moment-2.2.1.js') }}\" ></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js\"></script>

<!--common scripts for all pages-->
<script src=\"{{ asset('js/scripts.js') }}\" ></script>

<!--Dashboard Charts-->
<script src=\"{{ asset('js/dashboard-chart-init.js') }}\"></script>
<!--dynamic table-->
<script type=\"text/javascript\" language=\"javascript\" src=\"{{ asset('js/advanced-datatable/js/jquery.dataTables.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/data-tables/DT_bootstrap.js') }}\"></script>
<!--dynamic table initialization -->
<script src=\"{{ asset('js/dynamic_table_init.js')}}\"></script>

<script src=\"{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}\"></script>
<script src=\"{{ asset('http://getbootstrap.com/dist/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('dist/sweetalert.min.js') }}\"></script>

</body>
</html>
", "layoutAdmin.html.twig", "C:\\wamp64\\www\\PICharini\\app\\Resources\\views\\layoutAdmin.html.twig");
    }
}
