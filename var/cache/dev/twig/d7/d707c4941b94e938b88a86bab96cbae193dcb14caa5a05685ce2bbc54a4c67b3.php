<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_deb217689a1b9e5e67ab98e752761292fa296bc506586ee058fdb6669434e755 extends Twig_Template
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
        $__internal_6f636ef36b43c9ab3f6852c3a0ea616300facbf0cc993f1480b27b8d562a4aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f636ef36b43c9ab3f6852c3a0ea616300facbf0cc993f1480b27b8d562a4aea->enter($__internal_6f636ef36b43c9ab3f6852c3a0ea616300facbf0cc993f1480b27b8d562a4aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f636ef36b43c9ab3f6852c3a0ea616300facbf0cc993f1480b27b8d562a4aea->leave($__internal_6f636ef36b43c9ab3f6852c3a0ea616300facbf0cc993f1480b27b8d562a4aea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb2573956412a4ce81c84ae626d969ec2d46fecb3efd9e971f7e0bb3987544da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2573956412a4ce81c84ae626d969ec2d46fecb3efd9e971f7e0bb3987544da->enter($__internal_fb2573956412a4ce81c84ae626d969ec2d46fecb3efd9e971f7e0bb3987544da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_fb2573956412a4ce81c84ae626d969ec2d46fecb3efd9e971f7e0bb3987544da->leave($__internal_fb2573956412a4ce81c84ae626d969ec2d46fecb3efd9e971f7e0bb3987544da_prof);

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
