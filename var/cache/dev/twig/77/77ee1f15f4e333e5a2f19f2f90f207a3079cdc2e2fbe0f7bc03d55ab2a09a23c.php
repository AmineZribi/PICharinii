<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_8f7aed1be81a2a9fa6a458801e83ea34828d77375bb3d9e57a0b7620adbf8d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_7b616513da858fe52987f597e140d1247426f4d6dc4dc21893eba4ba5e06a596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b616513da858fe52987f597e140d1247426f4d6dc4dc21893eba4ba5e06a596->enter($__internal_7b616513da858fe52987f597e140d1247426f4d6dc4dc21893eba4ba5e06a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b616513da858fe52987f597e140d1247426f4d6dc4dc21893eba4ba5e06a596->leave($__internal_7b616513da858fe52987f597e140d1247426f4d6dc4dc21893eba4ba5e06a596_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a906fc7e95384f383e561d103c2c9e6c7efe7c2eddd04285b9083d0f417f8e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a906fc7e95384f383e561d103c2c9e6c7efe7c2eddd04285b9083d0f417f8e59->enter($__internal_a906fc7e95384f383e561d103c2c9e6c7efe7c2eddd04285b9083d0f417f8e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a906fc7e95384f383e561d103c2c9e6c7efe7c2eddd04285b9083d0f417f8e59->leave($__internal_a906fc7e95384f383e561d103c2c9e6c7efe7c2eddd04285b9083d0f417f8e59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
