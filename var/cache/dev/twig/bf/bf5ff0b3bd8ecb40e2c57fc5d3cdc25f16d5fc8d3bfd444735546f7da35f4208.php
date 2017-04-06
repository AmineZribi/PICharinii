<?php

/* ReclamationBundle:Default:index.html.twig */
class __TwigTemplate_0842a89318fffec9799a054f5e145dc31449844495609eb244cef620c628dd1a extends Twig_Template
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
        $__internal_5b832378e78c80d9292914d744378f7a40e44028ce328596e27cff78b7fee9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b832378e78c80d9292914d744378f7a40e44028ce328596e27cff78b7fee9f8->enter($__internal_5b832378e78c80d9292914d744378f7a40e44028ce328596e27cff78b7fee9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5b832378e78c80d9292914d744378f7a40e44028ce328596e27cff78b7fee9f8->leave($__internal_5b832378e78c80d9292914d744378f7a40e44028ce328596e27cff78b7fee9f8_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "ReclamationBundle:Default:index.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
