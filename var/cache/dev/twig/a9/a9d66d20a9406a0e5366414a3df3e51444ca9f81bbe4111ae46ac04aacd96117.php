<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_8f2af8282d17a0c7b23a3ff4aa182ad8d0c932400bb34db5db0ba39e97f63043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e183ac7bb5a7260f2cbdc2b4979274d9aeb003ca42050f132961146cdb7b1b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e183ac7bb5a7260f2cbdc2b4979274d9aeb003ca42050f132961146cdb7b1b6f->enter($__internal_e183ac7bb5a7260f2cbdc2b4979274d9aeb003ca42050f132961146cdb7b1b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e183ac7bb5a7260f2cbdc2b4979274d9aeb003ca42050f132961146cdb7b1b6f->leave($__internal_e183ac7bb5a7260f2cbdc2b4979274d9aeb003ca42050f132961146cdb7b1b6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbb01fbbd6c48eb90b80a0b3970b1bbff04372d5a60dd5028ae8ee1587102fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb01fbbd6c48eb90b80a0b3970b1bbff04372d5a60dd5028ae8ee1587102fb2->enter($__internal_dbb01fbbd6c48eb90b80a0b3970b1bbff04372d5a60dd5028ae8ee1587102fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_dbb01fbbd6c48eb90b80a0b3970b1bbff04372d5a60dd5028ae8ee1587102fb2->leave($__internal_dbb01fbbd6c48eb90b80a0b3970b1bbff04372d5a60dd5028ae8ee1587102fb2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
