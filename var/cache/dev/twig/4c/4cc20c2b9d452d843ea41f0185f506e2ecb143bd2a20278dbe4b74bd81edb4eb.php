<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_851647c2009b32be761deb6eb7284667be30fe07ea809130bfe9fe1d15c6f06a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1dec6b1807de06e33461e94460e2e6fbab0d1716965157da279ecc7cc6ca749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dec6b1807de06e33461e94460e2e6fbab0d1716965157da279ecc7cc6ca749->enter($__internal_c1dec6b1807de06e33461e94460e2e6fbab0d1716965157da279ecc7cc6ca749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c1dec6b1807de06e33461e94460e2e6fbab0d1716965157da279ecc7cc6ca749->leave($__internal_c1dec6b1807de06e33461e94460e2e6fbab0d1716965157da279ecc7cc6ca749_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cc05f5b810d4ee04a418ff1f9794467fda1f68490fe4a9361d9f816d74625521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc05f5b810d4ee04a418ff1f9794467fda1f68490fe4a9361d9f816d74625521->enter($__internal_cc05f5b810d4ee04a418ff1f9794467fda1f68490fe4a9361d9f816d74625521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_cc05f5b810d4ee04a418ff1f9794467fda1f68490fe4a9361d9f816d74625521->leave($__internal_cc05f5b810d4ee04a418ff1f9794467fda1f68490fe4a9361d9f816d74625521_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4f37bf61b9bbeca200b7ad1e4bc16ba9de6b46f171d921436f9de8508d0bd698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f37bf61b9bbeca200b7ad1e4bc16ba9de6b46f171d921436f9de8508d0bd698->enter($__internal_4f37bf61b9bbeca200b7ad1e4bc16ba9de6b46f171d921436f9de8508d0bd698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f37bf61b9bbeca200b7ad1e4bc16ba9de6b46f171d921436f9de8508d0bd698->leave($__internal_4f37bf61b9bbeca200b7ad1e4bc16ba9de6b46f171d921436f9de8508d0bd698_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_90d9b69995f0a2a95675a342e95842588c8f6cf68fc8e05f86e4ff48fa681b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d9b69995f0a2a95675a342e95842588c8f6cf68fc8e05f86e4ff48fa681b46->enter($__internal_90d9b69995f0a2a95675a342e95842588c8f6cf68fc8e05f86e4ff48fa681b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_90d9b69995f0a2a95675a342e95842588c8f6cf68fc8e05f86e4ff48fa681b46->leave($__internal_90d9b69995f0a2a95675a342e95842588c8f6cf68fc8e05f86e4ff48fa681b46_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
