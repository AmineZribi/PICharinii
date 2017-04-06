<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_19e7a069f7f45102906ab1d13ffaa78260929374045379b4a7a2481a40e22507 extends Twig_Template
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
        $__internal_c7b0a52fa4bcf7f4e47fc141e3cbc3523d2c0eaf60f623d77559df74c5b4b398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b0a52fa4bcf7f4e47fc141e3cbc3523d2c0eaf60f623d77559df74c5b4b398->enter($__internal_c7b0a52fa4bcf7f4e47fc141e3cbc3523d2c0eaf60f623d77559df74c5b4b398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7b0a52fa4bcf7f4e47fc141e3cbc3523d2c0eaf60f623d77559df74c5b4b398->leave($__internal_c7b0a52fa4bcf7f4e47fc141e3cbc3523d2c0eaf60f623d77559df74c5b4b398_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
