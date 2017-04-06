<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c9c097c1435b96a98fca940e95dcb6cfda5961fd145b6f4bd0fd97ef81868717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b764690e8659eb896927bbb15c8db142629cb4de62c1d24bf86325dda5d6674d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b764690e8659eb896927bbb15c8db142629cb4de62c1d24bf86325dda5d6674d->enter($__internal_b764690e8659eb896927bbb15c8db142629cb4de62c1d24bf86325dda5d6674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b764690e8659eb896927bbb15c8db142629cb4de62c1d24bf86325dda5d6674d->leave($__internal_b764690e8659eb896927bbb15c8db142629cb4de62c1d24bf86325dda5d6674d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1291651c1d59bec3acd02ed54fce6ff68c622b3b90a0eaa50f18321364daac5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1291651c1d59bec3acd02ed54fce6ff68c622b3b90a0eaa50f18321364daac5e->enter($__internal_1291651c1d59bec3acd02ed54fce6ff68c622b3b90a0eaa50f18321364daac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1291651c1d59bec3acd02ed54fce6ff68c622b3b90a0eaa50f18321364daac5e->leave($__internal_1291651c1d59bec3acd02ed54fce6ff68c622b3b90a0eaa50f18321364daac5e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
