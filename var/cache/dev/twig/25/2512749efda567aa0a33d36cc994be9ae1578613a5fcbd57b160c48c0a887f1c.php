<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7018c9c2553e8b31dbe28a7ba4ce1689ef2ab8cad2858a8147d8a934ddbd9d37 extends Twig_Template
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
        $__internal_7a7d312fb19fd971878c339824b341355920ac1e00d00c9ba10e0eb8fcdb06e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7d312fb19fd971878c339824b341355920ac1e00d00c9ba10e0eb8fcdb06e6->enter($__internal_7a7d312fb19fd971878c339824b341355920ac1e00d00c9ba10e0eb8fcdb06e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a7d312fb19fd971878c339824b341355920ac1e00d00c9ba10e0eb8fcdb06e6->leave($__internal_7a7d312fb19fd971878c339824b341355920ac1e00d00c9ba10e0eb8fcdb06e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_973d0cd1cd9041124536640ea82e7608c7f882953a36955b41a530c890a9e9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973d0cd1cd9041124536640ea82e7608c7f882953a36955b41a530c890a9e9b0->enter($__internal_973d0cd1cd9041124536640ea82e7608c7f882953a36955b41a530c890a9e9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_973d0cd1cd9041124536640ea82e7608c7f882953a36955b41a530c890a9e9b0->leave($__internal_973d0cd1cd9041124536640ea82e7608c7f882953a36955b41a530c890a9e9b0_prof);

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
