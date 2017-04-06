<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_18ed5e51b7153c667733126c17fe4bd0e549f9d212cf1a66d92f6dc43d334f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a177121b01aaf981d35fdef814f332d94005151dc4201ac1af118d04a61002a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a177121b01aaf981d35fdef814f332d94005151dc4201ac1af118d04a61002a->enter($__internal_2a177121b01aaf981d35fdef814f332d94005151dc4201ac1af118d04a61002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a177121b01aaf981d35fdef814f332d94005151dc4201ac1af118d04a61002a->leave($__internal_2a177121b01aaf981d35fdef814f332d94005151dc4201ac1af118d04a61002a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5763ca0f48d61d723d642dbbfc6e5a390067c4bf67095c097fbf3e212e6345b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5763ca0f48d61d723d642dbbfc6e5a390067c4bf67095c097fbf3e212e6345b0->enter($__internal_5763ca0f48d61d723d642dbbfc6e5a390067c4bf67095c097fbf3e212e6345b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5763ca0f48d61d723d642dbbfc6e5a390067c4bf67095c097fbf3e212e6345b0->leave($__internal_5763ca0f48d61d723d642dbbfc6e5a390067c4bf67095c097fbf3e212e6345b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
