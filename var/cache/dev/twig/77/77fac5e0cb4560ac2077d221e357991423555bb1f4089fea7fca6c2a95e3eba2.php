<?php

/* ReclamationBundle:Front:Produit.html.twig */
class __TwigTemplate_3ad6fa241c8fdb5edb44c02977378709af2138f4ad5b5f5cf5ff52b168096905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "ReclamationBundle:Front:Produit.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_067aab6b627ff2ee83b92adde67a337afd1cfcedff83cf4a5ac6432315525057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067aab6b627ff2ee83b92adde67a337afd1cfcedff83cf4a5ac6432315525057->enter($__internal_067aab6b627ff2ee83b92adde67a337afd1cfcedff83cf4a5ac6432315525057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Front:Produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067aab6b627ff2ee83b92adde67a337afd1cfcedff83cf4a5ac6432315525057->leave($__internal_067aab6b627ff2ee83b92adde67a337afd1cfcedff83cf4a5ac6432315525057_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_1b8db5960d26f703755f50fbeed7056c71797b5597d90aa372376f133ada4ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8db5960d26f703755f50fbeed7056c71797b5597d90aa372376f133ada4ae7->enter($__internal_1b8db5960d26f703755f50fbeed7056c71797b5597d90aa372376f133ada4ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userdash");
        echo "\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
    <li><a href=\"contact.html\">Contact</a>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
    ";
        
        $__internal_1b8db5960d26f703755f50fbeed7056c71797b5597d90aa372376f133ada4ae7->leave($__internal_1b8db5960d26f703755f50fbeed7056c71797b5597d90aa372376f133ada4ae7_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_170a747ca177815cd7bf626aa775150fd816ad83e66d0351e9727ed8b85b1066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170a747ca177815cd7bf626aa775150fd816ad83e66d0351e9727ed8b85b1066->enter($__internal_170a747ca177815cd7bf626aa775150fd816ad83e66d0351e9727ed8b85b1066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<!-- *** NAVBAR END *** -->

<div id=\"all\">

    <div id=\"content\">
        <div class=\"container\">

            <div class=\"col-md-12\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a>
                    </li>
                    <li><a href=\"#\">Ladies</a>
                    </li>
                    <li><a href=\"#\">Tops</a>
                    </li>
                    <li>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "nomp", array()), "html", null, true);
        echo "</li>
                </ul>

            </div>

            <div class=\"col-md-3\">
                <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Categories</h3>
                    </div>

                    <div class=\"panel-body\">
                        <ul class=\"nav nav-pills nav-stacked category-menu\">
                            <li>
                                <a href=\"category.html\">Men <span class=\"badge pull-right\">42</span></a>
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
                            </li>
                            <li class=\"active\">
                                <a href=\"category.html\">Ladies  <span class=\"badge pull-right\">123</span></a>
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
                            </li>
                            <li>
                                <a href=\"category.html\">Kids  <span class=\"badge pull-right\">11</span></a>
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
                            </li>

                        </ul>

                    </div>
                </div>

                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Brands <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                    </div>

                    <div class=\"panel-body\">

                        <form>
                            <div class=\"form-group\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Armani (10)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Versace (12)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Carlo Bruni (15)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Jack Honey (14)
                                    </label>
                                </div>
                            </div>

                            <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                        </form>

                    </div>
                </div>

                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Colours <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                    </div>

                    <div class=\"panel-body\">

                        <form>
                            <div class=\"form-group\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour white\"></span> White (14)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour blue\"></span> Blue (10)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour green\"></span> Green (20)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour yellow\"></span> Yellow (13)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour red\"></span> Red (10)
                                    </label>
                                </div>
                            </div>

                            <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                        </form>

                    </div>
                </div>

                <!-- *** MENUS AND FILTERS END *** -->

                <div class=\"banner\">
                    <a href=\"#\">
                        <img src=\"img/banner.jpg\" alt=\"sales 2014\" class=\"img-responsive\">
                    </a>
                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"row\" id=\"productMain\">
                    <div class=\"col-sm-6\">
                        <div id=\"mainImage\">
                            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/detailbig1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                        </div>

                        <div class=\"ribbon sale\">
                            <div class=\"theribbon\">SALE</div>
                            <div class=\"ribbon-background\"></div>
                        </div>
                        <!-- /.ribbon -->

                        <div class=\"ribbon new\">
                            <div class=\"theribbon\">NEW</div>
                            <div class=\"ribbon-background\"></div>
                        </div>
                        <!-- /.ribbon -->

                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"box\">
                            <h1 class=\"text-center\">";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "nomp", array()), "html", null, true);
        echo "</h1>
                            <p class=\"goToDescription\"><a href=\"#details\" class=\"scroll-to\">Scroll to product details, material & care and sizing</a>
                            </p>
                            <p class=\"price\">";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "ancienprix", array()), "html", null, true);
        echo "DT</p>

                            <p class=\"text-center buttons\">
                                <a href=\"basket.html\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i> Ajouter a la carte</a>
                                <a href=\"basket.html\" class=\"btn btn-default\"><i class=\"fa fa-heart\"></i>Ajouter a la liste de voeux</a>
                                <a href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamer", array("id" => $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pencil fa-fw\"></i> Reclamer</a>
                            </p>


                        </div>

                        <div class=\"row\" id=\"thumbs\">
                            <div class=\"col-xs-4\">
                                <a href=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/detailbig1.jpg"), "html", null, true);
        echo "\" class=\"thumb\">
                                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/detailsquare.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"img/detailbig2.jpg\" class=\"thumb\">
                                    <img src=\"img/detailsquare2.jpg\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"img/detailbig3.jpg\" class=\"thumb\">
                                    <img src=\"img/detailsquare3.jpg\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


                <div class=\"box\" id=\"details\">
                    <p>
                    <h4>Product details</h4>
                    <p>";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "description", array()), "html", null, true);
        echo "</p>

                    <hr>
                    <div id=\"comments\" data-animate=\"fadeInUp\">
                        <h4>2 comments</h4>


                        <div class=\"row comment\">
                            <div class=\"col-sm-3 col-md-2 text-center-xs\">
                                <p>
                                    <img src=\"img/blog-avatar2.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                                </p>
                            </div>
                            <div class=\"col-sm-9 col-md-10\">
                                <h5>Julie Alma</h5>
                                <p class=\"posted\"><i class=\"fa fa-clock-o\"></i> September 23, 2011 at 12:00 am</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class=\"reply\"><a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                </p>
                            </div>
                        </div>
                        <!-- /.comment -->


                        <div class=\"row comment last\">

                            <div class=\"col-sm-3 col-md-2 text-center-xs\">
                                <p>
                                    <img src=\"img/blog-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                                </p>
                            </div>

                            <div class=\"col-sm-9 col-md-10\">
                                <h5>Louise Armero</h5>
                                <p class=\"posted\"><i class=\"fa fa-clock-o\"></i> September 23, 2012 at 12:00 am</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class=\"reply\"><a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                </p>
                            </div>

                        </div>
                        <!-- /.comment -->

                    </div>
                    <!-- /#comments -->

                    <div id=\"comment-form\" data-animate=\"fadeInUp\">

                        <h4>Leave comment</h4>

                        <form>
                            <div class=\"row\">

                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Name <span class=\"required\">*</span>
                                        </label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\">
                                    </div>
                                </div>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"email\">Email <span class=\"required\">*</span>
                                        </label>
                                        <input type=\"text\" class=\"form-control\" id=\"email\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"form-group\">
                                        <label for=\"comment\">Comment <span class=\"required\">*</span>
                                        </label>
                                        <textarea class=\"form-control\" id=\"comment\" rows=\"4\"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-12 text-right\">
                                    <button class=\"btn btn-primary\"><i class=\"fa fa-comment-o\"></i> Post comment</button>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>

                <!-- /#comment-form -->


                <!-- /.box -->


                <!-- /#blog-post -->




                <!-- /.product -->


                </p>
            </div>

        </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->


