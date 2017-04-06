<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8751b9ca973e7272420b44387309f1982cdbd6a31d87558a681d59f0751f05b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9f96602151824e240712b8ece3495fb72cabd0378de6f2d6a3a4a9d13fd79e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f96602151824e240712b8ece3495fb72cabd0378de6f2d6a3a4a9d13fd79e7b->enter($__internal_9f96602151824e240712b8ece3495fb72cabd0378de6f2d6a3a4a9d13fd79e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f96602151824e240712b8ece3495fb72cabd0378de6f2d6a3a4a9d13fd79e7b->leave($__internal_9f96602151824e240712b8ece3495fb72cabd0378de6f2d6a3a4a9d13fd79e7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38e702c3bf396f20ac4108b66314d4a0eaca857d641a17ce19ea82c054a70217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e702c3bf396f20ac4108b66314d4a0eaca857d641a17ce19ea82c054a70217->enter($__internal_38e702c3bf396f20ac4108b66314d4a0eaca857d641a17ce19ea82c054a70217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_38e702c3bf396f20ac4108b66314d4a0eaca857d641a17ce19ea82c054a70217->leave($__internal_38e702c3bf396f20ac4108b66314d4a0eaca857d641a17ce19ea82c054a70217_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
