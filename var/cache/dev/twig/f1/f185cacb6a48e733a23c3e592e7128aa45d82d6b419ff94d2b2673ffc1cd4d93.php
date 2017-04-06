<?php

/* reclamation/new.html.twig */
class __TwigTemplate_9c1825616ec41c872df9c9f8c90a810ed8a01764c666bcba660525cf00661103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5cb39e09f800ebd7dc3694e45f4789effd33148f0611a2227b2cb9beb713b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cb39e09f800ebd7dc3694e45f4789effd33148f0611a2227b2cb9beb713b1b->enter($__internal_b5cb39e09f800ebd7dc3694e45f4789effd33148f0611a2227b2cb9beb713b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5cb39e09f800ebd7dc3694e45f4789effd33148f0611a2227b2cb9beb713b1b->leave($__internal_b5cb39e09f800ebd7dc3694e45f4789effd33148f0611a2227b2cb9beb713b1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5feb80d8b4bcf997fbb855f798da751c45939b27d153f0bbf1893c2d8ec35f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5feb80d8b4bcf997fbb855f798da751c45939b27d153f0bbf1893c2d8ec35f2->enter($__internal_d5feb80d8b4bcf997fbb855f798da751c45939b27d153f0bbf1893c2d8ec35f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reclamation creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>

    </ul>
";
        
        $__internal_d5feb80d8b4bcf997fbb855f798da751c45939b27d153f0bbf1893c2d8ec35f2->leave($__internal_d5feb80d8b4bcf997fbb855f798da751c45939b27d153f0bbf1893c2d8ec35f2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reclamation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>

    </ul>
{% endblock %}
", "reclamation/new.html.twig", "C:\\wamp64\\www\\PICharini\\app\\Resources\\views\\reclamation\\new.html.twig");
    }
}
