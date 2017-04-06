<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7ce68eace163fee2646c865d80479edcc7b92733a8815f75af527fec7de43869 extends Twig_Template
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
        $__internal_b99a661320674603cbad006fb00342d78e80299fbc1e770f5acbd1a5ce4fe4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99a661320674603cbad006fb00342d78e80299fbc1e770f5acbd1a5ce4fe4c8->enter($__internal_b99a661320674603cbad006fb00342d78e80299fbc1e770f5acbd1a5ce4fe4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b99a661320674603cbad006fb00342d78e80299fbc1e770f5acbd1a5ce4fe4c8->leave($__internal_b99a661320674603cbad006fb00342d78e80299fbc1e770f5acbd1a5ce4fe4c8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e689a88aee3ac8d49695b6f439ec4507dbeb77e577a1ea941092e8b1ab47e0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e689a88aee3ac8d49695b6f439ec4507dbeb77e577a1ea941092e8b1ab47e0f6->enter($__internal_e689a88aee3ac8d49695b6f439ec4507dbeb77e577a1ea941092e8b1ab47e0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_e689a88aee3ac8d49695b6f439ec4507dbeb77e577a1ea941092e8b1ab47e0f6->leave($__internal_e689a88aee3ac8d49695b6f439ec4507dbeb77e577a1ea941092e8b1ab47e0f6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b3e067bfbd0a541cbbf5178f0123316e2a3c2a59f7b3fe3fbda6038c72ed8599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e067bfbd0a541cbbf5178f0123316e2a3c2a59f7b3fe3fbda6038c72ed8599->enter($__internal_b3e067bfbd0a541cbbf5178f0123316e2a3c2a59f7b3fe3fbda6038c72ed8599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b3e067bfbd0a541cbbf5178f0123316e2a3c2a59f7b3fe3fbda6038c72ed8599->leave($__internal_b3e067bfbd0a541cbbf5178f0123316e2a3c2a59f7b3fe3fbda6038c72ed8599_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c5d70a0eadaff6dea7240067ef610a775e5dffc7a3c0667a426e958d1c7bcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5d70a0eadaff6dea7240067ef610a775e5dffc7a3c0667a426e958d1c7bcae->enter($__internal_4c5d70a0eadaff6dea7240067ef610a775e5dffc7a3c0667a426e958d1c7bcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c5d70a0eadaff6dea7240067ef610a775e5dffc7a3c0667a426e958d1c7bcae->leave($__internal_4c5d70a0eadaff6dea7240067ef610a775e5dffc7a3c0667a426e958d1c7bcae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
