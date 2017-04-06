<?php

/* UserBundle:Default:indexAdmin.html.twig */
class __TwigTemplate_8a940bb20386be0c5f8d84c75b0b65494a5096b1acbae8510710383f1a6b0504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "UserBundle:Default:indexAdmin.html.twig", 1);
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
        $__internal_e120683ede17dd984f5afad125657f8fcc8b7dc0dcdb20560d77019645355379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e120683ede17dd984f5afad125657f8fcc8b7dc0dcdb20560d77019645355379->enter($__internal_e120683ede17dd984f5afad125657f8fcc8b7dc0dcdb20560d77019645355379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e120683ede17dd984f5afad125657f8fcc8b7dc0dcdb20560d77019645355379->leave($__internal_e120683ede17dd984f5afad125657f8fcc8b7dc0dcdb20560d77019645355379_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_f6c2f1630ec02466e697fa3b051b0c914340abc69248045108a165ab75ca4b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c2f1630ec02466e697fa3b051b0c914340abc69248045108a165ab75ca4b14->enter($__internal_f6c2f1630ec02466e697fa3b051b0c914340abc69248045108a165ab75ca4b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

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
        
        $__internal_f6c2f1630ec02466e697fa3b051b0c914340abc69248045108a165ab75ca4b14->leave($__internal_f6c2f1630ec02466e697fa3b051b0c914340abc69248045108a165ab75ca4b14_prof);

    }

    // line 17
    public function block_userinfo($context, array $blocks = array())
    {
        $__internal_c818540b055d9c50112848c004cae6bfc58b98b5476c9b9a60e84ca6d23e6705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c818540b055d9c50112848c004cae6bfc58b98b5476c9b9a60e84ca6d23e6705->enter($__internal_c818540b055d9c50112848c004cae6bfc58b98b5476c9b9a60e84ca6d23e6705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userinfo"));

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
        
        $__internal_c818540b055d9c50112848c004cae6bfc58b98b5476c9b9a60e84ca6d23e6705->leave($__internal_c818540b055d9c50112848c004cae6bfc58b98b5476c9b9a60e84ca6d23e6705_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_23f9dff8d845ae6ee92931c9cb799e6c18397e05980c200e1d37209ec2b1ea64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f9dff8d845ae6ee92931c9cb799e6c18397e05980c200e1d37209ec2b1ea64->enter($__internal_23f9dff8d845ae6ee92931c9cb799e6c18397e05980c200e1d37209ec2b1ea64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "

";
        
        $__internal_23f9dff8d845ae6ee92931c9cb799e6c18397e05980c200e1d37209ec2b1ea64->leave($__internal_23f9dff8d845ae6ee92931c9cb799e6c18397e05980c200e1d37209ec2b1ea64_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:indexAdmin.html.twig";
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


{% endblock %}", "UserBundle:Default:indexAdmin.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Default\\indexAdmin.html.twig");
    }
}
