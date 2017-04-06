<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f945decd22c4ec8b30350921c3d9b9d7aa3562a3e45b5e0841083d901c613d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e50e3def76b574ceaf67191a8c46e891b516df084c5b6d18f1e1d7fdc0166943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50e3def76b574ceaf67191a8c46e891b516df084c5b6d18f1e1d7fdc0166943->enter($__internal_e50e3def76b574ceaf67191a8c46e891b516df084c5b6d18f1e1d7fdc0166943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50e3def76b574ceaf67191a8c46e891b516df084c5b6d18f1e1d7fdc0166943->leave($__internal_e50e3def76b574ceaf67191a8c46e891b516df084c5b6d18f1e1d7fdc0166943_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d49ba95577f36aa8d3e25b9635adee1b422f7c0cd571dbb7d6aaa8036c0ba5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49ba95577f36aa8d3e25b9635adee1b422f7c0cd571dbb7d6aaa8036c0ba5d8->enter($__internal_d49ba95577f36aa8d3e25b9635adee1b422f7c0cd571dbb7d6aaa8036c0ba5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d49ba95577f36aa8d3e25b9635adee1b422f7c0cd571dbb7d6aaa8036c0ba5d8->leave($__internal_d49ba95577f36aa8d3e25b9635adee1b422f7c0cd571dbb7d6aaa8036c0ba5d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3a4d7786a7b3d3c9fb5753ef2589a6aa5b9916f4b26f091972015b512a71692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a4d7786a7b3d3c9fb5753ef2589a6aa5b9916f4b26f091972015b512a71692->enter($__internal_a3a4d7786a7b3d3c9fb5753ef2589a6aa5b9916f4b26f091972015b512a71692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a3a4d7786a7b3d3c9fb5753ef2589a6aa5b9916f4b26f091972015b512a71692->leave($__internal_a3a4d7786a7b3d3c9fb5753ef2589a6aa5b9916f4b26f091972015b512a71692_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
