<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_79f89bd5b90a334d5e147b0bb0f258cc9b9da8a864c2bac3c135d5aab2dc44d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "UserBundle:Default:index.html.twig", 2);
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
        $__internal_286e4b609a4077940bb77a7ee20851eb4d90c68665bdda6abf13a8037e49607d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286e4b609a4077940bb77a7ee20851eb4d90c68665bdda6abf13a8037e49607d->enter($__internal_286e4b609a4077940bb77a7ee20851eb4d90c68665bdda6abf13a8037e49607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_286e4b609a4077940bb77a7ee20851eb4d90c68665bdda6abf13a8037e49607d->leave($__internal_286e4b609a4077940bb77a7ee20851eb4d90c68665bdda6abf13a8037e49607d_prof);

    }

    // line 4
    public function block_login($context, array $blocks = array())
    {
        $__internal_5c3f5c57ba2e6df2de9383b5f4843eb5e0ce7507f123f897377b3bf0a8e166f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3f5c57ba2e6df2de9383b5f4843eb5e0ce7507f123f897377b3bf0a8e166f4->enter($__internal_5c3f5c57ba2e6df2de9383b5f4843eb5e0ce7507f123f897377b3bf0a8e166f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 5
        echo "    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userdash");
        echo "\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
    ";
        
        $__internal_5c3f5c57ba2e6df2de9383b5f4843eb5e0ce7507f123f897377b3bf0a8e166f4->leave($__internal_5c3f5c57ba2e6df2de9383b5f4843eb5e0ce7507f123f897377b3bf0a8e166f4_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_f70fab11dd99ba1c0cb700f9bfcb3ee8e64cec57125125fdd1145bc20baa7d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70fab11dd99ba1c0cb700f9bfcb3ee8e64cec57125125fdd1145bc20baa7d04->enter($__internal_f70fab11dd99ba1c0cb700f9bfcb3ee8e64cec57125125fdd1145bc20baa7d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
Hello World !
";
        
        $__internal_f70fab11dd99ba1c0cb700f9bfcb3ee8e64cec57125125fdd1145bc20baa7d04->leave($__internal_f70fab11dd99ba1c0cb700f9bfcb3ee8e64cec57125125fdd1145bc20baa7d04_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 9,  49 => 7,  41 => 5,  35 => 4,  11 => 2,);
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
{% extends \"layoutUser.html.twig\" %}

{% block login %}
    <li><a href=\"{{ path('userdash') }}\"> Welcome {{ name }}</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
    {% endblock %}
{% block content %}

Hello World !
{% endblock %}

", "UserBundle:Default:index.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
