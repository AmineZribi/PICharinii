<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_3608afeecfbf49a60f5a7e73f609adb33c2c637440720f91b8e132b5743a52fd extends Twig_Template
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
        $__internal_596245f363275e476faa5b1a5e976e203a6c47857129fb21f82c4294bf4718db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596245f363275e476faa5b1a5e976e203a6c47857129fb21f82c4294bf4718db->enter($__internal_596245f363275e476faa5b1a5e976e203a6c47857129fb21f82c4294bf4718db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_596245f363275e476faa5b1a5e976e203a6c47857129fb21f82c4294bf4718db->leave($__internal_596245f363275e476faa5b1a5e976e203a6c47857129fb21f82c4294bf4718db_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb88fdf3d40933c61cff93f1dd2d29ea96f749a78ffef6913f73a3aac8e3bb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb88fdf3d40933c61cff93f1dd2d29ea96f749a78ffef6913f73a3aac8e3bb4c->enter($__internal_cb88fdf3d40933c61cff93f1dd2d29ea96f749a78ffef6913f73a3aac8e3bb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cb88fdf3d40933c61cff93f1dd2d29ea96f749a78ffef6913f73a3aac8e3bb4c->leave($__internal_cb88fdf3d40933c61cff93f1dd2d29ea96f749a78ffef6913f73a3aac8e3bb4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