<!-- *** FOOTER ***
";
        
        $__internal_170a747ca177815cd7bf626aa775150fd816ad83e66d0351e9727ed8b85b1066->leave($__internal_170a747ca177815cd7bf626aa775150fd816ad83e66d0351e9727ed8b85b1066_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Front:Produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 238,  292 => 216,  288 => 215,  277 => 207,  269 => 202,  263 => 199,  242 => 181,  81 => 23,  64 => 8,  58 => 7,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layoutUser.html.twig\" %}
{% block login %}
    <li><a href=\"{{ path('userdash') }}\"> Welcome {{ name }}</a>
    <li><a href=\"contact.html\">Contact</a>
<li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
    {% endblock %}
{% block content %}
<!-- *** NAVBAR END *** -->

<div id=\"all\">

    <div id=\"content\">
        <div class=\"container\">

            <div class=\"col-md-12\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a>
                    </li>
                    <li><a href=\"#\">Ladies</a>
                    </li>
                    <li><a href=\"#\">Tops</a>
                    </li>
                    <li>{{ prod.nomp }}</li>
                </ul>

            </div>

            <div class=\"col-md-3\">
                <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Categories</h3>
                    </div>

                    <div class=\"panel-body\">
                        <ul class=\"nav nav-pills nav-stacked category-menu\">
                            <li>
                                <a href=\"category.html\">Men <span class=\"badge pull-right\">42</span></a>
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
                            </li>
                            <li class=\"active\">
                                <a href=\"category.html\">Ladies  <span class=\"badge pull-right\">123</span></a>
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
                            </li>
                            <li>
                                <a href=\"category.html\">Kids  <span class=\"badge pull-right\">11</span></a>
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
                            </li>

                        </ul>

                    </div>
                </div>

                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Brands <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                    </div>

                    <div class=\"panel-body\">

                        <form>
                            <div class=\"form-group\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Armani (10)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Versace (12)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Carlo Bruni (15)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Jack Honey (14)
                                    </label>
                                </div>
                            </div>

                            <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                        </form>

                    </div>
                </div>

                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Colours <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                    </div>

                    <div class=\"panel-body\">

                        <form>
                            <div class=\"form-group\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour white\"></span> White (14)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour blue\"></span> Blue (10)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour green\"></span> Green (20)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour yellow\"></span> Yellow (13)
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> <span class=\"colour red\"></span> Red (10)
                                    </label>
                                </div>
                            </div>

                            <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                        </form>

                    </div>
                </div>

                <!-- *** MENUS AND FILTERS END *** -->

                <div class=\"banner\">
                    <a href=\"#\">
                        <img src=\"img/banner.jpg\" alt=\"sales 2014\" class=\"img-responsive\">
                    </a>
                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"row\" id=\"productMain\">
                    <div class=\"col-sm-6\">
                        <div id=\"mainImage\">
                            <img src=\"{{ asset('img/detailbig1.jpg')}}\" alt=\"\" class=\"img-responsive\">
                        </div>

                        <div class=\"ribbon sale\">
                            <div class=\"theribbon\">SALE</div>
                            <div class=\"ribbon-background\"></div>
                        </div>
                        <!-- /.ribbon -->

                        <div class=\"ribbon new\">
                            <div class=\"theribbon\">NEW</div>
                            <div class=\"ribbon-background\"></div>
                        </div>
                        <!-- /.ribbon -->

                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"box\">
                            <h1 class=\"text-center\">{{ prod.nomp }}</h1>
                            <p class=\"goToDescription\"><a href=\"#details\" class=\"scroll-to\">Scroll to product details, material & care and sizing</a>
                            </p>
                            <p class=\"price\">{{ prod.ancienprix }}DT</p>

                            <p class=\"text-center buttons\">
                                <a href=\"basket.html\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i> Ajouter a la carte</a>
                                <a href=\"basket.html\" class=\"btn btn-default\"><i class=\"fa fa-heart\"></i>Ajouter a la liste de voeux</a>
                                <a href=\"{{path('reclamer',{id:prod.id})}}\" class=\"btn btn-default\"><i class=\"fa fa-pencil fa-fw\"></i> Reclamer</a>
                            </p>


                        </div>

                        <div class=\"row\" id=\"thumbs\">
                            <div class=\"col-xs-4\">
                                <a href=\"{{ asset('img/detailbig1.jpg')}}\" class=\"thumb\">
                                    <img src=\"{{ asset('img/detailsquare.jpg')}}\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"img/detailbig2.jpg\" class=\"thumb\">
                                    <img src=\"img/detailsquare2.jpg\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"img/detailbig3.jpg\" class=\"thumb\">
                                    <img src=\"img/detailsquare3.jpg\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


                <div class=\"box\" id=\"details\">
                    <p>
                    <h4>Product details</h4>
                    <p>{{ prod.description }}</p>

                    <hr>
                    <div id=\"comments\" data-animate=\"fadeInUp\">
                        <h4>2 comments</h4>


                        <div class=\"row comment\">
                            <div class=\"col-sm-3 col-md-2 text-center-xs\">
                                <p>
                                    <img src=\"img/blog-avatar2.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                                </p>
                            </div>
                            <div class=\"col-sm-9 col-md-10\">
                                <h5>Julie Alma</h5>
                                <p class=\"posted\"><i class=\"fa fa-clock-o\"></i> September 23, 2011 at 12:00 am</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class=\"reply\"><a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                </p>
                            </div>
                        </div>
                        <!-- /.comment -->


                        <div class=\"row comment last\">

                            <div class=\"col-sm-3 col-md-2 text-center-xs\">
                                <p>
                                    <img src=\"img/blog-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                                </p>
                            </div>

                            <div class=\"col-sm-9 col-md-10\">
                                <h5>Louise Armero</h5>
                                <p class=\"posted\"><i class=\"fa fa-clock-o\"></i> September 23, 2012 at 12:00 am</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class=\"reply\"><a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                </p>
                            </div>

                        </div>
                        <!-- /.comment -->

                    </div>
                    <!-- /#comments -->

                    <div id=\"comment-form\" data-animate=\"fadeInUp\">

                        <h4>Leave comment</h4>

                        <form>
                            <div class=\"row\">

                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Name <span class=\"required\">*</span>
                                        </label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\">
                                    </div>
                                </div>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"email\">Email <span class=\"required\">*</span>
                                        </label>
                                        <input type=\"text\" class=\"form-control\" id=\"email\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"form-group\">
                                        <label for=\"comment\">Comment <span class=\"required\">*</span>
                                        </label>
                                        <textarea class=\"form-control\" id=\"comment\" rows=\"4\"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-12 text-right\">
                                    <button class=\"btn btn-primary\"><i class=\"fa fa-comment-o\"></i> Post comment</button>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>

                <!-- /#comment-form -->


                <!-- /.box -->


                <!-- /#blog-post -->




                <!-- /.product -->


                </p>
            </div>

        </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->


<!-- *** FOOTER ***
{% endblock %}", "ReclamationBundle:Front:Produit.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle/Resources/views/Front/Produit.html.twig");
    }
}
