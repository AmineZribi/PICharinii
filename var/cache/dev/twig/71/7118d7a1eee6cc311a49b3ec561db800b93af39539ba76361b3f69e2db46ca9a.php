<?php

/* UserBundle:Default:indexGuest.html.twig */
class __TwigTemplate_86b2951a4c6c80298b1215bf8952e51fce872d88da2886e9a3c1aeefe98b071a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "UserBundle:Default:indexGuest.html.twig", 1);
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
        $__internal_d36d4f2effa4724d8b3a036c9b413ac549eaa239c9186460e490a32296896279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36d4f2effa4724d8b3a036c9b413ac549eaa239c9186460e490a32296896279->enter($__internal_d36d4f2effa4724d8b3a036c9b413ac549eaa239c9186460e490a32296896279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:indexGuest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d36d4f2effa4724d8b3a036c9b413ac549eaa239c9186460e490a32296896279->leave($__internal_d36d4f2effa4724d8b3a036c9b413ac549eaa239c9186460e490a32296896279_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_2f72482a89145b69f6ff488c8dde8723a4ea8e5a3770687a227f7e378edf9585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f72482a89145b69f6ff488c8dde8723a4ea8e5a3770687a227f7e378edf9585->enter($__internal_2f72482a89145b69f6ff488c8dde8723a4ea8e5a3770687a227f7e378edf9585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_2f72482a89145b69f6ff488c8dde8723a4ea8e5a3770687a227f7e378edf9585->leave($__internal_2f72482a89145b69f6ff488c8dde8723a4ea8e5a3770687a227f7e378edf9585_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_6393c7c3afb32dcb8d1ea1ac8c3c65f08699769bc44a8f9d59021c72fda7d7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6393c7c3afb32dcb8d1ea1ac8c3c65f08699769bc44a8f9d59021c72fda7d7b8->enter($__internal_6393c7c3afb32dcb8d1ea1ac8c3c65f08699769bc44a8f9d59021c72fda7d7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        Hello World !
    ";
        
        $__internal_6393c7c3afb32dcb8d1ea1ac8c3c65f08699769bc44a8f9d59021c72fda7d7b8->leave($__internal_6393c7c3afb32dcb8d1ea1ac8c3c65f08699769bc44a8f9d59021c72fda7d7b8_prof);

    }

    // line 16
    public function block_usersection($context, array $blocks = array())
    {
        $__internal_7f255b1f1213441d1a2137d61688d24bb6cd9b16f64a55addee22f76d69c38b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f255b1f1213441d1a2137d61688d24bb6cd9b16f64a55addee22f76d69c38b6->enter($__internal_7f255b1f1213441d1a2137d61688d24bb6cd9b16f64a55addee22f76d69c38b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersection"));

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
        
        $__internal_7f255b1f1213441d1a2137d61688d24bb6cd9b16f64a55addee22f76d69c38b6->leave($__internal_7f255b1f1213441d1a2137d61688d24bb6cd9b16f64a55addee22f76d69c38b6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:indexGuest.html.twig";
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

", "UserBundle:Default:indexGuest.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Default/indexGuest.html.twig");
    }
}
