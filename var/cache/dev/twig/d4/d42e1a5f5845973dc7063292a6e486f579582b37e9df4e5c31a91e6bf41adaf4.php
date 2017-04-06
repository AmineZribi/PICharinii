<?php

/* @Reclamation/Default/index.html.twig */
class __TwigTemplate_e1772ebdecb14e4aeb731e00e8f66e59fe1e51c3e240d1b8da5b13c3acd83a3f extends Twig_Template
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
        $__internal_49b3f45eea14f8eaf66317c50d74d3fd3997f2367b4b4319283fbb3a3674a3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b3f45eea14f8eaf66317c50d74d3fd3997f2367b4b4319283fbb3a3674a3c6->enter($__internal_49b3f45eea14f8eaf66317c50d74d3fd3997f2367b4b4319283fbb3a3674a3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Reclamation/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_49b3f45eea14f8eaf66317c50d74d3fd3997f2367b4b4319283fbb3a3674a3c6->leave($__internal_49b3f45eea14f8eaf66317c50d74d3fd3997f2367b4b4319283fbb3a3674a3c6_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Default/index.html.twig";
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
", "@Reclamation/Default/index.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
