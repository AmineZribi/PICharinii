<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c9ac47cc7622f30d3ae4793c02714093d0f59f780e467c2a95032ab0196771dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_acadc319e021cd48cbbac3cb66d6ea51fcf28e7292146482a82736d2b5119319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acadc319e021cd48cbbac3cb66d6ea51fcf28e7292146482a82736d2b5119319->enter($__internal_acadc319e021cd48cbbac3cb66d6ea51fcf28e7292146482a82736d2b5119319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acadc319e021cd48cbbac3cb66d6ea51fcf28e7292146482a82736d2b5119319->leave($__internal_acadc319e021cd48cbbac3cb66d6ea51fcf28e7292146482a82736d2b5119319_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ad7b5f0e801b49fa725258a10da109922a2e59c8485d4a7480532a59d190b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad7b5f0e801b49fa725258a10da109922a2e59c8485d4a7480532a59d190b3a->enter($__internal_9ad7b5f0e801b49fa725258a10da109922a2e59c8485d4a7480532a59d190b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9ad7b5f0e801b49fa725258a10da109922a2e59c8485d4a7480532a59d190b3a->leave($__internal_9ad7b5f0e801b49fa725258a10da109922a2e59c8485d4a7480532a59d190b3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
