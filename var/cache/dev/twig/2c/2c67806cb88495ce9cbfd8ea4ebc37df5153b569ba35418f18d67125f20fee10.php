<?php

/* ReclamationBundle:Front:new.html.twig */
class __TwigTemplate_b7b3963c7ba67dd0ba8ce1e15d691990f1595dadc06b1c5c5a039297fa800d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "ReclamationBundle:Front:new.html.twig", 1);
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
        $__internal_9ee03dcef0567ad73321c14f1959bcba2ccdc496f2f0d1822e4fd10e30c19362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee03dcef0567ad73321c14f1959bcba2ccdc496f2f0d1822e4fd10e30c19362->enter($__internal_9ee03dcef0567ad73321c14f1959bcba2ccdc496f2f0d1822e4fd10e30c19362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Front:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ee03dcef0567ad73321c14f1959bcba2ccdc496f2f0d1822e4fd10e30c19362->leave($__internal_9ee03dcef0567ad73321c14f1959bcba2ccdc496f2f0d1822e4fd10e30c19362_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_7fe53403e8c5fa0e03ef2f7df93a6e12352bb9e480fc5a20b8b673dacc07b720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe53403e8c5fa0e03ef2f7df93a6e12352bb9e480fc5a20b8b673dacc07b720->enter($__internal_7fe53403e8c5fa0e03ef2f7df93a6e12352bb9e480fc5a20b8b673dacc07b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userdash");
        echo "\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
<li><a href=\"contact.html\">Contact</a>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
    ";
        
        $__internal_7fe53403e8c5fa0e03ef2f7df93a6e12352bb9e480fc5a20b8b673dacc07b720->leave($__internal_7fe53403e8c5fa0e03ef2f7df93a6e12352bb9e480fc5a20b8b673dacc07b720_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_53bbb7dd19cb558e5b4c1ff723e33d8f1a58c914fea6af1c5d2b449bbe9d0281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bbb7dd19cb558e5b4c1ff723e33d8f1a58c914fea6af1c5d2b449bbe9d0281->enter($__internal_53bbb7dd19cb558e5b4c1ff723e33d8f1a58c914fea6af1c5d2b449bbe9d0281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1>Ajout d'une reclamation</h1>
<div>
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        Sujet: ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujetreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        Description: ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionreclamation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
        <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-success\" />


    ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "




";
        
        $__internal_53bbb7dd19cb558e5b4c1ff723e33d8f1a58c914fea6af1c5d2b449bbe9d0281->leave($__internal_53bbb7dd19cb558e5b4c1ff723e33d8f1a58c914fea6af1c5d2b449bbe9d0281_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Front:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  76 => 12,  72 => 11,  68 => 10,  64 => 8,  58 => 7,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layoutUser.html.twig\" %}
{% block login %}
<li><a href=\"{{ path('userdash') }}\"> Welcome {{ name }}</a>
<li><a href=\"contact.html\">Contact</a>
<li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
    {% endblock %}
{% block content %}
    <h1>Ajout d'une reclamation</h1>
<div>
    {{ form_start(form) }}
        Sujet: {{ form_widget(form.sujetreclamation, { 'attr': {'class': 'form-control'} }) }}
        Description: {{ form_widget(form.descriptionreclamation, { 'attr': {'class': 'form-control'} }) }}
</div>
        <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-success\" />


    {{ form_end(form) }}




{% endblock %}
", "ReclamationBundle:Front:new.html.twig", "C:\\wamp64\\www\\PICharini\\src\\ReclamationBundle/Resources/views/Front/new.html.twig");
    }
}
