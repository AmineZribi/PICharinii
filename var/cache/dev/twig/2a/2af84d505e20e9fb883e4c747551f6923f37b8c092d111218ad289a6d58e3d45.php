<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8013b187e7a49949aa24d25b57f82dbf6736c4d0afe406f5b012001d79496f extends Twig_Template
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
        $__internal_7d1301b25d3d32ab24a60f8f40d2c4b7374dadff6f45a1632414a159d54a1ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1301b25d3d32ab24a60f8f40d2c4b7374dadff6f45a1632414a159d54a1ad2->enter($__internal_7d1301b25d3d32ab24a60f8f40d2c4b7374dadff6f45a1632414a159d54a1ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1301b25d3d32ab24a60f8f40d2c4b7374dadff6f45a1632414a159d54a1ad2->leave($__internal_7d1301b25d3d32ab24a60f8f40d2c4b7374dadff6f45a1632414a159d54a1ad2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e71051665f5bb585d3fca50b5991aa379090bda99290767be855778704c15727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71051665f5bb585d3fca50b5991aa379090bda99290767be855778704c15727->enter($__internal_e71051665f5bb585d3fca50b5991aa379090bda99290767be855778704c15727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e71051665f5bb585d3fca50b5991aa379090bda99290767be855778704c15727->leave($__internal_e71051665f5bb585d3fca50b5991aa379090bda99290767be855778704c15727_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d510fc59db4823c596e949e9e586df98101692372ab5d5102cf3f9437eb3ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d510fc59db4823c596e949e9e586df98101692372ab5d5102cf3f9437eb3ef4->enter($__internal_0d510fc59db4823c596e949e9e586df98101692372ab5d5102cf3f9437eb3ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d510fc59db4823c596e949e9e586df98101692372ab5d5102cf3f9437eb3ef4->leave($__internal_0d510fc59db4823c596e949e9e586df98101692372ab5d5102cf3f9437eb3ef4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dd015598a7e833ce8edb9d6b5decfe36fc8db59a9e6a10bd3efee9c470307f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd015598a7e833ce8edb9d6b5decfe36fc8db59a9e6a10bd3efee9c470307f7->enter($__internal_8dd015598a7e833ce8edb9d6b5decfe36fc8db59a9e6a10bd3efee9c470307f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8dd015598a7e833ce8edb9d6b5decfe36fc8db59a9e6a10bd3efee9c470307f7->leave($__internal_8dd015598a7e833ce8edb9d6b5decfe36fc8db59a9e6a10bd3efee9c470307f7_prof);

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
