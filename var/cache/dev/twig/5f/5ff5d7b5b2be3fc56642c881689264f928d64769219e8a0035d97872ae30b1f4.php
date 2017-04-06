<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_afb030c5a636c98633bbf37b59289dd0310727b2229c201879def74619b5f61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3945cabb89226f078703a238fcd8f4660b9bfef7464066ba208ea0ac5d1e7ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3945cabb89226f078703a238fcd8f4660b9bfef7464066ba208ea0ac5d1e7ff6->enter($__internal_3945cabb89226f078703a238fcd8f4660b9bfef7464066ba208ea0ac5d1e7ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 23
        echo "

";
        // line 26
        echo "

<form  method=\"post\" action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"  class=\"fos_user_registration_register form-signin\">

    ";
        // line 31
        echo "
    <div class=\"form-signin-heading text-center\">
        <h1 class=\"sign-title\">Registration</h1>
        <img src=\"images/login-logo.png\" alt=\"\"/>
    </div>


    <div class=\"login-wrap\">

        <p>Enter your personal details below</p>
        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Full name", "autofocus" => "")));
        echo "
        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "autofocus" => "")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email", "autofocus" => "")));
        echo "
        <br>
        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genre", array()), 'widget', array("attr" => array("class" => "radios")));
        echo "

        <br>


        <p> Enter your account details below</p>
        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username", "autofocus" => "")));
        echo "
        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "
        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirm Password")));
        echo "


        <button type=\"submit\"  class=\"btn btn-lg btn-login btn-block\">
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " <i class=\"fa fa-check\"></i>
        </button>

        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


        ";
        // line 95
        echo "    </div>

</form>
";
        
        $__internal_3945cabb89226f078703a238fcd8f4660b9bfef7464066ba208ea0ac5d1e7ff6->leave($__internal_3945cabb89226f078703a238fcd8f4660b9bfef7464066ba208ea0ac5d1e7ff6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 95,  90 => 60,  84 => 57,  77 => 53,  73 => 52,  69 => 51,  60 => 45,  55 => 43,  51 => 42,  47 => 41,  35 => 31,  30 => 28,  26 => 26,  22 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
{% trans_default_domain 'FOSUserBundle' %}
    <div class=\"form-signin-heading text-center\">
        <h1 class=\"sign-title\">Registration</h1>
        <img src=\"images/login-logo.png\" alt=\"\"/>
    </div>

    <div class=\"login-wrap\">
        <p>Enter your personal details below</p>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        {{ form_widget(form) }}
            {{ form_widget(form.fullname, { 'attr': {'class': 'form-control','placeholder':'Fullname'} }) }}
    </div>

    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}

_____________________

#}


{% trans_default_domain 'FOSUserBundle' %}


<form  method=\"post\" action=\"{{ path(\"fos_user_registration_register\") }}\"  class=\"fos_user_registration_register form-signin\">

    {#{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}#}

    <div class=\"form-signin-heading text-center\">
        <h1 class=\"sign-title\">Registration</h1>
        <img src=\"images/login-logo.png\" alt=\"\"/>
    </div>


    <div class=\"login-wrap\">

        <p>Enter your personal details below</p>
        {{ form_widget(form.fullname, { 'attr': {'class': 'form-control','placeholder':'Full name','autofocus':''} }) }}
        {{ form_widget(form.adresse, { 'attr': {'class': 'form-control','placeholder':'Address','autofocus':''} }) }}
        {{ form_widget(form.email, { 'attr': {'class': 'form-control','placeholder':'Email','autofocus':''} }) }}
        <br>
        {{ form_widget(form.genre, { 'attr': {'class': 'radios'} }) }}

        <br>


        <p> Enter your account details below</p>
        {{ form_widget(form.username, { 'attr': {'class': 'form-control','placeholder':'Username','autofocus':''} }) }}
        {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control','placeholder':'Password',} }) }}
        {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control','placeholder':'Confirm Password'} }) }}


        <button type=\"submit\"  class=\"btn btn-lg btn-login btn-block\">
            {{ 'registration.submit'|trans }} <i class=\"fa fa-check\"></i>
        </button>

        {{ form_rest(form) }}


        {#
        <input type=\"text\" autofocus=\"\" placeholder=\"Full Name\" class=\"form-control\">
        <input type=\"text\" autofocus=\"\" placeholder=\"Address\" class=\"form-control\">
        <input type=\"text\" autofocus=\"\" placeholder=\"Email\" class=\"form-control\">
        <input type=\"text\" autofocus=\"\" placeholder=\"City/Town\" class=\"form-control\">
        <div class=\"radios\">
            <label for=\"radio-01\" class=\"label_radio col-lg-6 col-sm-6\">
                <input type=\"radio\" checked=\"\" value=\"1\" id=\"radio-01\" name=\"sample-radio\"> Male
            </label>
            <label for=\"radio-02\" class=\"label_radio col-lg-6 col-sm-6\">
                <input type=\"radio\" value=\"1\" id=\"radio-02\" name=\"sample-radio\"> Female
            </label>
        </div>

        <p> Enter your account details below</p>
        <input type=\"text\" autofocus=\"\" placeholder=\"User Name\" class=\"form-control\">
        <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
        <input type=\"password\" placeholder=\"Re-type Password\" class=\"form-control\">
        <label class=\"checkbox\">
            <input type=\"checkbox\" value=\"agree this condition\"> I agree to the Terms of Service and Privacy Policy
        </label>
        <button type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn btn-lg btn-login btn-block\">
            <i class=\"fa fa-check\"></i>
        </button>

        <div class=\"registration\">
            Already Registered.
            <a href=\"login.html\" class=\"\">
                Login
            </a>
        </div>
#}
    </div>

</form>
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
