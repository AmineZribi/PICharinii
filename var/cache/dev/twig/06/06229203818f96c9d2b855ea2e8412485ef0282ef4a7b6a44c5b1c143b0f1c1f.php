<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f85685e2135c7e3dd8e6089eed17ebc3c8b21c771417182594d9852d2a0691c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c986ab3c2e6c307cae22f39b3b834579fd5ce6d143e47d413d31244a96a1f8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c986ab3c2e6c307cae22f39b3b834579fd5ce6d143e47d413d31244a96a1f8db->enter($__internal_c986ab3c2e6c307cae22f39b3b834579fd5ce6d143e47d413d31244a96a1f8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c986ab3c2e6c307cae22f39b3b834579fd5ce6d143e47d413d31244a96a1f8db->leave($__internal_c986ab3c2e6c307cae22f39b3b834579fd5ce6d143e47d413d31244a96a1f8db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5be7bcda75fb941966e1682de08c14876e08f1e79dd82fdc3a3450327df56d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5be7bcda75fb941966e1682de08c14876e08f1e79dd82fdc3a3450327df56d0->enter($__internal_e5be7bcda75fb941966e1682de08c14876e08f1e79dd82fdc3a3450327df56d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e5be7bcda75fb941966e1682de08c14876e08f1e79dd82fdc3a3450327df56d0->leave($__internal_e5be7bcda75fb941966e1682de08c14876e08f1e79dd82fdc3a3450327df56d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
