<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cee43ff7c8008267fe25f0975104a29076914b7e62a4f37a74478b190289229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cee43ff7c8008267fe25f0975104a29076914b7e62a4f37a74478b190289229->enter($__internal_2cee43ff7c8008267fe25f0975104a29076914b7e62a4f37a74478b190289229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cee43ff7c8008267fe25f0975104a29076914b7e62a4f37a74478b190289229->leave($__internal_2cee43ff7c8008267fe25f0975104a29076914b7e62a4f37a74478b190289229_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48afeb524bc6eaa3e378ecde6ce595e5029320406f3d2894dd9de0e7429ef1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48afeb524bc6eaa3e378ecde6ce595e5029320406f3d2894dd9de0e7429ef1e2->enter($__internal_48afeb524bc6eaa3e378ecde6ce595e5029320406f3d2894dd9de0e7429ef1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48afeb524bc6eaa3e378ecde6ce595e5029320406f3d2894dd9de0e7429ef1e2->leave($__internal_48afeb524bc6eaa3e378ecde6ce595e5029320406f3d2894dd9de0e7429ef1e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f6b3d2dde8895bc7929026a6b5da382fa94f08318cccbb38a4f00ab94e8d067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6b3d2dde8895bc7929026a6b5da382fa94f08318cccbb38a4f00ab94e8d067->enter($__internal_4f6b3d2dde8895bc7929026a6b5da382fa94f08318cccbb38a4f00ab94e8d067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f6b3d2dde8895bc7929026a6b5da382fa94f08318cccbb38a4f00ab94e8d067->leave($__internal_4f6b3d2dde8895bc7929026a6b5da382fa94f08318cccbb38a4f00ab94e8d067_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05d28662af49d2f96d0bceb3927dc6fdbbae6d4e7b9da68abe28056cbcd21dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d28662af49d2f96d0bceb3927dc6fdbbae6d4e7b9da68abe28056cbcd21dd5->enter($__internal_05d28662af49d2f96d0bceb3927dc6fdbbae6d4e7b9da68abe28056cbcd21dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05d28662af49d2f96d0bceb3927dc6fdbbae6d4e7b9da68abe28056cbcd21dd5->leave($__internal_05d28662af49d2f96d0bceb3927dc6fdbbae6d4e7b9da68abe28056cbcd21dd5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
