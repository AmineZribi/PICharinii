<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_c135c9f47176142aaa7623bdfc7c17a1c8be186a7157457d560726447acf6458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_e7d13cfa4bfee6e8be639d7fd0d6b320b953c0007463c48dfbb539349845f073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d13cfa4bfee6e8be639d7fd0d6b320b953c0007463c48dfbb539349845f073->enter($__internal_e7d13cfa4bfee6e8be639d7fd0d6b320b953c0007463c48dfbb539349845f073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d13cfa4bfee6e8be639d7fd0d6b320b953c0007463c48dfbb539349845f073->leave($__internal_e7d13cfa4bfee6e8be639d7fd0d6b320b953c0007463c48dfbb539349845f073_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d3ff9c1a1c7ec80c0b333600916f5fca5adb75b3a9c164cd53e77fc09340848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3ff9c1a1c7ec80c0b333600916f5fca5adb75b3a9c164cd53e77fc09340848->enter($__internal_5d3ff9c1a1c7ec80c0b333600916f5fca5adb75b3a9c164cd53e77fc09340848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_5d3ff9c1a1c7ec80c0b333600916f5fca5adb75b3a9c164cd53e77fc09340848->leave($__internal_5d3ff9c1a1c7ec80c0b333600916f5fca5adb75b3a9c164cd53e77fc09340848_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
