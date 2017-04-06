<?php

/* layoutUser.html.twig */
class __TwigTemplate_b74894af02b9013708efe6984179a9f2cebe7c79fc23eb9f010e317fa80f1ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'content' => array($this, 'block_content'),
            'usersection' => array($this, 'block_usersection'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3342aa6bdd39f9050d4f39c353cee239a1f7688655fb8842f6dc621e3fcab458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3342aa6bdd39f9050d4f39c353cee239a1f7688655fb8842f6dc621e3fcab458->enter($__internal_3342aa6bdd39f9050d4f39c353cee239a1f7688655fb8842f6dc621e3fcab458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutUser.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"all,follow\">
    <meta name=\"googlebot\" content=\"index,follow,snippet,archive\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Obaju e-commerce template\">
    <meta name=\"author\" content=\"Ondrej Svestka | ondrejsvestka.cz\">
    <meta name=\"keywords\" content=\"\">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name=\"keywords\" content=\"\">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\" />

    ";
        // line 35
        echo "

    <!-- theme stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\" />

    ";
        // line 43
        echo "
    <!-- your stylesheet with modifications -->
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\"/>
    ";
        // line 49
        echo "
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 52
        echo "

    <link rel=\"shortcut icon\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">



</head>

<body>

<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id=\"top\">
    <div class=\"container\">
        <div class=\"col-md-6 offer\" data-animate=\"fadeInDown\">
            <a href=\"#\" class=\"btn btn-success btn-sm\" data-animate-hover=\"shake\">Offer of the day</a>  <a href=\"#\">Get flat 35% off on orders over \$50!</a>
        </div>
        <div class=\"col-md-6\" data-animate=\"fadeInDown\">
            <ul class=\"menu\">
                <!--<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>

                </li>
                <li><a href=\"#\">Register</a>

                </li>
                <li><a href=\"contact.html\">Contact</a>
                </li>
                <li><a href=\"#\">Recently viewed</a>-->

                ";
        // line 81
        $this->displayBlock('login', $context, $blocks);
        // line 85
        echo "                </li>
            </ul>
        </div>
    </div>
    <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">

            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"Login\">Customer login</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"customer-orders.html\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"email-modal\" placeholder=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" id=\"password-modal\" placeholder=\"password\">
                        </div>

                        <p class=\"text-center\">
                            <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
                        </p>

                    </form>

                    <p class=\"text-center text-muted\">Not registered yet?</p>
                    <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class=\"navbar navbar-default yamm\" role=\"navigation\" id=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <a class=\"navbar-brand home\" href=\"index.html\" data-animate-hover=\"bounce\">
                <img src=\" ";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"hidden-xs\">
                <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-small.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"visible-xs\"><span class=\"sr-only\">Obaju - go to homepage</span>
            </a>
            <div class=\"navbar-buttons\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"fa fa-align-justify\"></i>
                </button>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#search\">
                    <span class=\"sr-only\">Toggle search</span>
                    <i class=\"fa fa-search\"></i>
                </button>
                <a class=\"btn btn-default navbar-toggle\" href=\"basket.html\">
                    <i class=\"fa fa-shopping-cart\"></i>  <span class=\"hidden-xs\">3 items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class=\"navbar-collapse collapse\" id=\"navigation\">

            <ul class=\"nav navbar-nav navbar-left\">
                <li class=\"active\"><a href=\"index.html\">Home</a>
                </li>
                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Produit <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
                                        <ul>
                                            <li><a href=\"category.html\">T-shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Pants</a>
                                            </li>
                                            <li><a href=\"category.html\">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Featured</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Cadeaux <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
                                        <ul>
                                            <li><a href=\"category.html\">T-shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Pants</a>
                                            </li>
                                            <li><a href=\"category.html\">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\" ";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner.jpg"), "html", null, true);
        echo "\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\" ";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner2.jpg"), "html", null, true);
        echo "\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Contactez nous <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Shop</h5>
                                        <ul>
                                            <li><a href=\"index.html\">Homepage</a>
                                            </li>
                                            <li><a href=\"category.html\">Category - sidebar left</a>
                                            </li>
                                            <li><a href=\"category-right.html\">Category - sidebar right</a>
                                            </li>
                                            <li><a href=\"category-full.html\">Category - full width</a>
                                            </li>
                                            <li><a href=\"detail.html\">Product detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>User</h5>
                                        <ul>
                                            <li><a href=\"register.html\">Register / login</a>
                                            </li>
                                            <li><a href=\"customer-orders.html\">Orders history</a>
                                            </li>
                                            <li><a href=\"customer-order.html\">Order history detail</a>
                                            </li>
                                            <li><a href=\"customer-wishlist.html\">Wishlist</a>
                                            </li>
                                            <li><a href=\"customer-account.html\">Customer account / change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Order process</h5>
                                        <ul>
                                            <li><a href=\"basket.html\">Shopping cart</a>
                                            </li>
                                            <li><a href=\"checkout1.html\">Checkout - step 1</a>
                                            </li>
                                            <li><a href=\"checkout2.html\">Checkout - step 2</a>
                                            </li>
                                            <li><a href=\"checkout3.html\">Checkout - step 3</a>
                                            </li>
                                            <li><a href=\"checkout4.html\">Checkout - step 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href=\"blog.html\">Blog listing</a>
                                            </li>
                                            <li><a href=\"post.html\">Blog Post</a>
                                            </li>
                                            <li><a href=\"faq.html\">FAQ</a>
                                            </li>
                                            <li><a href=\"text.html\">Text page</a>
                                            </li>
                                            <li><a href=\"text-right.html\">Text page - right sidebar</a>
                                            </li>
                                            <li><a href=\"404.html\">404 page</a>
                                            </li>
                                            <li><a href=\"contact.html\">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class=\"navbar-buttons\">

            <div class=\"navbar-collapse collapse right\" id=\"basket-overview\">
                <a href=\"basket.html\" class=\"btn btn-primary navbar-btn\"><i class=\"fa fa-shopping-cart\"></i><span class=\"hidden-sm\">3 items in cart</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class=\"navbar-collapse collapse right\" id=\"search-not-mobile\">
                <button type=\"button\" class=\"btn navbar-btn btn-primary\" data-toggle=\"collapse\" data-target=\"#search\">
                    <span class=\"sr-only\">Toggle search</span>
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>

        </div>

        <div class=\"collapse clearfix\" id=\"search\">

            <form class=\"navbar-form\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    <span class=\"input-group-btn\">

\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>

\t\t    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->



<div id=\"all\">

    <div id=\"content\">

        ";
        // line 435
        $this->displayBlock('content', $context, $blocks);
        // line 437
        echo "



    </div>
    <!-- /#content -->

    <!-- *** FOOTER ***
_________________________________________________________ -->
    <div id=\"footer\" data-animate=\"fadeInUp\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <h4>Pages</h4>

                    <ul>
                        <li><a href=\"text.html\">About us</a>
                        </li>
                        <li><a href=\"text.html\">Terms and conditions</a>
                        </li>
                        <li><a href=\"faq.html\">FAQ</a>
                        </li>
                        <li><a href=\"contact.html\">Contact us</a>
                        </li>
                    </ul>

                    <hr>



                        ";
        // line 467
        $this->displayBlock('usersection', $context, $blocks);
        // line 468
        echo "


                    <hr class=\"hidden-md hidden-lg hidden-sm\">

                </div>
                <!-- /.col-md-3 -->

                <div class=\"col-md-3 col-sm-6\">

                    <h4>Top categories</h4>

                    <h5>Men</h5>

                    <ul>
                        <li><a href=\"category.html\">T-shirts</a>
                        </li>
                        <li><a href=\"category.html\">Shirts</a>
                        </li>
                        <li><a href=\"category.html\">Accessories</a>
                        </li>
                    </ul>

                    <h5>Ladies</h5>
                    <ul>
                        <li><a href=\"category.html\">T-shirts</a>
                        </li>
                        <li><a href=\"category.html\">Skirts</a>
                        </li>
                        <li><a href=\"category.html\">Pants</a>
                        </li>
                        <li><a href=\"category.html\">Accessories</a>
                        </li>
                    </ul>

                    <hr class=\"hidden-md hidden-lg\">

                </div>
                <!-- /.col-md-3 -->

                <div class=\"col-md-3 col-sm-6\">

                    <h4>Where to find us</h4>

                    <p><strong>Obaju Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>New Heaven
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href=\"contact.html\">Go to contact page</a>

                    <hr class=\"hidden-md hidden-lg\">

                </div>
                <!-- /.col-md-3 -->



                <div class=\"col-md-3 col-sm-6\">

                    <h4>Get the news</h4>

                    <p class=\"text-muted\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <form>
                        <div class=\"input-group\">

                            <input type=\"text\" class=\"form-control\">

                            <span class=\"input-group-btn\">

\t\t\t    <button class=\"btn btn-default\" type=\"button\">Subscribe!</button>

\t\t\t</span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr>

                    <h4>Stay in touch</h4>

                    <p class=\"social\">
                        <a href=\"#\" class=\"facebook external\" data-animate-hover=\"shake\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\" class=\"twitter external\" data-animate-hover=\"shake\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" class=\"instagram external\" data-animate-hover=\"shake\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\" class=\"gplus external\" data-animate-hover=\"shake\"><i class=\"fa fa-google-plus\"></i></a>
                        <a href=\"#\" class=\"email external\" data-animate-hover=\"shake\"><i class=\"fa fa-envelope\"></i></a>
                    </p>


                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#footer -->

    <!-- *** FOOTER END *** -->




    <!-- *** COPYRIGHT ***
_________________________________________________________ -->
    <div id=\"copyright\">
        <div class=\"container\">
            <div class=\"col-md-6\">
                <p class=\"pull-left\">2017 &copy; Charrini by eZraa</p>

            </div>
            <div class=\"col-md-6\">
                <p class=\"pull-right\">Template by <a href=\"https://bootstrapious.com/e-commerce-templates\">Bootstrapious.com</a>
                    <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                </p>
            </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END *** -->



</div>
<!-- /#all -->




<!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->



<script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/front.js"), "html", null, true);
        echo "\"></script>

";
        // line 629
        echo "


</body>

</html>";
        
        $__internal_3342aa6bdd39f9050d4f39c353cee239a1f7688655fb8842f6dc621e3fcab458->leave($__internal_3342aa6bdd39f9050d4f39c353cee239a1f7688655fb8842f6dc621e3fcab458_prof);

    }

    // line 81
    public function block_login($context, array $blocks = array())
    {
        $__internal_00c77905ba7df92a864b1f7d3e99fd0c28fbee586c46b3902686653c999d56ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c77905ba7df92a864b1f7d3e99fd0c28fbee586c46b3902686653c999d56ec->enter($__internal_00c77905ba7df92a864b1f7d3e99fd0c28fbee586c46b3902686653c999d56ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 82
        echo "

                ";
        
        $__internal_00c77905ba7df92a864b1f7d3e99fd0c28fbee586c46b3902686653c999d56ec->leave($__internal_00c77905ba7df92a864b1f7d3e99fd0c28fbee586c46b3902686653c999d56ec_prof);

    }

    // line 435
    public function block_content($context, array $blocks = array())
    {
        $__internal_875a090d4c20c22f7df3a422f6de87527cf1cdd50192817ae1a9a7329819c58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875a090d4c20c22f7df3a422f6de87527cf1cdd50192817ae1a9a7329819c58b->enter($__internal_875a090d4c20c22f7df3a422f6de87527cf1cdd50192817ae1a9a7329819c58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 436
        echo "        ";
        
        $__internal_875a090d4c20c22f7df3a422f6de87527cf1cdd50192817ae1a9a7329819c58b->leave($__internal_875a090d4c20c22f7df3a422f6de87527cf1cdd50192817ae1a9a7329819c58b_prof);

    }

    // line 467
    public function block_usersection($context, array $blocks = array())
    {
        $__internal_26277ba9bf5d81007638376507256a1b6bbd294b07b15d841547ee6b26cc259d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26277ba9bf5d81007638376507256a1b6bbd294b07b15d841547ee6b26cc259d->enter($__internal_26277ba9bf5d81007638376507256a1b6bbd294b07b15d841547ee6b26cc259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersection"));

        
        $__internal_26277ba9bf5d81007638376507256a1b6bbd294b07b15d841547ee6b26cc259d->leave($__internal_26277ba9bf5d81007638376507256a1b6bbd294b07b15d841547ee6b26cc259d_prof);

    }

    public function getTemplateName()
    {
        return "layoutUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 467,  741 => 436,  735 => 435,  726 => 82,  720 => 81,  708 => 629,  703 => 617,  699 => 616,  695 => 615,  691 => 614,  687 => 613,  683 => 612,  679 => 611,  675 => 610,  531 => 468,  529 => 467,  497 => 437,  495 => 435,  355 => 298,  347 => 293,  184 => 133,  180 => 132,  131 => 85,  129 => 81,  99 => 54,  95 => 52,  91 => 50,  88 => 49,  84 => 45,  80 => 43,  75 => 38,  70 => 35,  65 => 27,  61 => 26,  57 => 25,  53 => 24,  49 => 23,  25 => 1,);
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
    <meta name=\"robots\" content=\"all,follow\">
    <meta name=\"googlebot\" content=\"index,follow,snippet,archive\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Obaju e-commerce template\">
    <meta name=\"author\" content=\"Ondrej Svestka | ondrejsvestka.cz\">
    <meta name=\"keywords\" content=\"\">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name=\"keywords\" content=\"\">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.css') }}\" />

    {# <link href=\"css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"css/owl.carousel.css\" rel=\"stylesheet\">
    <link href=\"css/owl.theme.css\" rel=\"stylesheet\">
    #}


    <!-- theme stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.default.css') }}\" id=\"theme-stylesheet\" />

    {#
    <link href=\"css/style.default.css\" rel=\"stylesheet\" id=\"theme-stylesheet\">
    #}

    <!-- your stylesheet with modifications -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\"/>
    {#
    <link href=\"css/custom.css\" rel=\"stylesheet\">
    #}

    <script src=\"{{ asset('js/respond.min.js') }}\"></script>
    {# <script src=\"js/respond.min.js\"></script> #}


    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.png') }}\">



</head>

<body>

<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id=\"top\">
    <div class=\"container\">
        <div class=\"col-md-6 offer\" data-animate=\"fadeInDown\">
            <a href=\"#\" class=\"btn btn-success btn-sm\" data-animate-hover=\"shake\">Offer of the day</a>  <a href=\"#\">Get flat 35% off on orders over \$50!</a>
        </div>
        <div class=\"col-md-6\" data-animate=\"fadeInDown\">
            <ul class=\"menu\">
                <!--<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>

                </li>
                <li><a href=\"#\">Register</a>

                </li>
                <li><a href=\"contact.html\">Contact</a>
                </li>
                <li><a href=\"#\">Recently viewed</a>-->

                {% block login %}


                {% endblock %}
                </li>
            </ul>
        </div>
    </div>
    <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">

            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"Login\">Customer login</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"customer-orders.html\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"email-modal\" placeholder=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" id=\"password-modal\" placeholder=\"password\">
                        </div>

                        <p class=\"text-center\">
                            <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
                        </p>

                    </form>

                    <p class=\"text-center text-muted\">Not registered yet?</p>
                    <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class=\"navbar navbar-default yamm\" role=\"navigation\" id=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <a class=\"navbar-brand home\" href=\"index.html\" data-animate-hover=\"bounce\">
                <img src=\" {{ asset('images/logo.png') }}\" alt=\"Obaju logo\" class=\"hidden-xs\">
                <img src=\"{{ asset('images/logo-small.png') }}\" alt=\"Obaju logo\" class=\"visible-xs\"><span class=\"sr-only\">Obaju - go to homepage</span>
            </a>
            <div class=\"navbar-buttons\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"fa fa-align-justify\"></i>
                </button>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#search\">
                    <span class=\"sr-only\">Toggle search</span>
                    <i class=\"fa fa-search\"></i>
                </button>
                <a class=\"btn btn-default navbar-toggle\" href=\"basket.html\">
                    <i class=\"fa fa-shopping-cart\"></i>  <span class=\"hidden-xs\">3 items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class=\"navbar-collapse collapse\" id=\"navigation\">

            <ul class=\"nav navbar-nav navbar-left\">
                <li class=\"active\"><a href=\"index.html\">Home</a>
                </li>
                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Produit <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
                                        <ul>
                                            <li><a href=\"category.html\">T-shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Pants</a>
                                            </li>
                                            <li><a href=\"category.html\">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Featured</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Cadeaux <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
                                        <ul>
                                            <li><a href=\"category.html\">T-shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Shirts</a>
                                            </li>
                                            <li><a href=\"category.html\">Pants</a>
                                            </li>
                                            <li><a href=\"category.html\">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\" {{ asset('images/banner.jpg') }}\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\" {{ asset('images/banner2.jpg') }}\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Contactez nous <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Shop</h5>
                                        <ul>
                                            <li><a href=\"index.html\">Homepage</a>
                                            </li>
                                            <li><a href=\"category.html\">Category - sidebar left</a>
                                            </li>
                                            <li><a href=\"category-right.html\">Category - sidebar right</a>
                                            </li>
                                            <li><a href=\"category-full.html\">Category - full width</a>
                                            </li>
                                            <li><a href=\"detail.html\">Product detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>User</h5>
                                        <ul>
                                            <li><a href=\"register.html\">Register / login</a>
                                            </li>
                                            <li><a href=\"customer-orders.html\">Orders history</a>
                                            </li>
                                            <li><a href=\"customer-order.html\">Order history detail</a>
                                            </li>
                                            <li><a href=\"customer-wishlist.html\">Wishlist</a>
                                            </li>
                                            <li><a href=\"customer-account.html\">Customer account / change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Order process</h5>
                                        <ul>
                                            <li><a href=\"basket.html\">Shopping cart</a>
                                            </li>
                                            <li><a href=\"checkout1.html\">Checkout - step 1</a>
                                            </li>
                                            <li><a href=\"checkout2.html\">Checkout - step 2</a>
                                            </li>
                                            <li><a href=\"checkout3.html\">Checkout - step 3</a>
                                            </li>
                                            <li><a href=\"checkout4.html\">Checkout - step 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href=\"blog.html\">Blog listing</a>
                                            </li>
                                            <li><a href=\"post.html\">Blog Post</a>
                                            </li>
                                            <li><a href=\"faq.html\">FAQ</a>
                                            </li>
                                            <li><a href=\"text.html\">Text page</a>
                                            </li>
                                            <li><a href=\"text-right.html\">Text page - right sidebar</a>
                                            </li>
                                            <li><a href=\"404.html\">404 page</a>
                                            </li>
                                            <li><a href=\"contact.html\">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class=\"navbar-buttons\">

            <div class=\"navbar-collapse collapse right\" id=\"basket-overview\">
                <a href=\"basket.html\" class=\"btn btn-primary navbar-btn\"><i class=\"fa fa-shopping-cart\"></i><span class=\"hidden-sm\">3 items in cart</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class=\"navbar-collapse collapse right\" id=\"search-not-mobile\">
                <button type=\"button\" class=\"btn navbar-btn btn-primary\" data-toggle=\"collapse\" data-target=\"#search\">
                    <span class=\"sr-only\">Toggle search</span>
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>

        </div>

        <div class=\"collapse clearfix\" id=\"search\">

            <form class=\"navbar-form\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    <span class=\"input-group-btn\">

\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>

\t\t    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->



<div id=\"all\">

    <div id=\"content\">

        {% block content %}
        {% endblock %}




    </div>
    <!-- /#content -->

    <!-- *** FOOTER ***
_________________________________________________________ -->
    <div id=\"footer\" data-animate=\"fadeInUp\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <h4>Pages</h4>

                    <ul>
                        <li><a href=\"text.html\">About us</a>
                        </li>
                        <li><a href=\"text.html\">Terms and conditions</a>
                        </li>
                        <li><a href=\"faq.html\">FAQ</a>
                        </li>
                        <li><a href=\"contact.html\">Contact us</a>
                        </li>
                    </ul>

                    <hr>



                        {% block usersection %}{% endblock %}



                    <hr class=\"hidden-md hidden-lg hidden-sm\">

                </div>
                <!-- /.col-md-3 -->

                <div class=\"col-md-3 col-sm-6\">

                    <h4>Top categories</h4>

                    <h5>Men</h5>

                    <ul>
                        <li><a href=\"category.html\">T-shirts</a>
                        </li>
                        <li><a href=\"category.html\">Shirts</a>
                        </li>
                        <li><a href=\"category.html\">Accessories</a>
                        </li>
                    </ul>

                    <h5>Ladies</h5>
                    <ul>
                        <li><a href=\"category.html\">T-shirts</a>
                        </li>
                        <li><a href=\"category.html\">Skirts</a>
                        </li>
                        <li><a href=\"category.html\">Pants</a>
                        </li>
                        <li><a href=\"category.html\">Accessories</a>
                        </li>
                    </ul>

                    <hr class=\"hidden-md hidden-lg\">

                </div>
                <!-- /.col-md-3 -->

                <div class=\"col-md-3 col-sm-6\">

                    <h4>Where to find us</h4>

                    <p><strong>Obaju Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>New Heaven
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href=\"contact.html\">Go to contact page</a>

                    <hr class=\"hidden-md hidden-lg\">

                </div>
                <!-- /.col-md-3 -->



                <div class=\"col-md-3 col-sm-6\">

                    <h4>Get the news</h4>

                    <p class=\"text-muted\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <form>
                        <div class=\"input-group\">

                            <input type=\"text\" class=\"form-control\">

                            <span class=\"input-group-btn\">

\t\t\t    <button class=\"btn btn-default\" type=\"button\">Subscribe!</button>

\t\t\t</span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr>

                    <h4>Stay in touch</h4>

                    <p class=\"social\">
                        <a href=\"#\" class=\"facebook external\" data-animate-hover=\"shake\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\" class=\"twitter external\" data-animate-hover=\"shake\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" class=\"instagram external\" data-animate-hover=\"shake\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\" class=\"gplus external\" data-animate-hover=\"shake\"><i class=\"fa fa-google-plus\"></i></a>
                        <a href=\"#\" class=\"email external\" data-animate-hover=\"shake\"><i class=\"fa fa-envelope\"></i></a>
                    </p>


                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#footer -->

    <!-- *** FOOTER END *** -->




    <!-- *** COPYRIGHT ***
_________________________________________________________ -->
    <div id=\"copyright\">
        <div class=\"container\">
            <div class=\"col-md-6\">
                <p class=\"pull-left\">2017 &copy; Charrini by eZraa</p>

            </div>
            <div class=\"col-md-6\">
                <p class=\"pull-right\">Template by <a href=\"https://bootstrapious.com/e-commerce-templates\">Bootstrapious.com</a>
                    <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                </p>
            </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END *** -->



</div>
<!-- /#all -->




<!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->



<script src=\"{{ asset('js/jquery-1.11.0.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.cookie.js') }}\"></script>
<script src=\"{{ asset('js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/modernizr.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap-hover-dropdown.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/front.js') }}\"></script>

{#
    <script src=\"js/jquery-1.11.0.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.cookie.js\"></script>
    <script src=\"js/waypoints.min.js\"></script>
    <script src=\"js/modernizr.js\"></script>
    <script src=\"js/bootstrap-hover-dropdown.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/front.js\"></script>
#}



</body>

</html>", "layoutUser.html.twig", "C:\\wamp64\\www\\PICharini\\app\\Resources\\views\\layoutUser.html.twig");
    }
}
