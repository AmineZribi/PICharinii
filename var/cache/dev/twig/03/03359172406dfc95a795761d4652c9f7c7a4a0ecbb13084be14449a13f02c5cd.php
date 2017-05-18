<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_361605c13baacb4aa51aa222342c4a2dfbea354b01d6c7604e592dfaff6fb84b extends Twig_Template
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
        $__internal_099b14a40c2e3674a6c4453c7a0cbe4526cc06bd18905bab8d1421108772be0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099b14a40c2e3674a6c4453c7a0cbe4526cc06bd18905bab8d1421108772be0b->enter($__internal_099b14a40c2e3674a6c4453c7a0cbe4526cc06bd18905bab8d1421108772be0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099b14a40c2e3674a6c4453c7a0cbe4526cc06bd18905bab8d1421108772be0b->leave($__internal_099b14a40c2e3674a6c4453c7a0cbe4526cc06bd18905bab8d1421108772be0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_438f2f4e3a1744818577e3db8bbd05b907ec5be9b2a83a73d90da545a19c3059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438f2f4e3a1744818577e3db8bbd05b907ec5be9b2a83a73d90da545a19c3059->enter($__internal_438f2f4e3a1744818577e3db8bbd05b907ec5be9b2a83a73d90da545a19c3059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_438f2f4e3a1744818577e3db8bbd05b907ec5be9b2a83a73d90da545a19c3059->leave($__internal_438f2f4e3a1744818577e3db8bbd05b907ec5be9b2a83a73d90da545a19c3059_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3951260e4554558446526d0744f541dcfcaa7989c2e4dc4dac9bac6307c161ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3951260e4554558446526d0744f541dcfcaa7989c2e4dc4dac9bac6307c161ff->enter($__internal_3951260e4554558446526d0744f541dcfcaa7989c2e4dc4dac9bac6307c161ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3951260e4554558446526d0744f541dcfcaa7989c2e4dc4dac9bac6307c161ff->leave($__internal_3951260e4554558446526d0744f541dcfcaa7989c2e4dc4dac9bac6307c161ff_prof);

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
