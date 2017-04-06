<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_20db46d6e14662e4d2c83ad26d19299996553a1fb3d7f5d8f0a074bbe5492933 extends Twig_Template
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
        $__internal_346453bebbac35d9feb56c00ef2060f382c4129b8855e96aed8f47865f8bf8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346453bebbac35d9feb56c00ef2060f382c4129b8855e96aed8f47865f8bf8c1->enter($__internal_346453bebbac35d9feb56c00ef2060f382c4129b8855e96aed8f47865f8bf8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_346453bebbac35d9feb56c00ef2060f382c4129b8855e96aed8f47865f8bf8c1->leave($__internal_346453bebbac35d9feb56c00ef2060f382c4129b8855e96aed8f47865f8bf8c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
