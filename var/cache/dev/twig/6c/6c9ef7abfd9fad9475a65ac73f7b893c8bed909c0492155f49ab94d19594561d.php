<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_004560c9973cb9f18940ed792c4d64200bd4a6345699c0ca15bf6f9543863b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "UserBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c33f066f0b093d955b01fead84ddb187b2a12af6234d2234a7703c1fb9af4112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33f066f0b093d955b01fead84ddb187b2a12af6234d2234a7703c1fb9af4112->enter($__internal_c33f066f0b093d955b01fead84ddb187b2a12af6234d2234a7703c1fb9af4112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33f066f0b093d955b01fead84ddb187b2a12af6234d2234a7703c1fb9af4112->leave($__internal_c33f066f0b093d955b01fead84ddb187b2a12af6234d2234a7703c1fb9af4112_prof);

    }

    // line 4
    public function block_login($context, array $blocks = array())
    {
        $__internal_395afe463402ac7eff748335e56e1026afe07d97ee736a836b1b030ac2bbcedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395afe463402ac7eff748335e56e1026afe07d97ee736a836b1b030ac2bbcedd->enter($__internal_395afe463402ac7eff748335e56e1026afe07d97ee736a836b1b030ac2bbcedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 5
        echo "    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
    ";
        
        $__internal_395afe463402ac7eff748335e56e1026afe07d97ee736a836b1b030ac2bbcedd->leave($__internal_395afe463402ac7eff748335e56e1026afe07d97ee736a836b1b030ac2bbcedd_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_6246b6e555485be7f907477ee39ed149b165d2bde982ef2b93dff90fc0123d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6246b6e555485be7f907477ee39ed149b165d2bde982ef2b93dff90fc0123d02->enter($__internal_6246b6e555485be7f907477ee39ed149b165d2bde982ef2b93dff90fc0123d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
Hello World !
";
        
        $__internal_6246b6e555485be7f907477ee39ed149b165d2bde982ef2b93dff90fc0123d02->leave($__internal_6246b6e555485be7f907477ee39ed149b165d2bde982ef2b93dff90fc0123d02_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 9,  47 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layoutUser.html.twig\" %}

{% block login %}
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome {{ name }}</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
    {% endblock %}
{% block content %}

Hello World !
{% endblock %}

", "UserBundle:Default:index.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Default/index.html.twig");
    }
}
