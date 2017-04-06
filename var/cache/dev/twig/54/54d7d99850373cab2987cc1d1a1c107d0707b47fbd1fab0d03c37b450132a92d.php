<?php

/* ReclamationBundle:Default:DisplayReclamation.html.twig */
class __TwigTemplate_0d5c033da6ab48c07075e1fbfac2ea3799511403592b0e5fbfe5686ff87c2718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "ReclamationBundle:Default:DisplayReclamation.html.twig", 2);
        $this->blocks = array(
            'adminName' => array($this, 'block_adminName'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a57718e66f402f75bc8fcde0a0ca1c3bfcbcfed7c21d61d475fdc7ed439efc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a57718e66f402f75bc8fcde0a0ca1c3bfcbcfed7c21d61d475fdc7ed439efc3->enter($__internal_6a57718e66f402f75bc8fcde0a0ca1c3bfcbcfed7c21d61d475fdc7ed439efc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:DisplayReclamation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a57718e66f402f75bc8fcde0a0ca1c3bfcbcfed7c21d61d475fdc7ed439efc3->leave($__internal_6a57718e66f402f75bc8fcde0a0ca1c3bfcbcfed7c21d61d475fdc7ed439efc3_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_b26a86db8ed308c03dfc9a66fd88a2eeb731a9161db8aecbdfe425d46531a0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26a86db8ed308c03dfc9a66fd88a2eeb731a9161db8aecbdfe425d46531a0f3->enter($__internal_b26a86db8ed308c03dfc9a66fd88a2eeb731a9161db8aecbdfe425d46531a0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

        // line 4
        echo "    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/admin1.png"), "html", null, true);
        echo "\" alt=\"\" />
        ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-usermenu pull-right\">
        <li><a href=\"#\"><i class=\"fa fa-user\"></i>  Profile</a></li>
        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Settings</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>
    </ul>
";
        
        $__internal_b26a86db8ed308c03dfc9a66fd88a2eeb731a9161db8aecbdfe425d46531a0f3->leave($__internal_b26a86db8ed308c03dfc9a66fd88a2eeb731a9161db8aecbdfe425d46531a0f3_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2583558c66f07dd0e6d189d71339ebfc9b946bf08f6d54bd08e40caf77ef6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2583558c66f07dd0e6d189d71339ebfc9b946bf08f6d54bd08e40caf77ef6f2->enter($__internal_b2583558c66f07dd0e6d189d71339ebfc9b946bf08f6d54bd08e40caf77ef6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
<!-- page heading start-->
<div class=\"page-heading\">
    <h3>
        Gestion des reclamations
    </h3>
    <ul class=\"breadcrumb\">
        <li>
            <a href=\"#\">Gestion des reclamations</a>
        </li>
        <li class=\"active\"> Table des reclamations </li>
    </ul>
</div>
        <!-- page heading end-->

        <!--table start-->
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <section class=\"panel\">
                        <header class=\"panel-heading\">
                            Table des reclamations
                            <span class=\"tools pull-right\">
                <a href=\"javascript:;\" class=\"fa fa-chevron-down\"></a>
                <a href=\"javascript:;\" class=\"fa fa-times\"></a>
             </span>
                        </header>
                        <div class=\"panel-body\">
                            <div class=\"adv-table\">
                                <table  class=\"display table table-bordered table-striped\" >
                                    <thead>
                                    <tr>
                                        <th>Sujet </th>
                                        <th>Description </th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Nom client</th>
                                        <th>Nom du produit</th>
                                        <th>Actions</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 62
            echo "                                    <tr>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getSujetreclamation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getDescriptionreclamation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "getDatereclamation", array()), "Y-m-d "), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getStatusreclamation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getIdclient", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "produit", array()), "nomp", array()), "html", null, true);
            echo "
                                        <td><button class=\"btn btn-primary btn-xs\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_update", array("idreclamation" => $this->getAttribute($context["r"], "idreclamation", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></button>
                                        <button class=\"btn btn-danger btn-xs\"  ><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete", array("idreclamation" => $this->getAttribute($context["r"], "idreclamation", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-trash\"></span></a></button></td>
                                    <tr>




                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    </tbody>

                                       <tfoot>
                                       <tr>

                                       </tr>
                                       </tfoot>
                                </table>

                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>



    <!-- table end-->



    <!--<script type=\"text/javascript\">

    \$(\"button#bt\").click(
        function () {

            alert(\$(this).data(\"id\"));

        }
    );

    function validation(e){
        var id = \$(e).data(\"id\");

        swal({
                title: \"Etes vous sur?\",
                text: \"Il  ne sera pas possible de revenir en arriére!\",
                type: \"warning\",
                showCancelButton: true,
                confirmButtonColor: \"#DD6B55\",
                confirmButtonText: \"Oui,supprimer!\",
                closeOnConfirm: false
            },
            function(e){

                var id = \$(e).data(\"id\")

                var path = \"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete", array("idreclamation" => 14));
        echo "\";
                \$.ajax({
                    type: 'POST',
                    url: path,
                    success: swal(\"Supprimé!\", \"La reclamation a été supprimé avec succes.\", \"success\")
                });

            });
    }

</script>
-->



";
        
        $__internal_b2583558c66f07dd0e6d189d71339ebfc9b946bf08f6d54bd08e40caf77ef6f2->leave($__internal_b2583558c66f07dd0e6d189d71339ebfc9b946bf08f6d54bd08e40caf77ef6f2_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Default:DisplayReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 126,  168 => 77,  155 => 70,  151 => 69,  147 => 68,  143 => 67,  139 => 66,  135 => 65,  131 => 64,  127 => 63,  124 => 62,  120 => 61,  73 => 16,  67 => 15,  57 => 12,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layoutAdmin.html.twig\" %}
{% block adminName %}
    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        <img src=\"{{ asset('images/admin1.png') }}\" alt=\"\" />
        {{ name }}
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-usermenu pull-right\">
        <li><a href=\"#\"><i class=\"fa fa-user\"></i>  Profile</a></li>
        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Settings</a></li>
        <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>
    </ul>
{% endblock %}
{% block content %}

<!-- page heading start-->
<div class=\"page-heading\">
    <h3>
        Gestion des reclamations
    </h3>
    <ul class=\"breadcrumb\">
        <li>
            <a href=\"#\">Gestion des reclamations</a>
        </li>
        <li class=\"active\"> Table des reclamations </li>
    </ul>
</div>
        <!-- page heading end-->

        <!--table start-->
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <section class=\"panel\">
                        <header class=\"panel-heading\">
                            Table des reclamations
                            <span class=\"tools pull-right\">
                <a href=\"javascript:;\" class=\"fa fa-chevron-down\"></a>
                <a href=\"javascript:;\" class=\"fa fa-times\"></a>
             </span>
                        </header>
                        <div class=\"panel-body\">
                            <div class=\"adv-table\">
                                <table  class=\"display table table-bordered table-striped\" >
                                    <thead>
                                    <tr>
                                        <th>Sujet </th>
                                        <th>Description </th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Nom client</th>
                                        <th>Nom du produit</th>
                                        <th>Actions</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    {% for r in reclamations %}
                                    <tr>
                                        <td>{{ r.getSujetreclamation }}</td>
                                        <td>{{ r.getDescriptionreclamation }}</td>
                                        <td>{{ r.getDatereclamation|date('Y-m-d ') }}</td>
                                        <td>{{ r.getStatusreclamation }}</td>
                                        <td>{{ r.getIdclient }}</td>
                                        <td>{{ r.produit.nomp }}
                                        <td><button class=\"btn btn-primary btn-xs\"><a href=\"{{path('reclamation_update',{idreclamation:r.idreclamation})}}\"><span class=\"glyphicon glyphicon-pencil\"></span></a></button>
                                        <button class=\"btn btn-danger btn-xs\"  ><a href=\"{{path('reclamation_delete',{idreclamation:r.idreclamation})}}\" ><span class=\"glyphicon glyphicon-trash\"></span></a></button></td>
                                    <tr>




                                        {% endfor %}
                                    </tbody>

                                       <tfoot>
                                       <tr>

                                       </tr>
                                       </tfoot>
                                </table>

                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>



    <!-- table end-->



    <!--<script type=\"text/javascript\">

    \$(\"button#bt\").click(
        function () {

            alert(\$(this).data(\"id\"));

        }
    );

    function validation(e){
        var id = \$(e).data(\"id\");

        swal({
                title: \"Etes vous sur?\",
                text: \"Il  ne sera pas possible de revenir en arriére!\",
                type: \"warning\",
                showCancelButton: true,
                confirmButtonColor: \"#DD6B55\",
                confirmButtonText: \"Oui,supprimer!\",
                closeOnConfirm: false
            },
            function(e){

                var id = \$(e).data(\"id\")

                var path = \"{{path('reclamation_delete',{idreclamation:14})}}\";
                \$.ajax({
                    type: 'POST',
                    url: path,
                    success: swal(\"Supprimé!\", \"La reclamation a été supprimé avec succes.\", \"success\")
                });

            });
    }

</script>
-->



{% endblock %}
", "ReclamationBundle:Default:DisplayReclamation.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle\\Resources\\views\\Default\\DisplayReclamation.html.twig");
    }
}
