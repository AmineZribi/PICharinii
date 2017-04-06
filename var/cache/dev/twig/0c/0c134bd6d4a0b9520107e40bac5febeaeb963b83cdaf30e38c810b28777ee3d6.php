<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a7c38d1128a2d2821c2dc279a1a96b6a7723718cd94498f9e9a5314b3ae40d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d5155cd812c8a6698bfa48679edc63032846d2437b5e7601e44118d8e6a525c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5155cd812c8a6698bfa48679edc63032846d2437b5e7601e44118d8e6a525c1->enter($__internal_d5155cd812c8a6698bfa48679edc63032846d2437b5e7601e44118d8e6a525c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5155cd812c8a6698bfa48679edc63032846d2437b5e7601e44118d8e6a525c1->leave($__internal_d5155cd812c8a6698bfa48679edc63032846d2437b5e7601e44118d8e6a525c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90e2c5e83dd69de9c518a0c18aef3dc8bd597d1c5f90717e1f74608d7b4f1421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e2c5e83dd69de9c518a0c18aef3dc8bd597d1c5f90717e1f74608d7b4f1421->enter($__internal_90e2c5e83dd69de9c518a0c18aef3dc8bd597d1c5f90717e1f74608d7b4f1421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_90e2c5e83dd69de9c518a0c18aef3dc8bd597d1c5f90717e1f74608d7b4f1421->leave($__internal_90e2c5e83dd69de9c518a0c18aef3dc8bd597d1c5f90717e1f74608d7b4f1421_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
