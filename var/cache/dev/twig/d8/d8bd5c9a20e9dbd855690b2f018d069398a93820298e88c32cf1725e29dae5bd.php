<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_67d54042180954fad4747cff99465b4b3fc3bd18582816fe682740c0582424b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_7f40978e0060f65bc084b6567a6dc166d1a180fbd916b16a48e271963cd96e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f40978e0060f65bc084b6567a6dc166d1a180fbd916b16a48e271963cd96e5a->enter($__internal_7f40978e0060f65bc084b6567a6dc166d1a180fbd916b16a48e271963cd96e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f40978e0060f65bc084b6567a6dc166d1a180fbd916b16a48e271963cd96e5a->leave($__internal_7f40978e0060f65bc084b6567a6dc166d1a180fbd916b16a48e271963cd96e5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7c519b550c2b11eabb11051c197bd7a89c7e6a079c6d7f6a076c3148117be24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c519b550c2b11eabb11051c197bd7a89c7e6a079c6d7f6a076c3148117be24->enter($__internal_f7c519b550c2b11eabb11051c197bd7a89c7e6a079c6d7f6a076c3148117be24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_f7c519b550c2b11eabb11051c197bd7a89c7e6a079c6d7f6a076c3148117be24->leave($__internal_f7c519b550c2b11eabb11051c197bd7a89c7e6a079c6d7f6a076c3148117be24_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
