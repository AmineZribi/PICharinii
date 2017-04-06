<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_8628c157d99690f4957cb38783feff96e8b5b87e588000c8d233953619365fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_832313251483c2138dc999199c0fc2f9626d1f4e739d1354a9a2e9e1a8ac0854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832313251483c2138dc999199c0fc2f9626d1f4e739d1354a9a2e9e1a8ac0854->enter($__internal_832313251483c2138dc999199c0fc2f9626d1f4e739d1354a9a2e9e1a8ac0854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_832313251483c2138dc999199c0fc2f9626d1f4e739d1354a9a2e9e1a8ac0854->leave($__internal_832313251483c2138dc999199c0fc2f9626d1f4e739d1354a9a2e9e1a8ac0854_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e14491f747d9ded9e1d362c8b7991b18bf4d8cdea2c475797853f7114ab1f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e14491f747d9ded9e1d362c8b7991b18bf4d8cdea2c475797853f7114ab1f2b->enter($__internal_0e14491f747d9ded9e1d362c8b7991b18bf4d8cdea2c475797853f7114ab1f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0e14491f747d9ded9e1d362c8b7991b18bf4d8cdea2c475797853f7114ab1f2b->leave($__internal_0e14491f747d9ded9e1d362c8b7991b18bf4d8cdea2c475797853f7114ab1f2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
