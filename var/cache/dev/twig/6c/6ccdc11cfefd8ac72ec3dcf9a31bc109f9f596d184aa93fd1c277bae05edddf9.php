<?php

/* @User/Default/indexGuest.html.twig */
class __TwigTemplate_b4cc704494d45e094deca5185448e7977aaa6d5523ffef49d0fb506ff7a83885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "@User/Default/indexGuest.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'content' => array($this, 'block_content'),
            'usersection' => array($this, 'block_usersection'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c7b3f222a7837acf905d10c56b52e2ebe28a1de023f00a0d604fca07c68c5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7b3f222a7837acf905d10c56b52e2ebe28a1de023f00a0d604fca07c68c5e8->enter($__internal_3c7b3f222a7837acf905d10c56b52e2ebe28a1de023f00a0d604fca07c68c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/indexGuest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c7b3f222a7837acf905d10c56b52e2ebe28a1de023f00a0d604fca07c68c5e8->leave($__internal_3c7b3f222a7837acf905d10c56b52e2ebe28a1de023f00a0d604fca07c68c5e8_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_9bbec36a07d34ca7396246d8ef6a2215718de568128d485712c001512c9e02cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbec36a07d34ca7396246d8ef6a2215718de568128d485712c001512c9e02cb->enter($__internal_9bbec36a07d34ca7396246d8ef6a2215718de568128d485712c001512c9e02cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 4
        echo "<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a>
<li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a>

<li><a href=\"contact.html\">Contact</a>
    ";
        
        $__internal_9bbec36a07d34ca7396246d8ef6a2215718de568128d485712c001512c9e02cb->leave($__internal_9bbec36a07d34ca7396246d8ef6a2215718de568128d485712c001512c9e02cb_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f52755f76f7a276bb642070efe41c8e36989a1cdcd820d4ce165f39795f8cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f52755f76f7a276bb642070efe41c8e36989a1cdcd820d4ce165f39795f8cac->enter($__internal_5f52755f76f7a276bb642070efe41c8e36989a1cdcd820d4ce165f39795f8cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        Hello World !
    ";
        
        $__internal_5f52755f76f7a276bb642070efe41c8e36989a1cdcd820d4ce165f39795f8cac->leave($__internal_5f52755f76f7a276bb642070efe41c8e36989a1cdcd820d4ce165f39795f8cac_prof);

    }

    // line 16
    public function block_usersection($context, array $blocks = array())
    {
        $__internal_8c5e2aa6d0b1de65db73d5373cd70fa29091117cf6608e1ecd618a3b4a65cf84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5e2aa6d0b1de65db73d5373cd70fa29091117cf6608e1ecd618a3b4a65cf84->enter($__internal_8c5e2aa6d0b1de65db73d5373cd70fa29091117cf6608e1ecd618a3b4a65cf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersection"));

        // line 17
        echo "        <!-- <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></li>
         <li><a href=\"register.html\">Regiter</a></li>-->
        <h4>User section</h4>

        <ul>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a>
        </ul>
    ";
        
        $__internal_8c5e2aa6d0b1de65db73d5373cd70fa29091117cf6608e1ecd618a3b4a65cf84->leave($__internal_8c5e2aa6d0b1de65db73d5373cd70fa29091117cf6608e1ecd618a3b4a65cf84_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/indexGuest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 22,  83 => 17,  77 => 16,  68 => 11,  62 => 10,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome {{ name }}</a>
<li><a href=\"{{ path('fos_user_security_login') }}\">Login</a>
<li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a>

<li><a href=\"contact.html\">Contact</a>
    {% endblock %}
    {% block content %}

        Hello World !
    {% endblock %}


    {% block usersection %}
        <!-- <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></li>
         <li><a href=\"register.html\">Regiter</a></li>-->
        <h4>User section</h4>

        <ul>
            <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a>
            <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a>
        </ul>
    {% endblock %}

", "@User/Default/indexGuest.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Default\\indexGuest.html.twig");
    }
}
