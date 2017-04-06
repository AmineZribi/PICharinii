<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a55d3fc3c0ae6f5f7a25736d0fc21191641f019ec9bb6dd8fabd9db814033e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b518ecd32d4d47cf138ddc5bf7bea74eec2bd6723f33b773da771e1117772ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b518ecd32d4d47cf138ddc5bf7bea74eec2bd6723f33b773da771e1117772ce->enter($__internal_4b518ecd32d4d47cf138ddc5bf7bea74eec2bd6723f33b773da771e1117772ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4b518ecd32d4d47cf138ddc5bf7bea74eec2bd6723f33b773da771e1117772ce->leave($__internal_4b518ecd32d4d47cf138ddc5bf7bea74eec2bd6723f33b773da771e1117772ce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6afdd238c04a23804e247a21b2ebc9a90715417248f22abc6c8946c4d59603bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afdd238c04a23804e247a21b2ebc9a90715417248f22abc6c8946c4d59603bc->enter($__internal_6afdd238c04a23804e247a21b2ebc9a90715417248f22abc6c8946c4d59603bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6afdd238c04a23804e247a21b2ebc9a90715417248f22abc6c8946c4d59603bc->leave($__internal_6afdd238c04a23804e247a21b2ebc9a90715417248f22abc6c8946c4d59603bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
