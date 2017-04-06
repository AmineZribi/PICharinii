<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ddffd67795e6d628fccc51ad2a76b7f37892e754ff50be31f139d86d7bd6603b extends Twig_Template
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
        $__internal_f53b77e5dde8086cbd6e81cbe8e599695bda97fd6937a9f722dd29c6b2092298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53b77e5dde8086cbd6e81cbe8e599695bda97fd6937a9f722dd29c6b2092298->enter($__internal_f53b77e5dde8086cbd6e81cbe8e599695bda97fd6937a9f722dd29c6b2092298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f53b77e5dde8086cbd6e81cbe8e599695bda97fd6937a9f722dd29c6b2092298->leave($__internal_f53b77e5dde8086cbd6e81cbe8e599695bda97fd6937a9f722dd29c6b2092298_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_324ca197d15e0e3ae9b506e7a38279430dd4892a7197f4413eb9baac4c9da6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324ca197d15e0e3ae9b506e7a38279430dd4892a7197f4413eb9baac4c9da6e9->enter($__internal_324ca197d15e0e3ae9b506e7a38279430dd4892a7197f4413eb9baac4c9da6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_324ca197d15e0e3ae9b506e7a38279430dd4892a7197f4413eb9baac4c9da6e9->leave($__internal_324ca197d15e0e3ae9b506e7a38279430dd4892a7197f4413eb9baac4c9da6e9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d667c3c3c7b52e8b00ecee56775abe8f5b5afabb9d7c90cb370b4f602997f4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d667c3c3c7b52e8b00ecee56775abe8f5b5afabb9d7c90cb370b4f602997f4ac->enter($__internal_d667c3c3c7b52e8b00ecee56775abe8f5b5afabb9d7c90cb370b4f602997f4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d667c3c3c7b52e8b00ecee56775abe8f5b5afabb9d7c90cb370b4f602997f4ac->leave($__internal_d667c3c3c7b52e8b00ecee56775abe8f5b5afabb9d7c90cb370b4f602997f4ac_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84887db3cbdbe0af9293d419df5ee62cff7d7de28cafc910f40ed1c9de35ce9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84887db3cbdbe0af9293d419df5ee62cff7d7de28cafc910f40ed1c9de35ce9d->enter($__internal_84887db3cbdbe0af9293d419df5ee62cff7d7de28cafc910f40ed1c9de35ce9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_84887db3cbdbe0af9293d419df5ee62cff7d7de28cafc910f40ed1c9de35ce9d->leave($__internal_84887db3cbdbe0af9293d419df5ee62cff7d7de28cafc910f40ed1c9de35ce9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
