<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_cef752c0dbf3196328afe29bd1c80ea9fe0e7e1801ce3636a40f49c516995895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9a1b60c4003233bc2b10aa3d1ed6661f3ded41058a29be5fda6aa685033dc979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1b60c4003233bc2b10aa3d1ed6661f3ded41058a29be5fda6aa685033dc979->enter($__internal_9a1b60c4003233bc2b10aa3d1ed6661f3ded41058a29be5fda6aa685033dc979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1b60c4003233bc2b10aa3d1ed6661f3ded41058a29be5fda6aa685033dc979->leave($__internal_9a1b60c4003233bc2b10aa3d1ed6661f3ded41058a29be5fda6aa685033dc979_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1735e87f7f278722e57f720bb5669c6f01f625b64410dd4d7af7426ea6a25572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1735e87f7f278722e57f720bb5669c6f01f625b64410dd4d7af7426ea6a25572->enter($__internal_1735e87f7f278722e57f720bb5669c6f01f625b64410dd4d7af7426ea6a25572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1735e87f7f278722e57f720bb5669c6f01f625b64410dd4d7af7426ea6a25572->leave($__internal_1735e87f7f278722e57f720bb5669c6f01f625b64410dd4d7af7426ea6a25572_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
