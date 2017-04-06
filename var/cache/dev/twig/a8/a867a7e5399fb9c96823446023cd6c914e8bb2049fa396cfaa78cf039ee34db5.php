<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_8f4b9b11620f8f38c16b02165fcc52b26a2e365ee39a912bd8937efa553fe397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_c46b792baaf6252595239cf9f1303a0945a0dbda9339544ccc6de6112a443cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46b792baaf6252595239cf9f1303a0945a0dbda9339544ccc6de6112a443cd1->enter($__internal_c46b792baaf6252595239cf9f1303a0945a0dbda9339544ccc6de6112a443cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c46b792baaf6252595239cf9f1303a0945a0dbda9339544ccc6de6112a443cd1->leave($__internal_c46b792baaf6252595239cf9f1303a0945a0dbda9339544ccc6de6112a443cd1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10b17c3dc029563f3058d089e2c98ace012adab239f94ad6e0c64ec5f3b05e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b17c3dc029563f3058d089e2c98ace012adab239f94ad6e0c64ec5f3b05e6c->enter($__internal_10b17c3dc029563f3058d089e2c98ace012adab239f94ad6e0c64ec5f3b05e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_10b17c3dc029563f3058d089e2c98ace012adab239f94ad6e0c64ec5f3b05e6c->leave($__internal_10b17c3dc029563f3058d089e2c98ace012adab239f94ad6e0c64ec5f3b05e6c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
