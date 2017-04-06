<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3a380419abe4db6e12f6616b65e18bc95def8345edf41f4710d140a54c8cd1a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_455c28155e908680e431e88b7cf22df72457beefe658557c6c4f069694d99fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455c28155e908680e431e88b7cf22df72457beefe658557c6c4f069694d99fee->enter($__internal_455c28155e908680e431e88b7cf22df72457beefe658557c6c4f069694d99fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455c28155e908680e431e88b7cf22df72457beefe658557c6c4f069694d99fee->leave($__internal_455c28155e908680e431e88b7cf22df72457beefe658557c6c4f069694d99fee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3cfbc38536f6af067be34b02bbf9e06a2d7900c7782bfe0bf5dbbd5e2997d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cfbc38536f6af067be34b02bbf9e06a2d7900c7782bfe0bf5dbbd5e2997d45->enter($__internal_d3cfbc38536f6af067be34b02bbf9e06a2d7900c7782bfe0bf5dbbd5e2997d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d3cfbc38536f6af067be34b02bbf9e06a2d7900c7782bfe0bf5dbbd5e2997d45->leave($__internal_d3cfbc38536f6af067be34b02bbf9e06a2d7900c7782bfe0bf5dbbd5e2997d45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
