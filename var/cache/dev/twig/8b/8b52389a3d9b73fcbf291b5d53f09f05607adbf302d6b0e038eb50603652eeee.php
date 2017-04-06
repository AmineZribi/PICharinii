<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_cb140d0fb8c4ee69b918f8903d941509863584a71aeddfb3826c19f266cc23c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b74df779468fa9d938c86ec9d01091a015fff0444f66d99fcc2c0db80397708e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74df779468fa9d938c86ec9d01091a015fff0444f66d99fcc2c0db80397708e->enter($__internal_b74df779468fa9d938c86ec9d01091a015fff0444f66d99fcc2c0db80397708e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74df779468fa9d938c86ec9d01091a015fff0444f66d99fcc2c0db80397708e->leave($__internal_b74df779468fa9d938c86ec9d01091a015fff0444f66d99fcc2c0db80397708e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63133693b56145d85419a35a0a6eb65669286f1dbd1981f8920615932ef84fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63133693b56145d85419a35a0a6eb65669286f1dbd1981f8920615932ef84fc5->enter($__internal_63133693b56145d85419a35a0a6eb65669286f1dbd1981f8920615932ef84fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_63133693b56145d85419a35a0a6eb65669286f1dbd1981f8920615932ef84fc5->leave($__internal_63133693b56145d85419a35a0a6eb65669286f1dbd1981f8920615932ef84fc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
