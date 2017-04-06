<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_abea5e5a2aa65d08097d5ec34c5d60d37d733c9320a0ee54fc7d8109ac6c1c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_c653e2bface0c1aca2780c07bc6856235c8695f1901becd387e190d246d1022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c653e2bface0c1aca2780c07bc6856235c8695f1901becd387e190d246d1022d->enter($__internal_c653e2bface0c1aca2780c07bc6856235c8695f1901becd387e190d246d1022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c653e2bface0c1aca2780c07bc6856235c8695f1901becd387e190d246d1022d->leave($__internal_c653e2bface0c1aca2780c07bc6856235c8695f1901becd387e190d246d1022d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5a93b7aa1690868fff682dc11e76d4fa9d2fc2d5a077b8cc51ae861b3886b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a93b7aa1690868fff682dc11e76d4fa9d2fc2d5a077b8cc51ae861b3886b70->enter($__internal_c5a93b7aa1690868fff682dc11e76d4fa9d2fc2d5a077b8cc51ae861b3886b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c5a93b7aa1690868fff682dc11e76d4fa9d2fc2d5a077b8cc51ae861b3886b70->leave($__internal_c5a93b7aa1690868fff682dc11e76d4fa9d2fc2d5a077b8cc51ae861b3886b70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
