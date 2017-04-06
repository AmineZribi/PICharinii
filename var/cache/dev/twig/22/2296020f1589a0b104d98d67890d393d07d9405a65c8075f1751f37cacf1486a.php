<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e14a5809c7d50cfdb8d0aa1c84c395ad9167f49a9069aa50e6659dfa3ad73c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c8eb525ef57d7e1476f83b6f352609c4434990f5ec6ddf401a71a1bced8ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c8eb525ef57d7e1476f83b6f352609c4434990f5ec6ddf401a71a1bced8ef0->enter($__internal_55c8eb525ef57d7e1476f83b6f352609c4434990f5ec6ddf401a71a1bced8ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55c8eb525ef57d7e1476f83b6f352609c4434990f5ec6ddf401a71a1bced8ef0->leave($__internal_55c8eb525ef57d7e1476f83b6f352609c4434990f5ec6ddf401a71a1bced8ef0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_860126fe81e5cab53005e05b6db81b6c9d69f0e0027b9d022c9ee5dd31a34e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860126fe81e5cab53005e05b6db81b6c9d69f0e0027b9d022c9ee5dd31a34e4a->enter($__internal_860126fe81e5cab53005e05b6db81b6c9d69f0e0027b9d022c9ee5dd31a34e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_860126fe81e5cab53005e05b6db81b6c9d69f0e0027b9d022c9ee5dd31a34e4a->leave($__internal_860126fe81e5cab53005e05b6db81b6c9d69f0e0027b9d022c9ee5dd31a34e4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2813b4247a2f5ebdf54c2ea1b83783da05c47bfcc2d4fbce7999dc93f42c15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2813b4247a2f5ebdf54c2ea1b83783da05c47bfcc2d4fbce7999dc93f42c15d->enter($__internal_c2813b4247a2f5ebdf54c2ea1b83783da05c47bfcc2d4fbce7999dc93f42c15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c2813b4247a2f5ebdf54c2ea1b83783da05c47bfcc2d4fbce7999dc93f42c15d->leave($__internal_c2813b4247a2f5ebdf54c2ea1b83783da05c47bfcc2d4fbce7999dc93f42c15d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5482684b5142e9ce5e56833b3e411a7847592120c114cbcd7304f0ea4fa81ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5482684b5142e9ce5e56833b3e411a7847592120c114cbcd7304f0ea4fa81ba->enter($__internal_c5482684b5142e9ce5e56833b3e411a7847592120c114cbcd7304f0ea4fa81ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c5482684b5142e9ce5e56833b3e411a7847592120c114cbcd7304f0ea4fa81ba->leave($__internal_c5482684b5142e9ce5e56833b3e411a7847592120c114cbcd7304f0ea4fa81ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
