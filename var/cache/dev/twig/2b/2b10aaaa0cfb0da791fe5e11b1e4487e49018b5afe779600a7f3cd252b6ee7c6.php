<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9b36fbe3eb284ce857cb36cc4690156fb9a6d424cf2bf2b7017ea3f0a4b2b798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_dc64c6f7fa304c0f42298b284af8d03c3e5b4d1215e7829a15c9c3c6db332c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc64c6f7fa304c0f42298b284af8d03c3e5b4d1215e7829a15c9c3c6db332c2a->enter($__internal_dc64c6f7fa304c0f42298b284af8d03c3e5b4d1215e7829a15c9c3c6db332c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc64c6f7fa304c0f42298b284af8d03c3e5b4d1215e7829a15c9c3c6db332c2a->leave($__internal_dc64c6f7fa304c0f42298b284af8d03c3e5b4d1215e7829a15c9c3c6db332c2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f14d72284a9fd2eb16d221fca0d0cadf3026e1bb86f73c2ee8ea69f3f9b2f804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14d72284a9fd2eb16d221fca0d0cadf3026e1bb86f73c2ee8ea69f3f9b2f804->enter($__internal_f14d72284a9fd2eb16d221fca0d0cadf3026e1bb86f73c2ee8ea69f3f9b2f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f14d72284a9fd2eb16d221fca0d0cadf3026e1bb86f73c2ee8ea69f3f9b2f804->leave($__internal_f14d72284a9fd2eb16d221fca0d0cadf3026e1bb86f73c2ee8ea69f3f9b2f804_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
