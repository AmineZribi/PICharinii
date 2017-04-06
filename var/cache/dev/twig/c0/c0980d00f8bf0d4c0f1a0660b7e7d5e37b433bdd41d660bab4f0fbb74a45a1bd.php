<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7140147a16273cd05d47d146e870f2d58d4da7f46c0e77af140ce0e9299c1c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c3261204566f4d6233fb186933da349b8464d2c27c2f39aeaa720ea060a23b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3261204566f4d6233fb186933da349b8464d2c27c2f39aeaa720ea060a23b6e->enter($__internal_c3261204566f4d6233fb186933da349b8464d2c27c2f39aeaa720ea060a23b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3261204566f4d6233fb186933da349b8464d2c27c2f39aeaa720ea060a23b6e->leave($__internal_c3261204566f4d6233fb186933da349b8464d2c27c2f39aeaa720ea060a23b6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f9e102b571428c3a3c1e8638b014079b888a5a4f9feca4a579cca025e0e4514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9e102b571428c3a3c1e8638b014079b888a5a4f9feca4a579cca025e0e4514->enter($__internal_1f9e102b571428c3a3c1e8638b014079b888a5a4f9feca4a579cca025e0e4514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_1f9e102b571428c3a3c1e8638b014079b888a5a4f9feca4a579cca025e0e4514->leave($__internal_1f9e102b571428c3a3c1e8638b014079b888a5a4f9feca4a579cca025e0e4514_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
