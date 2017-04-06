<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_87f1b25096074702fe8332d629393cd9a28a9083fe25d08b4f7d078e3bfee002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_c8815ef21468d001287f883bfe0140b31fd3c39777267e5a50e3979348bf543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8815ef21468d001287f883bfe0140b31fd3c39777267e5a50e3979348bf543f->enter($__internal_c8815ef21468d001287f883bfe0140b31fd3c39777267e5a50e3979348bf543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8815ef21468d001287f883bfe0140b31fd3c39777267e5a50e3979348bf543f->leave($__internal_c8815ef21468d001287f883bfe0140b31fd3c39777267e5a50e3979348bf543f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c09e98adec41a17e4028dfa770e7b65469ec05a65e94ba94318c35a5218ebf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09e98adec41a17e4028dfa770e7b65469ec05a65e94ba94318c35a5218ebf1a->enter($__internal_c09e98adec41a17e4028dfa770e7b65469ec05a65e94ba94318c35a5218ebf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c09e98adec41a17e4028dfa770e7b65469ec05a65e94ba94318c35a5218ebf1a->leave($__internal_c09e98adec41a17e4028dfa770e7b65469ec05a65e94ba94318c35a5218ebf1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
