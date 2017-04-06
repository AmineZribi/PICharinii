<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_809d180735ddedc8e8ef6d0b887e949f4fc1c1f78f9d1437dc33f384927762f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_f7f44918f59b1b503c98a1680108b587e4825e2eb7722335124adb32ca4305dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f44918f59b1b503c98a1680108b587e4825e2eb7722335124adb32ca4305dd->enter($__internal_f7f44918f59b1b503c98a1680108b587e4825e2eb7722335124adb32ca4305dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f44918f59b1b503c98a1680108b587e4825e2eb7722335124adb32ca4305dd->leave($__internal_f7f44918f59b1b503c98a1680108b587e4825e2eb7722335124adb32ca4305dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e93ce67ca27a60f10800603be26ba940a9d869d61fe41b48c5a09304cbe601c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e93ce67ca27a60f10800603be26ba940a9d869d61fe41b48c5a09304cbe601c->enter($__internal_1e93ce67ca27a60f10800603be26ba940a9d869d61fe41b48c5a09304cbe601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1e93ce67ca27a60f10800603be26ba940a9d869d61fe41b48c5a09304cbe601c->leave($__internal_1e93ce67ca27a60f10800603be26ba940a9d869d61fe41b48c5a09304cbe601c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
