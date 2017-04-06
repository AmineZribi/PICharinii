<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7bf09c8faea72c183986e083bd4bda9f204920aaf17cd8cd7d9460a3b01bc687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e7ffb0477e22b1939859d7b7418310f03d45269d6cb90d8e414925ed386bb3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ffb0477e22b1939859d7b7418310f03d45269d6cb90d8e414925ed386bb3c3->enter($__internal_e7ffb0477e22b1939859d7b7418310f03d45269d6cb90d8e414925ed386bb3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ffb0477e22b1939859d7b7418310f03d45269d6cb90d8e414925ed386bb3c3->leave($__internal_e7ffb0477e22b1939859d7b7418310f03d45269d6cb90d8e414925ed386bb3c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9473f9574533016342bce6bfbc128d8d3e16bfb787fc3e1924818bae68a911fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9473f9574533016342bce6bfbc128d8d3e16bfb787fc3e1924818bae68a911fb->enter($__internal_9473f9574533016342bce6bfbc128d8d3e16bfb787fc3e1924818bae68a911fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9473f9574533016342bce6bfbc128d8d3e16bfb787fc3e1924818bae68a911fb->leave($__internal_9473f9574533016342bce6bfbc128d8d3e16bfb787fc3e1924818bae68a911fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80ad60f258f4bc6eeed7d6d85a0dcc20f15436fc8a306676be03be3279bcbbca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ad60f258f4bc6eeed7d6d85a0dcc20f15436fc8a306676be03be3279bcbbca->enter($__internal_80ad60f258f4bc6eeed7d6d85a0dcc20f15436fc8a306676be03be3279bcbbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80ad60f258f4bc6eeed7d6d85a0dcc20f15436fc8a306676be03be3279bcbbca->leave($__internal_80ad60f258f4bc6eeed7d6d85a0dcc20f15436fc8a306676be03be3279bcbbca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_629d83bf7ef3062143678a9a888eacffa1f11063c6cb650a657193be0ad234c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629d83bf7ef3062143678a9a888eacffa1f11063c6cb650a657193be0ad234c8->enter($__internal_629d83bf7ef3062143678a9a888eacffa1f11063c6cb650a657193be0ad234c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_629d83bf7ef3062143678a9a888eacffa1f11063c6cb650a657193be0ad234c8->leave($__internal_629d83bf7ef3062143678a9a888eacffa1f11063c6cb650a657193be0ad234c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
