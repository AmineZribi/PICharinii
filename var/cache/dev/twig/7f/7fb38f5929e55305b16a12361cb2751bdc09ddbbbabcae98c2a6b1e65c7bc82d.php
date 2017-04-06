<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_33174c8a0f875ef61776fc98d46c06cdc40dfca45c28ccf24661229c4da7a258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf1a8d40c4dc0f9e3d36b299fede0a71ca39c028f67eef09400029c08190e544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1a8d40c4dc0f9e3d36b299fede0a71ca39c028f67eef09400029c08190e544->enter($__internal_bf1a8d40c4dc0f9e3d36b299fede0a71ca39c028f67eef09400029c08190e544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1a8d40c4dc0f9e3d36b299fede0a71ca39c028f67eef09400029c08190e544->leave($__internal_bf1a8d40c4dc0f9e3d36b299fede0a71ca39c028f67eef09400029c08190e544_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_037d63d1d1518e8bd86a8c8de40ff466ee581b95aa1639f23930048b2d85a4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037d63d1d1518e8bd86a8c8de40ff466ee581b95aa1639f23930048b2d85a4ef->enter($__internal_037d63d1d1518e8bd86a8c8de40ff466ee581b95aa1639f23930048b2d85a4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_037d63d1d1518e8bd86a8c8de40ff466ee581b95aa1639f23930048b2d85a4ef->leave($__internal_037d63d1d1518e8bd86a8c8de40ff466ee581b95aa1639f23930048b2d85a4ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
