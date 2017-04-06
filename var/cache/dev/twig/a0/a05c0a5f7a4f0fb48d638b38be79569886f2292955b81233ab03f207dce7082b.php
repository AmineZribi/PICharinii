<?php

/* ReclamationBundle:Front:userDash.html.twig */
class __TwigTemplate_caa22bba07511c9d1ba0d54828f189b9d42c0d8d0b4c31e1a568d739e26187ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "ReclamationBundle:Front:userDash.html.twig", 1);
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
        $__internal_b331ba401446600c50140c23065af8f31b2d725bde767bba99d17a14c91761ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b331ba401446600c50140c23065af8f31b2d725bde767bba99d17a14c91761ff->enter($__internal_b331ba401446600c50140c23065af8f31b2d725bde767bba99d17a14c91761ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Front:userDash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b331ba401446600c50140c23065af8f31b2d725bde767bba99d17a14c91761ff->leave($__internal_b331ba401446600c50140c23065af8f31b2d725bde767bba99d17a14c91761ff_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_6d43519e537c85a095cc275feb742483a4c96275036dc01c77192355ff62db2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d43519e537c85a095cc275feb742483a4c96275036dc01c77192355ff62db2b->enter($__internal_6d43519e537c85a095cc275feb742483a4c96275036dc01c77192355ff62db2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "<li><a href=\"";
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
        
        $__internal_6d43519e537c85a095cc275feb742483a4c96275036dc01c77192355ff62db2b->leave($__internal_6d43519e537c85a095cc275feb742483a4c96275036dc01c77192355ff62db2b_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fb2ba6b783d7ff42b72220d292093b4f67a355203d42f4c8781dd7747325ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb2ba6b783d7ff42b72220d292093b4f67a355203d42f4c8781dd7747325ac8->enter($__internal_1fb2ba6b783d7ff42b72220d292093b4f67a355203d42f4c8781dd7747325ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "<div id=\"all\">

    <div id=\"content\">
        <div class=\"container\">

            <div class=\"col-md-12\">

                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a>
                    </li>
                    <li>My account</li>
                </ul>

            </div>

            <div class=\"col-md-3\">
                <!-- *** CUSTOMER MENU ***
_________________________________________________________ -->
                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Customer section</h3>
                    </div>

                    <div class=\"panel-body\">

                        <ul class=\"nav nav-pills nav-stacked\">
                            <li class=\"active\">
                                <a href=\"customer-orders.html\"><i class=\"fa fa-list\"></i> Mes reclamations</a>
                            </li>
                            <li>
                                <a href=\"customer-wishlist.html\"><i class=\"fa fa-heart\"></i> Ma liste de voeux</a>
                            </li>
                            <li>
                                <a href=\"index.html\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /.col-md-3 -->

                <!-- *** CUSTOMER MENU END *** -->
            </div>

            <div class=\"col-md-9\">
                <div class=\"box\">
                 <h3 >Votre liste de reclamations</h3>
                    <table  class=\"display table table-bordered table-striped\" >
                        <thead>
                        <tr>
                            <th>Sujet </th>
                            <th>Description </th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Nom du produit</th>



                        </tr>
                        </thead>
                        <tbody>
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 72
            echo "                    <tr>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getSujetreclamation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getDescriptionreclamation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "getDatereclamation", array()), "Y-m-d "), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getStatusreclamation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "produit", array()), "nomp", array()), "html", null, true);
            echo "

                    </tr>




                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                        </tbody>>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container -->
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

                    <h4>User section</h4>

                    <ul>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>
                        </li>
                        <li><a href=\"register.html\">Regiter</a>
                        </li>
                    </ul>

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
</div>
    ";
        
        $__internal_1fb2ba6b783d7ff42b72220d292093b4f67a355203d42f4c8781dd7747325ac8->leave($__internal_1fb2ba6b783d7ff42b72220d292093b4f67a355203d42f4c8781dd7747325ac8_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Front:userDash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 85,  151 => 77,  147 => 76,  143 => 75,  139 => 74,  135 => 73,  132 => 72,  128 => 71,  64 => 9,  58 => 8,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
<div id=\"all\">

    <div id=\"content\">
        <div class=\"container\">

            <div class=\"col-md-12\">

                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a>
                    </li>
                    <li>My account</li>
                </ul>

            </div>

            <div class=\"col-md-3\">
                <!-- *** CUSTOMER MENU ***
_________________________________________________________ -->
                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Customer section</h3>
                    </div>

                    <div class=\"panel-body\">

                        <ul class=\"nav nav-pills nav-stacked\">
                            <li class=\"active\">
                                <a href=\"customer-orders.html\"><i class=\"fa fa-list\"></i> Mes reclamations</a>
                            </li>
                            <li>
                                <a href=\"customer-wishlist.html\"><i class=\"fa fa-heart\"></i> Ma liste de voeux</a>
                            </li>
                            <li>
                                <a href=\"index.html\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /.col-md-3 -->

                <!-- *** CUSTOMER MENU END *** -->
            </div>

            <div class=\"col-md-9\">
                <div class=\"box\">
                 <h3 >Votre liste de reclamations</h3>
                    <table  class=\"display table table-bordered table-striped\" >
                        <thead>
                        <tr>
                            <th>Sujet </th>
                            <th>Description </th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Nom du produit</th>



                        </tr>
                        </thead>
                        <tbody>
                    {% for r in reclamations %}
                    <tr>
                        <td>{{ r.getSujetreclamation }}</td>
                        <td>{{ r.getDescriptionreclamation }}</td>
                        <td>{{ r.getDatereclamation|date('Y-m-d ') }}</td>
                        <td>{{ r.getStatusreclamation }}</td>
                        <td>{{ r.produit.nomp }}

                    </tr>




                        {% endfor %}
                        </tbody>>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container -->
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

                    <h4>User section</h4>

                    <ul>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>
                        </li>
                        <li><a href=\"register.html\">Regiter</a>
                        </li>
                    </ul>

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
</div>
    {% endblock %}", "ReclamationBundle:Front:userDash.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle/Resources/views/Front/userDash.html.twig");
    }
}
