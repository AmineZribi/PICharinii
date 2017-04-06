<?php

/* @User/Default/index.html.twig */
class __TwigTemplate_fe5cbd3ec9d19f81d8e71e2047769383328bf9a497f3a50080f22170bd3fb64a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "@User/Default/index.html.twig", 2);
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
        $__internal_12bfd3dd83883fc6a0fdb5ca922d7f71e468405599ddd9c1542ee4792c4005e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bfd3dd83883fc6a0fdb5ca922d7f71e468405599ddd9c1542ee4792c4005e6->enter($__internal_12bfd3dd83883fc6a0fdb5ca922d7f71e468405599ddd9c1542ee4792c4005e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12bfd3dd83883fc6a0fdb5ca922d7f71e468405599ddd9c1542ee4792c4005e6->leave($__internal_12bfd3dd83883fc6a0fdb5ca922d7f71e468405599ddd9c1542ee4792c4005e6_prof);

    }

    // line 4
    public function block_login($context, array $blocks = array())
    {
        $__internal_8a837d529a7fa90c58295a19f68e372349da00cd2f5a007004b9b1788149a85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a837d529a7fa90c58295a19f68e372349da00cd2f5a007004b9b1788149a85c->enter($__internal_8a837d529a7fa90c58295a19f68e372349da00cd2f5a007004b9b1788149a85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 5
        echo "    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
    ";
        
        $__internal_8a837d529a7fa90c58295a19f68e372349da00cd2f5a007004b9b1788149a85c->leave($__internal_8a837d529a7fa90c58295a19f68e372349da00cd2f5a007004b9b1788149a85c_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_fee8681cb9b66d87118357f988a735ca90f81a62d68137b7af71e5e5ccdc3dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee8681cb9b66d87118357f988a735ca90f81a62d68137b7af71e5e5ccdc3dad->enter($__internal_fee8681cb9b66d87118357f988a735ca90f81a62d68137b7af71e5e5ccdc3dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
Hello World !
";
        
        $__internal_fee8681cb9b66d87118357f988a735ca90f81a62d68137b7af71e5e5ccdc3dad->leave($__internal_fee8681cb9b66d87118357f988a735ca90f81a62d68137b7af71e5e5ccdc3dad_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 9,  47 => 7,  41 => 5,  35 => 4,  11 => 2,);
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
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome {{ name }}</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
    {% endblock %}
{% block content %}

Hello World !
{% endblock %}

", "@User/Default/index.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
