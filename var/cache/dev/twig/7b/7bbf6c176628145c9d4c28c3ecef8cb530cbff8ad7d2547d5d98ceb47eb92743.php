<?php

/* ReclamationBundle:Default:UpdateReclamation.html.twig */
class __TwigTemplate_1b6a785216c3600d281fd7dbbce2e4bf49daf12dc98c84dd71112e9ede860046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "ReclamationBundle:Default:UpdateReclamation.html.twig", 2);
        $this->blocks = array(
            'adminName' => array($this, 'block_adminName'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65cd2cc40cedcc59e3a405142463b8c4f905afc246fb16396b37601b613ad9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cd2cc40cedcc59e3a405142463b8c4f905afc246fb16396b37601b613ad9aa->enter($__internal_65cd2cc40cedcc59e3a405142463b8c4f905afc246fb16396b37601b613ad9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:UpdateReclamation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65cd2cc40cedcc59e3a405142463b8c4f905afc246fb16396b37601b613ad9aa->leave($__internal_65cd2cc40cedcc59e3a405142463b8c4f905afc246fb16396b37601b613ad9aa_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_7a56af7c835cea94e116175a7253c389e53a0aac3a8ae54283fa52dec2fbb116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a56af7c835cea94e116175a7253c389e53a0aac3a8ae54283fa52dec2fbb116->enter($__internal_7a56af7c835cea94e116175a7253c389e53a0aac3a8ae54283fa52dec2fbb116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

        // line 4
        echo "    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/admin1.png"), "html", null, true);
        echo "\" alt=\"\" />
        ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-usermenu pull-right\">
        <li><a href=\"#\"><i class=\"fa fa-user\"></i>  Profile</a></li>
        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Settings</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>
    </ul>
";
        
        $__internal_7a56af7c835cea94e116175a7253c389e53a0aac3a8ae54283fa52dec2fbb116->leave($__internal_7a56af7c835cea94e116175a7253c389e53a0aac3a8ae54283fa52dec2fbb116_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_b04d35139054071906a1f7283819232f55309abf8b2aa1917c81a03bcdf6bab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04d35139054071906a1f7283819232f55309abf8b2aa1917c81a03bcdf6bab0->enter($__internal_b04d35139054071906a1f7283819232f55309abf8b2aa1917c81a03bcdf6bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
<h1>Interface de modification</h1>
    <div class=\"col-md-6 col-sm-6\">
Sujet: ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujetreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
Description: ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
Status: ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statusreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
ID Client: ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idclient", array()), 'widget', array("disabled" => "disabled", "attr" => array("class" => "form-control")));
        echo "
Nom Produit: ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomproduit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Click me", "attr" => array("class" => "btn btn-primary btn-md")));
        echo "


    </div>
";
        
        $__internal_b04d35139054071906a1f7283819232f55309abf8b2aa1917c81a03bcdf6bab0->leave($__internal_b04d35139054071906a1f7283819232f55309abf8b2aa1917c81a03bcdf6bab0_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Default:UpdateReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  73 => 17,  67 => 16,  57 => 12,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 2,);
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
{% extends \"layoutAdmin.html.twig\" %}
{% block adminName %}
    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        <img src=\"{{ asset('images/admin1.png') }}\" alt=\"\" />
        {{ name }}
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-usermenu pull-right\">
        <li><a href=\"#\"><i class=\"fa fa-user\"></i>  Profile</a></li>
        <li><a href=\"#\"><i class=\"fa fa-cog\"></i>  Settings</a></li>
        <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>
    </ul>
{% endblock %}

{% block content %}

<h1>Interface de modification</h1>
    <div class=\"col-md-6 col-sm-6\">
Sujet: {{ form_widget(form.sujetreclamation, { 'attr': {'class': 'form-control'} }) }}
Description: {{ form_widget(form.descriptionreclamation, { 'attr': {'class': 'form-control'} }) }}
Status: {{ form_widget(form.statusreclamation, { 'attr': {'class': 'form-control'} }) }}
ID Client: {{ form_widget(form.idclient,{ 'disabled':'disabled' ,  'attr': {'class': 'form-control'} }) }}
Nom Produit: {{ form_widget(form.nomproduit, { 'attr': {'class': 'form-control'} }) }}<br>
{{ form_widget(form.save, {  'label': 'Click me' ,'attr': {'class': 'btn btn-primary btn-md'} }) }}


    </div>
{% endblock %}", "ReclamationBundle:Default:UpdateReclamation.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle/Resources/views/Default/UpdateReclamation.html.twig");
    }
}
