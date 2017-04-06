<?php

/* base.html.twig */
class __TwigTemplate_54760178e2afd20d65f9beb08cc368901cb954cbe7d422100dbffaa4bf820fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8294330cd81aebf4bb9e1d65d300b58a61a96c1dd45bc7b4aaa2652fd63223c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8294330cd81aebf4bb9e1d65d300b58a61a96c1dd45bc7b4aaa2652fd63223c4->enter($__internal_8294330cd81aebf4bb9e1d65d300b58a61a96c1dd45bc7b4aaa2652fd63223c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8294330cd81aebf4bb9e1d65d300b58a61a96c1dd45bc7b4aaa2652fd63223c4->leave($__internal_8294330cd81aebf4bb9e1d65d300b58a61a96c1dd45bc7b4aaa2652fd63223c4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85d87877bd3b66b9077e96632ea25e51e7b4004fd4492c16a01ee1388a742865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d87877bd3b66b9077e96632ea25e51e7b4004fd4492c16a01ee1388a742865->enter($__internal_85d87877bd3b66b9077e96632ea25e51e7b4004fd4492c16a01ee1388a742865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_85d87877bd3b66b9077e96632ea25e51e7b4004fd4492c16a01ee1388a742865->leave($__internal_85d87877bd3b66b9077e96632ea25e51e7b4004fd4492c16a01ee1388a742865_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbfcf612f6c550f2fb0fea1105f8f4320df2a5389414b99ce83145c9fad01f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfcf612f6c550f2fb0fea1105f8f4320df2a5389414b99ce83145c9fad01f9c->enter($__internal_bbfcf612f6c550f2fb0fea1105f8f4320df2a5389414b99ce83145c9fad01f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbfcf612f6c550f2fb0fea1105f8f4320df2a5389414b99ce83145c9fad01f9c->leave($__internal_bbfcf612f6c550f2fb0fea1105f8f4320df2a5389414b99ce83145c9fad01f9c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_be99053eab0734aaed09bcf9f819ccf9ad126349f5da418b04f60e9fe5289d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be99053eab0734aaed09bcf9f819ccf9ad126349f5da418b04f60e9fe5289d2f->enter($__internal_be99053eab0734aaed09bcf9f819ccf9ad126349f5da418b04f60e9fe5289d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be99053eab0734aaed09bcf9f819ccf9ad126349f5da418b04f60e9fe5289d2f->leave($__internal_be99053eab0734aaed09bcf9f819ccf9ad126349f5da418b04f60e9fe5289d2f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e703433a62d3908ca5aed4f1a37429e68f6cb469fab5039d282eb6f00ad590d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e703433a62d3908ca5aed4f1a37429e68f6cb469fab5039d282eb6f00ad590d1->enter($__internal_e703433a62d3908ca5aed4f1a37429e68f6cb469fab5039d282eb6f00ad590d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e703433a62d3908ca5aed4f1a37429e68f6cb469fab5039d282eb6f00ad590d1->leave($__internal_e703433a62d3908ca5aed4f1a37429e68f6cb469fab5039d282eb6f00ad590d1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\PICharini\\app\\Resources\\views\\base.html.twig");
    }
}
