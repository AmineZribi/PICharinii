<?php

/* ::base.html.twig */
class __TwigTemplate_dcbdaf93735b5bc8de218ea0d068d55f653223179d8a8ba7f91fb80474077e3c extends Twig_Template
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
        $__internal_d22d6d28d78c911b2917ed39f458d0b384a26f9a26918d6f2390cd0d7b2a3be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22d6d28d78c911b2917ed39f458d0b384a26f9a26918d6f2390cd0d7b2a3be9->enter($__internal_d22d6d28d78c911b2917ed39f458d0b384a26f9a26918d6f2390cd0d7b2a3be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d22d6d28d78c911b2917ed39f458d0b384a26f9a26918d6f2390cd0d7b2a3be9->leave($__internal_d22d6d28d78c911b2917ed39f458d0b384a26f9a26918d6f2390cd0d7b2a3be9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d3d4183fca658d6a334a3f840303c9439ce588d9d0c38742361c1fdb1259552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3d4183fca658d6a334a3f840303c9439ce588d9d0c38742361c1fdb1259552->enter($__internal_4d3d4183fca658d6a334a3f840303c9439ce588d9d0c38742361c1fdb1259552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d3d4183fca658d6a334a3f840303c9439ce588d9d0c38742361c1fdb1259552->leave($__internal_4d3d4183fca658d6a334a3f840303c9439ce588d9d0c38742361c1fdb1259552_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1070e993849321f277c32968275945303fd30a5b7a0fed9d6cc3bf6dceb3fc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1070e993849321f277c32968275945303fd30a5b7a0fed9d6cc3bf6dceb3fc5f->enter($__internal_1070e993849321f277c32968275945303fd30a5b7a0fed9d6cc3bf6dceb3fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1070e993849321f277c32968275945303fd30a5b7a0fed9d6cc3bf6dceb3fc5f->leave($__internal_1070e993849321f277c32968275945303fd30a5b7a0fed9d6cc3bf6dceb3fc5f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5249457c70a0aaf2a46ff704e6da782c26ed7cc85d05b1410bbe3783933c9984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5249457c70a0aaf2a46ff704e6da782c26ed7cc85d05b1410bbe3783933c9984->enter($__internal_5249457c70a0aaf2a46ff704e6da782c26ed7cc85d05b1410bbe3783933c9984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5249457c70a0aaf2a46ff704e6da782c26ed7cc85d05b1410bbe3783933c9984->leave($__internal_5249457c70a0aaf2a46ff704e6da782c26ed7cc85d05b1410bbe3783933c9984_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd9d124fa4661152d3b151ddedc735110e98568ccb53aa75a90ff4aef6250524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9d124fa4661152d3b151ddedc735110e98568ccb53aa75a90ff4aef6250524->enter($__internal_fd9d124fa4661152d3b151ddedc735110e98568ccb53aa75a90ff4aef6250524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fd9d124fa4661152d3b151ddedc735110e98568ccb53aa75a90ff4aef6250524->leave($__internal_fd9d124fa4661152d3b151ddedc735110e98568ccb53aa75a90ff4aef6250524_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\PICharini\\app/Resources\\views/base.html.twig");
    }
}
