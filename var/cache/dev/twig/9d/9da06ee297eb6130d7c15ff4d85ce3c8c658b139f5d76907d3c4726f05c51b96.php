<?php

/* @User/Default/indexAdmin.html.twig */
class __TwigTemplate_3d5ac5822cf48fb0de5bb307179fce8c58614ef17eb308fb6fc7f90641df82bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "@User/Default/indexAdmin.html.twig", 1);
        $this->blocks = array(
            'adminName' => array($this, 'block_adminName'),
            'userinfo' => array($this, 'block_userinfo'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e941fa33198d5d095379f53fe5acc866b5f45bf53990a46feb19b5ebde65fecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e941fa33198d5d095379f53fe5acc866b5f45bf53990a46feb19b5ebde65fecf->enter($__internal_e941fa33198d5d095379f53fe5acc866b5f45bf53990a46feb19b5ebde65fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e941fa33198d5d095379f53fe5acc866b5f45bf53990a46feb19b5ebde65fecf->leave($__internal_e941fa33198d5d095379f53fe5acc866b5f45bf53990a46feb19b5ebde65fecf_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_2b31225e78bd073d26473e8164b171066dd059602812065990e8b0547a4ef549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b31225e78bd073d26473e8164b171066dd059602812065990e8b0547a4ef549->enter($__internal_2b31225e78bd073d26473e8164b171066dd059602812065990e8b0547a4ef549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

        // line 4
        echo "
    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/admin1.png"), "html", null, true);
        echo "\" alt=\"\" />
        ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-usermenu pull-right\">
        <li><a href=\"#\"><i class=\"fa fa-user\"></i>  Profile</a></li>
        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Settings</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>
    </ul>

";
        
        $__internal_2b31225e78bd073d26473e8164b171066dd059602812065990e8b0547a4ef549->leave($__internal_2b31225e78bd073d26473e8164b171066dd059602812065990e8b0547a4ef549_prof);

    }

    // line 17
    public function block_userinfo($context, array $blocks = array())
    {
        $__internal_cdb52a6fe2ddbd1c37737f7eeb8568dc7f5568f317a0a43092687830928b13da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb52a6fe2ddbd1c37737f7eeb8568dc7f5568f317a0a43092687830928b13da->enter($__internal_cdb52a6fe2ddbd1c37737f7eeb8568dc7f5568f317a0a43092687830928b13da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userinfo"));

        // line 18
        echo "    <ul class=\"dropdown-menu dropdown-menu-usermenu pull-right\">
        <li><a href=\"#\"><i class=\"fa fa-user\"></i>  Profile</a></li>
        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Settings</a></li>
        <li><a href=\"a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>
    </ul>
";
        
        $__internal_cdb52a6fe2ddbd1c37737f7eeb8568dc7f5568f317a0a43092687830928b13da->leave($__internal_cdb52a6fe2ddbd1c37737f7eeb8568dc7f5568f317a0a43092687830928b13da_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_71d6c2a429ccd4c0fee046cfbde25349a867df50a6e6cdcca7588e0eb4498901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d6c2a429ccd4c0fee046cfbde25349a867df50a6e6cdcca7588e0eb4498901->enter($__internal_71d6c2a429ccd4c0fee046cfbde25349a867df50a6e6cdcca7588e0eb4498901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "

";
        
        $__internal_71d6c2a429ccd4c0fee046cfbde25349a867df50a6e6cdcca7588e0eb4498901->leave($__internal_71d6c2a429ccd4c0fee046cfbde25349a867df50a6e6cdcca7588e0eb4498901_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  91 => 25,  81 => 21,  76 => 18,  70 => 17,  59 => 13,  50 => 7,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layoutAdmin.html.twig\" %}

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
{% block userinfo %}
    <ul class=\"dropdown-menu dropdown-menu-usermenu pull-right\">
        <li><a href=\"#\"><i class=\"fa fa-user\"></i>  Profile</a></li>
        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Settings</a></li>
        <li><a href=\"a href=\"{{ path('fos_user_security_logout') }}\"\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>
    </ul>
{% endblock %}

{% block content %}


{% endblock %}", "@User/Default/indexAdmin.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Default\\indexAdmin.html.twig");
    }
}
