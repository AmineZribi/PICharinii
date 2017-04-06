<?php

/* layoutAdmin.html.twig */
class __TwigTemplate_a738a6ed0a9bbb1118525e0c251e415dfd4fe2a2c231a42e40d7414a5de0cc1f extends Twig_Template
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
        $__internal_df1c019166b6487cd36a98e98892b88c9de6f1a19bdb3f9d927ef01747a893c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1c019166b6487cd36a98e98892b88c9de6f1a19bdb3f9d927ef01747a893c5->enter($__internal_df1c019166b6487cd36a98e98892b88c9de6f1a19bdb3f9d927ef01747a893c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

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

    <title>Charrini</title>
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
            <!--sidebar nav start-->
            <ul class=\"nav nav-pills nav-stacked custom-nav\">
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-home\"></i> <span>Dashboard</span></a>
                </li>
                <li class=\"menu-list\"><a href=\"#\"><i class=\"fa fa-th-list\"></i> <span>Gestion Reclamation</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_display");
        echo "\">Table de reclamation</a></li>
                        <li><a href=\"dynamic_table.html\">a</a></li>
                        <li><a href=\"responsive_table.html\">b</a></li>
                        <li><a href=\"editable_table.html\">c</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-in\"></i> <span>Login Page</span></a></li>

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
        // line 273
        $this->displayBlock('adminName', $context, $blocks);
        // line 275
        echo "
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class=\"page-heading\">
        <h3>Welcome to your dashboard</h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class=\"wrapper\">

            ";
        // line 294
        $this->displayBlock('content', $context, $blocks);
        // line 296
        echo "
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2017 &copy; Charrini by eZraa
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>

<!--easy pie chart-->
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart/easypiechart-init.js"), "html", null, true);
        echo "\" ></script>

<!--Sparkline Chart-->
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sparkline/sparkline-init.js"), "html", null, true);
        echo "\" ></script>

<!--icheck -->
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/jquery.icheck.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/icheck-init.js"), "html", null, true);
        echo "\" ></script>

<!-- jQuery Flot Chart-->
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot-chart/jquery.flot.tooltip.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\" ></script>


<!--Morris Chart-->
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-chart/morris.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-chart/raphael-min.js"), "html", null, true);
        echo "\" ></script>

<!--Calendar-->
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar/clndr.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar/evnt.calendar.init.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar/moment-2.2.1.js"), "html", null, true);
        echo "\" ></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js\"></script>

<!--common scripts for all pages-->
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\" ></script>

<!--Dashboard Charts-->
<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dashboard-chart-init.js"), "html", null, true);
        echo "\"></script>
<!--dynamic table-->
<script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/advanced-datatable/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/data-tables/DT_bootstrap.js"), "html", null, true);
        echo "\"></script>
<!--dynamic table initialization -->
<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dynamic_table_init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://getbootstrap.com/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_df1c019166b6487cd36a98e98892b88c9de6f1a19bdb3f9d927ef01747a893c5->leave($__internal_df1c019166b6487cd36a98e98892b88c9de6f1a19bdb3f9d927ef01747a893c5_prof);

    }

    // line 273
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_3b2b90c8624b5acb2b1779cacc4c3bc8661fdec3ebd23e68c3fb8617eea1b84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2b90c8624b5acb2b1779cacc4c3bc8661fdec3ebd23e68c3fb8617eea1b84f->enter($__internal_3b2b90c8624b5acb2b1779cacc4c3bc8661fdec3ebd23e68c3fb8617eea1b84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

        // line 274
        echo "                        ";
        
        $__internal_3b2b90c8624b5acb2b1779cacc4c3bc8661fdec3ebd23e68c3fb8617eea1b84f->leave($__internal_3b2b90c8624b5acb2b1779cacc4c3bc8661fdec3ebd23e68c3fb8617eea1b84f_prof);

    }

    // line 294
    public function block_content($context, array $blocks = array())
    {
        $__internal_559498e62c221d2b375d9883358a2d3c274e722c24e578162e9e237e23ef59c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559498e62c221d2b375d9883358a2d3c274e722c24e578162e9e237e23ef59c8->enter($__internal_559498e62c221d2b375d9883358a2d3c274e722c24e578162e9e237e23ef59c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 295
        echo "            ";
        
        $__internal_559498e62c221d2b375d9883358a2d3c274e722c24e578162e9e237e23ef59c8->leave($__internal_559498e62c221d2b375d9883358a2d3c274e722c24e578162e9e237e23ef59c8_prof);

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
        return array (  564 => 295,  558 => 294,  551 => 274,  545 => 273,  533 => 360,  529 => 359,  525 => 358,  520 => 356,  515 => 354,  511 => 353,  506 => 351,  500 => 348,  493 => 344,  489 => 343,  485 => 342,  479 => 339,  475 => 338,  468 => 334,  464 => 333,  460 => 332,  454 => 329,  450 => 328,  444 => 325,  440 => 324,  434 => 321,  430 => 320,  424 => 317,  420 => 316,  416 => 315,  412 => 314,  408 => 313,  404 => 312,  386 => 296,  384 => 294,  363 => 275,  361 => 273,  159 => 74,  150 => 68,  143 => 64,  133 => 57,  126 => 53,  111 => 41,  107 => 40,  100 => 36,  94 => 33,  90 => 32,  84 => 29,  78 => 26,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  24 => 1,);
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

    <title>Charrini</title>
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
            <!--sidebar nav start-->
            <ul class=\"nav nav-pills nav-stacked custom-nav\">
                <li><a href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-home\"></i> <span>Dashboard</span></a>
                </li>
                <li class=\"menu-list\"><a href=\"#\"><i class=\"fa fa-th-list\"></i> <span>Gestion Reclamation</span></a>
                    <ul class=\"sub-menu-list\">
                        <li><a href=\"{{ path('reclamation_display') }}\">Table de reclamation</a></li>
                        <li><a href=\"dynamic_table.html\">a</a></li>
                        <li><a href=\"responsive_table.html\">b</a></li>
                        <li><a href=\"editable_table.html\">c</a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-in\"></i> <span>Login Page</span></a></li>

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
        <h3>Welcome to your dashboard</h3>
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
            2017 &copy; Charrini by eZraa
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
