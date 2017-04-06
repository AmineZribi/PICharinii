<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_16d00906f73304430d41d212c75e4e89e9b2b73854cceb6ee75b71bb759e9202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91c3e87036c1552d19806a1386e45f54af3db57e792d595a40a425b8741d1ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c3e87036c1552d19806a1386e45f54af3db57e792d595a40a425b8741d1ff5->enter($__internal_91c3e87036c1552d19806a1386e45f54af3db57e792d595a40a425b8741d1ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c3e87036c1552d19806a1386e45f54af3db57e792d595a40a425b8741d1ff5->leave($__internal_91c3e87036c1552d19806a1386e45f54af3db57e792d595a40a425b8741d1ff5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13422e9e4b95bf85392a6f89026e2acac5869002f606916ccd4eaefb69b8e67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13422e9e4b95bf85392a6f89026e2acac5869002f606916ccd4eaefb69b8e67f->enter($__internal_13422e9e4b95bf85392a6f89026e2acac5869002f606916ccd4eaefb69b8e67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13422e9e4b95bf85392a6f89026e2acac5869002f606916ccd4eaefb69b8e67f->leave($__internal_13422e9e4b95bf85392a6f89026e2acac5869002f606916ccd4eaefb69b8e67f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96545671c52e21f001d1e84efc7ba6924f45fad56fba60c5ee4bf96c7cfc5adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96545671c52e21f001d1e84efc7ba6924f45fad56fba60c5ee4bf96c7cfc5adc->enter($__internal_96545671c52e21f001d1e84efc7ba6924f45fad56fba60c5ee4bf96c7cfc5adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96545671c52e21f001d1e84efc7ba6924f45fad56fba60c5ee4bf96c7cfc5adc->leave($__internal_96545671c52e21f001d1e84efc7ba6924f45fad56fba60c5ee4bf96c7cfc5adc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_847a479cb923476360c7265f419c94426c55117cf6e9529effdfa5afef65ebd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847a479cb923476360c7265f419c94426c55117cf6e9529effdfa5afef65ebd8->enter($__internal_847a479cb923476360c7265f419c94426c55117cf6e9529effdfa5afef65ebd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_847a479cb923476360c7265f419c94426c55117cf6e9529effdfa5afef65ebd8->leave($__internal_847a479cb923476360c7265f419c94426c55117cf6e9529effdfa5afef65ebd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
