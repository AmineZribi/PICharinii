<?php

/* @User/Default/indexGuest.html.twig */
class __TwigTemplate_6f9675abe0c0101b73fadfdd9e7709656e56f1c8a5b45f2f7db0e239a12dd879 extends Twig_Template
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
        $__internal_873d58c1fa5b8940c1d299f371cafc47fbe8cbe871faa447a3e46d69f111e2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873d58c1fa5b8940c1d299f371cafc47fbe8cbe871faa447a3e46d69f111e2c9->enter($__internal_873d58c1fa5b8940c1d299f371cafc47fbe8cbe871faa447a3e46d69f111e2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/indexGuest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_873d58c1fa5b8940c1d299f371cafc47fbe8cbe871faa447a3e46d69f111e2c9->leave($__internal_873d58c1fa5b8940c1d299f371cafc47fbe8cbe871faa447a3e46d69f111e2c9_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_c143cc5ba0afc0cbfd6b71346873a958e003c6a6c477d887df6076757acac252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c143cc5ba0afc0cbfd6b71346873a958e003c6a6c477d887df6076757acac252->enter($__internal_c143cc5ba0afc0cbfd6b71346873a958e003c6a6c477d887df6076757acac252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_c143cc5ba0afc0cbfd6b71346873a958e003c6a6c477d887df6076757acac252->leave($__internal_c143cc5ba0afc0cbfd6b71346873a958e003c6a6c477d887df6076757acac252_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed32f8d77b04a5e50acf23b9c7df6036fa3cdb1e0c9ceaf9f90a63ca53f6e886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed32f8d77b04a5e50acf23b9c7df6036fa3cdb1e0c9ceaf9f90a63ca53f6e886->enter($__internal_ed32f8d77b04a5e50acf23b9c7df6036fa3cdb1e0c9ceaf9f90a63ca53f6e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        Hello World !
    ";
        
        $__internal_ed32f8d77b04a5e50acf23b9c7df6036fa3cdb1e0c9ceaf9f90a63ca53f6e886->leave($__internal_ed32f8d77b04a5e50acf23b9c7df6036fa3cdb1e0c9ceaf9f90a63ca53f6e886_prof);

    }

    // line 16
    public function block_usersection($context, array $blocks = array())
    {
        $__internal_b421758d5cb83dcbcb9713bedaf847ca80a5384ccb41bf453f1634a7171b91c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b421758d5cb83dcbcb9713bedaf847ca80a5384ccb41bf453f1634a7171b91c7->enter($__internal_b421758d5cb83dcbcb9713bedaf847ca80a5384ccb41bf453f1634a7171b91c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersection"));

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
        
        $__internal_b421758d5cb83dcbcb9713bedaf847ca80a5384ccb41bf453f1634a7171b91c7->leave($__internal_b421758d5cb83dcbcb9713bedaf847ca80a5384ccb41bf453f1634a7171b91c7_prof);

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
