<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_f4e5be650e612dd4e658b5cf013a3b061081210fab67fe1b279e062eecd881ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_dd4c7b327f34956f1cdb9eee644b5c95dc5261da2c785f73f579b1e11c1d6802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4c7b327f34956f1cdb9eee644b5c95dc5261da2c785f73f579b1e11c1d6802->enter($__internal_dd4c7b327f34956f1cdb9eee644b5c95dc5261da2c785f73f579b1e11c1d6802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd4c7b327f34956f1cdb9eee644b5c95dc5261da2c785f73f579b1e11c1d6802->leave($__internal_dd4c7b327f34956f1cdb9eee644b5c95dc5261da2c785f73f579b1e11c1d6802_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa12ce1d5a1e1d5ce18cea80e5d3b8028083552c17fe3e16dfd12b2f984c55ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa12ce1d5a1e1d5ce18cea80e5d3b8028083552c17fe3e16dfd12b2f984c55ba->enter($__internal_fa12ce1d5a1e1d5ce18cea80e5d3b8028083552c17fe3e16dfd12b2f984c55ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_fa12ce1d5a1e1d5ce18cea80e5d3b8028083552c17fe3e16dfd12b2f984c55ba->leave($__internal_fa12ce1d5a1e1d5ce18cea80e5d3b8028083552c17fe3e16dfd12b2f984c55ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
