<?php

/* ReclamationBundle:Default:index.html.twig */
class __TwigTemplate_ce358b340da502ccaf0a4216b48cac2fe999ceb35a42788397a5ce67a86405ee extends Twig_Template
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
        $__internal_af94ade4d357e39f608756dd78dbc2c587a52b5cc576ab478451278d46e18115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af94ade4d357e39f608756dd78dbc2c587a52b5cc576ab478451278d46e18115->enter($__internal_af94ade4d357e39f608756dd78dbc2c587a52b5cc576ab478451278d46e18115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_af94ade4d357e39f608756dd78dbc2c587a52b5cc576ab478451278d46e18115->leave($__internal_af94ade4d357e39f608756dd78dbc2c587a52b5cc576ab478451278d46e18115_prof);

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
", "ReclamationBundle:Default:index.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle/Resources/views/Default/index.html.twig");
    }
}
