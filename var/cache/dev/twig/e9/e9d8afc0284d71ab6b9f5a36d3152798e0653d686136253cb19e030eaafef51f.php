<?php

/* ReclamationBundle:Default:UpdateReclamation.html.twig */
class __TwigTemplate_2fa73fc800951a6ac3b6d86ecf7ad0f3f4aba8ca590ed91ed66b950db2ab714c extends Twig_Template
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
        $__internal_2c7e3f74f11c1bb2bd6be37d72592bb15104fd18fc010eaa40a3fd9a5a244ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7e3f74f11c1bb2bd6be37d72592bb15104fd18fc010eaa40a3fd9a5a244ff9->enter($__internal_2c7e3f74f11c1bb2bd6be37d72592bb15104fd18fc010eaa40a3fd9a5a244ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:UpdateReclamation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c7e3f74f11c1bb2bd6be37d72592bb15104fd18fc010eaa40a3fd9a5a244ff9->leave($__internal_2c7e3f74f11c1bb2bd6be37d72592bb15104fd18fc010eaa40a3fd9a5a244ff9_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_bcc17be5f8d744eff459f29ede0d5e50f451b63e0c98071276111a6646cf710d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc17be5f8d744eff459f29ede0d5e50f451b63e0c98071276111a6646cf710d->enter($__internal_bcc17be5f8d744eff459f29ede0d5e50f451b63e0c98071276111a6646cf710d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

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
        
        $__internal_bcc17be5f8d744eff459f29ede0d5e50f451b63e0c98071276111a6646cf710d->leave($__internal_bcc17be5f8d744eff459f29ede0d5e50f451b63e0c98071276111a6646cf710d_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e142d08d17d7b961826dbe537fb9ab4402ce2ff184ce1c69c6c1838c4f74a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e142d08d17d7b961826dbe537fb9ab4402ce2ff184ce1c69c6c1838c4f74a71->enter($__internal_8e142d08d17d7b961826dbe537fb9ab4402ce2ff184ce1c69c6c1838c4f74a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
<h1>Modifier une reclamation</h1>
    <div class=\"col-md-6 col-sm-6\">
        ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
Sujet: ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujetreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
Description: ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
Status: ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statusreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
Nom Produit: ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomproduit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Modifier", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
        ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_8e142d08d17d7b961826dbe537fb9ab4402ce2ff184ce1c69c6c1838c4f74a71->leave($__internal_8e142d08d17d7b961826dbe537fb9ab4402ce2ff184ce1c69c6c1838c4f74a71_prof);

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
        return array (  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  73 => 17,  67 => 16,  57 => 12,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 2,);
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

<h1>Modifier une reclamation</h1>
    <div class=\"col-md-6 col-sm-6\">
        {{ form_start(form) }}
Sujet: {{ form_widget(form.sujetreclamation, { 'attr': {'class': 'form-control'} }) }}
Description: {{ form_widget(form.descriptionreclamation, { 'attr': {'class': 'form-control'} }) }}
Status: {{ form_widget(form.statusreclamation, { 'attr': {'class': 'form-control'} }) }}
Nom Produit: {{ form_widget(form.nomproduit, { 'attr': {'class': 'form-control'} }) }}<br>
        {{ form_widget(form.Modifier,{ 'attr': {'class': 'btn btn-success'} }) }}
        {{ form_end(form) }}

    </div>
{% endblock %}", "ReclamationBundle:Default:UpdateReclamation.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle\\Resources\\views\\Default\\UpdateReclamation.html.twig");
    }
}
