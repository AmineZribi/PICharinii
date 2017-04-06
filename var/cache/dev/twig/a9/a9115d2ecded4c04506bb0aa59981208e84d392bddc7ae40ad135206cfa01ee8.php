<?php

/* @Reclamation/Default/DisplayReclamation.html.twig */
class __TwigTemplate_3ae22b5f2e902c4d749417b6d9573b8397b6790b40a60122db03913562183acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "@Reclamation/Default/DisplayReclamation.html.twig", 2);
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
        $__internal_9befb9103950425e26664e1beca58a1f48a92c2f44665b2709f8f5be51c7c1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9befb9103950425e26664e1beca58a1f48a92c2f44665b2709f8f5be51c7c1ee->enter($__internal_9befb9103950425e26664e1beca58a1f48a92c2f44665b2709f8f5be51c7c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Reclamation/Default/DisplayReclamation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9befb9103950425e26664e1beca58a1f48a92c2f44665b2709f8f5be51c7c1ee->leave($__internal_9befb9103950425e26664e1beca58a1f48a92c2f44665b2709f8f5be51c7c1ee_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_060048dbb19a4007704528ba5ca51240d47ffb43b51184dd169847e0477807ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060048dbb19a4007704528ba5ca51240d47ffb43b51184dd169847e0477807ed->enter($__internal_060048dbb19a4007704528ba5ca51240d47ffb43b51184dd169847e0477807ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

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
        
        $__internal_060048dbb19a4007704528ba5ca51240d47ffb43b51184dd169847e0477807ed->leave($__internal_060048dbb19a4007704528ba5ca51240d47ffb43b51184dd169847e0477807ed_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_146e69aa26b78b8037359ebf338865c92c7ef132c11f6c86ca37eee8697fcd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146e69aa26b78b8037359ebf338865c92c7ef132c11f6c86ca37eee8697fcd90->enter($__internal_146e69aa26b78b8037359ebf338865c92c7ef132c11f6c86ca37eee8697fcd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
<!-- page heading start-->
<div class=\"page-heading\">
    <h3>
        Dynamic Table
    </h3>
    <ul class=\"breadcrumb\">
        <li>
            <a href=\"#\">Dashboard</a>
        </li>
        <li>
            <a href=\"#\">Data Tables</a>
        </li>
        <li class=\"active\"> Dynamic Table </li>
    </ul>
</div>
        <!-- page heading end-->

        <!--table start-->
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <section class=\"panel\">
                        <header class=\"panel-heading\">
                            Dynamic Table
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
                                        <th>Id client</th>
                                        <th>Nom du produit</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 65
            echo "                                    <tr>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getSujetreclamation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getDescriptionreclamation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "getDatereclamation", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getStatusreclamation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getIdclient", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getNomproduit", array()), "html", null, true);
            echo "
                                        <td><button class=\"btn btn-primary btn-xs\"><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_update", array("idreclamation" => $this->getAttribute($context["r"], "idreclamation", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></button></td>
                                        <td><button class=\"btn btn-danger btn-xs\"  ><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete", array("idreclamation" => $this->getAttribute($context["r"], "idreclamation", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-trash\"></span></a></button></td>
                                    <tr>




                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        // line 129
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
        
        $__internal_146e69aa26b78b8037359ebf338865c92c7ef132c11f6c86ca37eee8697fcd90->leave($__internal_146e69aa26b78b8037359ebf338865c92c7ef132c11f6c86ca37eee8697fcd90_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Default/DisplayReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 129,  171 => 80,  158 => 73,  154 => 72,  150 => 71,  146 => 70,  142 => 69,  138 => 68,  134 => 67,  130 => 66,  127 => 65,  123 => 64,  73 => 16,  67 => 15,  57 => 12,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 2,);
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
        Dynamic Table
    </h3>
    <ul class=\"breadcrumb\">
        <li>
            <a href=\"#\">Dashboard</a>
        </li>
        <li>
            <a href=\"#\">Data Tables</a>
        </li>
        <li class=\"active\"> Dynamic Table </li>
    </ul>
</div>
        <!-- page heading end-->

        <!--table start-->
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <section class=\"panel\">
                        <header class=\"panel-heading\">
                            Dynamic Table
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
                                        <th>Id client</th>
                                        <th>Nom du produit</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    {% for r in reclamations %}
                                    <tr>
                                        <td>{{ r.getSujetreclamation }}</td>
                                        <td>{{ r.getDescriptionreclamation }}</td>
                                        <td>{{ r.getDatereclamation|date('Y-m-d') }}</td>
                                        <td>{{ r.getStatusreclamation }}</td>
                                        <td>{{ r.getIdclient }}</td>
                                        <td>{{ r.getNomproduit }}
                                        <td><button class=\"btn btn-primary btn-xs\"><a href=\"{{path('reclamation_update',{idreclamation:r.idreclamation})}}\"><span class=\"glyphicon glyphicon-pencil\"></span></a></button></td>
                                        <td><button class=\"btn btn-danger btn-xs\"  ><a href=\"{{path('reclamation_delete',{idreclamation:r.idreclamation})}}\" ><span class=\"glyphicon glyphicon-trash\"></span></a></button></td>
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
", "@Reclamation/Default/DisplayReclamation.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle\\Resources\\views\\Default\\DisplayReclamation.html.twig");
    }
}
