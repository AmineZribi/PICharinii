<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_aad578b740b5301bd0b262e756545e1ccd4910101ee2d4a522decfd227e525e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_7dcdda3c7bc5f7614e3df5b1d22c7d191ddc7fb6d5b0e63ab5a5b0787756c83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcdda3c7bc5f7614e3df5b1d22c7d191ddc7fb6d5b0e63ab5a5b0787756c83d->enter($__internal_7dcdda3c7bc5f7614e3df5b1d22c7d191ddc7fb6d5b0e63ab5a5b0787756c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dcdda3c7bc5f7614e3df5b1d22c7d191ddc7fb6d5b0e63ab5a5b0787756c83d->leave($__internal_7dcdda3c7bc5f7614e3df5b1d22c7d191ddc7fb6d5b0e63ab5a5b0787756c83d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d3681ea817e7d56d50e79fc01f5db5dc0434c4dafbff5462cd4eba2ca1a3652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3681ea817e7d56d50e79fc01f5db5dc0434c4dafbff5462cd4eba2ca1a3652->enter($__internal_6d3681ea817e7d56d50e79fc01f5db5dc0434c4dafbff5462cd4eba2ca1a3652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6d3681ea817e7d56d50e79fc01f5db5dc0434c4dafbff5462cd4eba2ca1a3652->leave($__internal_6d3681ea817e7d56d50e79fc01f5db5dc0434c4dafbff5462cd4eba2ca1a3652_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
