<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_55a2b82d90b516131b6cdb363e9cb0accdf0479cf512d2ee7f0aff8cf8df388c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7be817c156ab88ffced140a105a08f9280b38e846d53b34a3f843a36c55122e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be817c156ab88ffced140a105a08f9280b38e846d53b34a3f843a36c55122e5->enter($__internal_7be817c156ab88ffced140a105a08f9280b38e846d53b34a3f843a36c55122e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be817c156ab88ffced140a105a08f9280b38e846d53b34a3f843a36c55122e5->leave($__internal_7be817c156ab88ffced140a105a08f9280b38e846d53b34a3f843a36c55122e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73b0fee951a69bbb625e9e302e8d0ea03e861f5a2ea41232ee41fc09d11f0787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b0fee951a69bbb625e9e302e8d0ea03e861f5a2ea41232ee41fc09d11f0787->enter($__internal_73b0fee951a69bbb625e9e302e8d0ea03e861f5a2ea41232ee41fc09d11f0787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_73b0fee951a69bbb625e9e302e8d0ea03e861f5a2ea41232ee41fc09d11f0787->leave($__internal_73b0fee951a69bbb625e9e302e8d0ea03e861f5a2ea41232ee41fc09d11f0787_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
