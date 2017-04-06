<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d691f38a42499a34a98cc0d2964754d2f987b9860ae8b528fe7802c025603cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d221e8ad5f238a29ffbc865820dab53fe9d6c11dd68209f63e978f4a5dbf42df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d221e8ad5f238a29ffbc865820dab53fe9d6c11dd68209f63e978f4a5dbf42df->enter($__internal_d221e8ad5f238a29ffbc865820dab53fe9d6c11dd68209f63e978f4a5dbf42df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d221e8ad5f238a29ffbc865820dab53fe9d6c11dd68209f63e978f4a5dbf42df->leave($__internal_d221e8ad5f238a29ffbc865820dab53fe9d6c11dd68209f63e978f4a5dbf42df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f05d1022b52b0bee05dae0c347ae1497ea7d101a7d1b8a18fa6cc119d4fd4f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05d1022b52b0bee05dae0c347ae1497ea7d101a7d1b8a18fa6cc119d4fd4f98->enter($__internal_f05d1022b52b0bee05dae0c347ae1497ea7d101a7d1b8a18fa6cc119d4fd4f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f05d1022b52b0bee05dae0c347ae1497ea7d101a7d1b8a18fa6cc119d4fd4f98->leave($__internal_f05d1022b52b0bee05dae0c347ae1497ea7d101a7d1b8a18fa6cc119d4fd4f98_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dde47718080ec58c2ffe2cee3788f73a063f244715590ead772de9587706e60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde47718080ec58c2ffe2cee3788f73a063f244715590ead772de9587706e60e->enter($__internal_dde47718080ec58c2ffe2cee3788f73a063f244715590ead772de9587706e60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dde47718080ec58c2ffe2cee3788f73a063f244715590ead772de9587706e60e->leave($__internal_dde47718080ec58c2ffe2cee3788f73a063f244715590ead772de9587706e60e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
