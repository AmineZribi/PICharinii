<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3978cdec719bebe0ca58f10aa8b8d6e6052599759a0a1ff5ca7e3d758d62379f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_3dc1601104e6f3236c9f4cf2b4422d0ba4bcca5e573ba9772d79c03faed66d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc1601104e6f3236c9f4cf2b4422d0ba4bcca5e573ba9772d79c03faed66d7a->enter($__internal_3dc1601104e6f3236c9f4cf2b4422d0ba4bcca5e573ba9772d79c03faed66d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc1601104e6f3236c9f4cf2b4422d0ba4bcca5e573ba9772d79c03faed66d7a->leave($__internal_3dc1601104e6f3236c9f4cf2b4422d0ba4bcca5e573ba9772d79c03faed66d7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57e953d595121e66ab40c4e8ff31d4b12429fdf244d968e9e079c56483adab71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e953d595121e66ab40c4e8ff31d4b12429fdf244d968e9e079c56483adab71->enter($__internal_57e953d595121e66ab40c4e8ff31d4b12429fdf244d968e9e079c56483adab71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_57e953d595121e66ab40c4e8ff31d4b12429fdf244d968e9e079c56483adab71->leave($__internal_57e953d595121e66ab40c4e8ff31d4b12429fdf244d968e9e079c56483adab71_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
