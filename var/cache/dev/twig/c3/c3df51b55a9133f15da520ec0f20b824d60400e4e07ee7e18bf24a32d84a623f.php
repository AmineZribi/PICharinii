<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_24ddd69e8721ffe6a68ef3333eaf02ccc835065aacc50b25672b0163ec93f756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cabb8f84e7badbd94ac4109ab93bdcb7eef39f7dbd6c1af3f58b99090716d1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabb8f84e7badbd94ac4109ab93bdcb7eef39f7dbd6c1af3f58b99090716d1c8->enter($__internal_cabb8f84e7badbd94ac4109ab93bdcb7eef39f7dbd6c1af3f58b99090716d1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_cabb8f84e7badbd94ac4109ab93bdcb7eef39f7dbd6c1af3f58b99090716d1c8->leave($__internal_cabb8f84e7badbd94ac4109ab93bdcb7eef39f7dbd6c1af3f58b99090716d1c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}