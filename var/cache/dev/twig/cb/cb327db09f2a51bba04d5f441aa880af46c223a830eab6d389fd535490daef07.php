<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_b01c0dd20fa066c7513ba5042fb15c8df0c46b7ea26a9bb68376ce12d4d4f936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_b6bf1693a66f39679a7f35006d8deb3660377e77e649e22f922e7a4f28b8cefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bf1693a66f39679a7f35006d8deb3660377e77e649e22f922e7a4f28b8cefc->enter($__internal_b6bf1693a66f39679a7f35006d8deb3660377e77e649e22f922e7a4f28b8cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6bf1693a66f39679a7f35006d8deb3660377e77e649e22f922e7a4f28b8cefc->leave($__internal_b6bf1693a66f39679a7f35006d8deb3660377e77e649e22f922e7a4f28b8cefc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66cd88b1bdd284e30e958da1dd163ede14e5542cb5567ffc4d9dcea45ac890bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cd88b1bdd284e30e958da1dd163ede14e5542cb5567ffc4d9dcea45ac890bd->enter($__internal_66cd88b1bdd284e30e958da1dd163ede14e5542cb5567ffc4d9dcea45ac890bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_66cd88b1bdd284e30e958da1dd163ede14e5542cb5567ffc4d9dcea45ac890bd->leave($__internal_66cd88b1bdd284e30e958da1dd163ede14e5542cb5567ffc4d9dcea45ac890bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
