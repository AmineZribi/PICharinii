<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9ed92de4d44e011f57fcaf5369103ce5b054ebc93ac35697289dfe8239d09088 extends Twig_Template
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
        $__internal_7133c58ce4ea3d0eb31eab1de275e3776c620709810e192c6bb53480105d7128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7133c58ce4ea3d0eb31eab1de275e3776c620709810e192c6bb53480105d7128->enter($__internal_7133c58ce4ea3d0eb31eab1de275e3776c620709810e192c6bb53480105d7128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_7133c58ce4ea3d0eb31eab1de275e3776c620709810e192c6bb53480105d7128->leave($__internal_7133c58ce4ea3d0eb31eab1de275e3776c620709810e192c6bb53480105d7128_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
