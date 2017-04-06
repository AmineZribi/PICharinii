<?php

/* UserBundle:Default:indexAdmin.html.twig */
class __TwigTemplate_9002af3680540d14472c31ec349fbf86ebd82a09794dce649966b5a4e08802d1 extends Twig_Template
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
        $__internal_19aef0f922a74a1fcea740e364d86073ce630855bc01215d2f539fa73a4dbf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19aef0f922a74a1fcea740e364d86073ce630855bc01215d2f539fa73a4dbf64->enter($__internal_19aef0f922a74a1fcea740e364d86073ce630855bc01215d2f539fa73a4dbf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19aef0f922a74a1fcea740e364d86073ce630855bc01215d2f539fa73a4dbf64->leave($__internal_19aef0f922a74a1fcea740e364d86073ce630855bc01215d2f539fa73a4dbf64_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_7466080ed798c11f05a31fa74d326bf64d76c5afbc87b72b5451fe0b5a9b083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7466080ed798c11f05a31fa74d326bf64d76c5afbc87b72b5451fe0b5a9b083d->enter($__internal_7466080ed798c11f05a31fa74d326bf64d76c5afbc87b72b5451fe0b5a9b083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

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
        
        $__internal_7466080ed798c11f05a31fa74d326bf64d76c5afbc87b72b5451fe0b5a9b083d->leave($__internal_7466080ed798c11f05a31fa74d326bf64d76c5afbc87b72b5451fe0b5a9b083d_prof);

    }

    // line 17
    public function block_userinfo($context, array $blocks = array())
    {
        $__internal_5f010ad7917d2ae99b82c130ca9ceb19e5bcee72a8d26479fe205d6cc26acbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f010ad7917d2ae99b82c130ca9ceb19e5bcee72a8d26479fe205d6cc26acbd0->enter($__internal_5f010ad7917d2ae99b82c130ca9ceb19e5bcee72a8d26479fe205d6cc26acbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userinfo"));

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
        
        $__internal_5f010ad7917d2ae99b82c130ca9ceb19e5bcee72a8d26479fe205d6cc26acbd0->leave($__internal_5f010ad7917d2ae99b82c130ca9ceb19e5bcee72a8d26479fe205d6cc26acbd0_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7f3751798d98693f8044d5b5d8c57f6485aa55312acf6895305217669d6bab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f3751798d98693f8044d5b5d8c57f6485aa55312acf6895305217669d6bab3->enter($__internal_b7f3751798d98693f8044d5b5d8c57f6485aa55312acf6895305217669d6bab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "

";
        
        $__internal_b7f3751798d98693f8044d5b5d8c57f6485aa55312acf6895305217669d6bab3->leave($__internal_b7f3751798d98693f8044d5b5d8c57f6485aa55312acf6895305217669d6bab3_prof);

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


{% endblock %}", "UserBundle:Default:indexAdmin.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Default/indexAdmin.html.twig");
    }
}
