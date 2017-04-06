<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_646f564c843ac65d6c50a6d0674bd0574df9596d7121e6140ac428c22c03d3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c224b891b7b49a37422aed9590df2a687819dee7199026e334790233fe8bc79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c224b891b7b49a37422aed9590df2a687819dee7199026e334790233fe8bc79c->enter($__internal_c224b891b7b49a37422aed9590df2a687819dee7199026e334790233fe8bc79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c224b891b7b49a37422aed9590df2a687819dee7199026e334790233fe8bc79c->leave($__internal_c224b891b7b49a37422aed9590df2a687819dee7199026e334790233fe8bc79c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d06772848d0346fc737eabf850ffcda67e784b70a4c026a91d7e70ca7f90e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d06772848d0346fc737eabf850ffcda67e784b70a4c026a91d7e70ca7f90e4c->enter($__internal_5d06772848d0346fc737eabf850ffcda67e784b70a4c026a91d7e70ca7f90e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d06772848d0346fc737eabf850ffcda67e784b70a4c026a91d7e70ca7f90e4c->leave($__internal_5d06772848d0346fc737eabf850ffcda67e784b70a4c026a91d7e70ca7f90e4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4dda81d3b3d426eca936b5e02d6a2b429d10d9788d5cb5d5a835e782579f718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dda81d3b3d426eca936b5e02d6a2b429d10d9788d5cb5d5a835e782579f718->enter($__internal_c4dda81d3b3d426eca936b5e02d6a2b429d10d9788d5cb5d5a835e782579f718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4dda81d3b3d426eca936b5e02d6a2b429d10d9788d5cb5d5a835e782579f718->leave($__internal_c4dda81d3b3d426eca936b5e02d6a2b429d10d9788d5cb5d5a835e782579f718_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69c34e478c2294a0e49e8a9d8cf9a6be845c1761e632b17e6fe46619015ea23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c34e478c2294a0e49e8a9d8cf9a6be845c1761e632b17e6fe46619015ea23c->enter($__internal_69c34e478c2294a0e49e8a9d8cf9a6be845c1761e632b17e6fe46619015ea23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_69c34e478c2294a0e49e8a9d8cf9a6be845c1761e632b17e6fe46619015ea23c->leave($__internal_69c34e478c2294a0e49e8a9d8cf9a6be845c1761e632b17e6fe46619015ea23c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
