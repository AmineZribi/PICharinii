<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ff4738b4fc299ecaf28edf6dec64f16e64316428dcf420e17ff4268823190deb extends Twig_Template
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
        $__internal_5cfed329e3725585e0feabe98ed5855c225e0d98d2dbfb1c50d2ab9f44ecb6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfed329e3725585e0feabe98ed5855c225e0d98d2dbfb1c50d2ab9f44ecb6ae->enter($__internal_5cfed329e3725585e0feabe98ed5855c225e0d98d2dbfb1c50d2ab9f44ecb6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5cfed329e3725585e0feabe98ed5855c225e0d98d2dbfb1c50d2ab9f44ecb6ae->leave($__internal_5cfed329e3725585e0feabe98ed5855c225e0d98d2dbfb1c50d2ab9f44ecb6ae_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_656141db14166b7f0f0beefefda160e85b53890a356262bddee63c9a3bb1b0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656141db14166b7f0f0beefefda160e85b53890a356262bddee63c9a3bb1b0f7->enter($__internal_656141db14166b7f0f0beefefda160e85b53890a356262bddee63c9a3bb1b0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_656141db14166b7f0f0beefefda160e85b53890a356262bddee63c9a3bb1b0f7->leave($__internal_656141db14166b7f0f0beefefda160e85b53890a356262bddee63c9a3bb1b0f7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2983b7fa744fd37992aeda28803bbd2a7172d9df8c389e6cfac65f0c1162f879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2983b7fa744fd37992aeda28803bbd2a7172d9df8c389e6cfac65f0c1162f879->enter($__internal_2983b7fa744fd37992aeda28803bbd2a7172d9df8c389e6cfac65f0c1162f879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2983b7fa744fd37992aeda28803bbd2a7172d9df8c389e6cfac65f0c1162f879->leave($__internal_2983b7fa744fd37992aeda28803bbd2a7172d9df8c389e6cfac65f0c1162f879_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8422ab8e4b374b2fe5dcb85b5f10411703d99c8fb3994329371475de712b8527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8422ab8e4b374b2fe5dcb85b5f10411703d99c8fb3994329371475de712b8527->enter($__internal_8422ab8e4b374b2fe5dcb85b5f10411703d99c8fb3994329371475de712b8527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8422ab8e4b374b2fe5dcb85b5f10411703d99c8fb3994329371475de712b8527->leave($__internal_8422ab8e4b374b2fe5dcb85b5f10411703d99c8fb3994329371475de712b8527_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
