<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_1219e881e0b558da3b5054538b772530bd0e7f815c2d82fea66b7c92be2f4f84 extends Twig_Template
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
        $__internal_d974115990175e5d2be2d3d89faa2869b14ccde316191c78a34a853fabdc4129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d974115990175e5d2be2d3d89faa2869b14ccde316191c78a34a853fabdc4129->enter($__internal_d974115990175e5d2be2d3d89faa2869b14ccde316191c78a34a853fabdc4129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 35
        echo "
";
        // line 36
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 37
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 39
        echo "

<div class=\"container\">

    <form class=\"form-signin\" action=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 44
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 45
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 47
        echo "        <div class=\"form-signin-heading text-center\">
            <h1 class=\"sign-title\">Sign In</h1>
            <img src=\"images/login-logo.png\" alt=\"\"/>
        </div>

        <div class=\"login-wrap\">
            <!-- <input type=\"text\" class=\"form-control\" placeholder=\"User ID\" autofocus>-->
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  placeholder=\"User ID\" autofocus />
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"  placeholder=\"Password\" />

            <button class=\"btn btn-lg btn-login btn-block\" id=\"_submit\" type=\"submit\"  name=\"_submit\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                <i class=\"fa fa-check\"></i>
            </button>

            <div class=\"registration\">
                Not a member yet?
                <a class=\"\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
                    Signup
                </a>
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Remember me


                <span class=\"pull-right\">
                    <!--<a data-toggle=\"modal\" href=\"#myModal\"> Forgot Password?</a>-->
                    <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Forgot password ?</a>
                </span>
            </label>

        </div>

        <!-- Modal -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Forgot Password ?</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">

                    </div>
                    <div class=\"modal-footer\">
                        <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                        <button class=\"btn btn-primary\" type=\"button\">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>
";
        
        $__internal_d974115990175e5d2be2d3d89faa2869b14ccde316191c78a34a853fabdc4129->leave($__internal_d974115990175e5d2be2d3d89faa2869b14ccde316191c78a34a853fabdc4129_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 73,  75 => 63,  66 => 57,  60 => 54,  51 => 47,  45 => 45,  43 => 44,  39 => 43,  33 => 39,  27 => 37,  25 => 36,  22 => 35,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />


</form>






-------
#}
{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


<div class=\"container\">

    <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
        <div class=\"form-signin-heading text-center\">
            <h1 class=\"sign-title\">Sign In</h1>
            <img src=\"images/login-logo.png\" alt=\"\"/>
        </div>

        <div class=\"login-wrap\">
            <!-- <input type=\"text\" class=\"form-control\" placeholder=\"User ID\" autofocus>-->
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"  placeholder=\"User ID\" autofocus />
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"  placeholder=\"Password\" />

            <button class=\"btn btn-lg btn-login btn-block\" id=\"_submit\" type=\"submit\"  name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\">
                <i class=\"fa fa-check\"></i>
            </button>

            <div class=\"registration\">
                Not a member yet?
                <a class=\"\" href=\"{{ path('fos_user_registration_register') }}\">
                    Signup
                </a>
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Remember me


                <span class=\"pull-right\">
                    <!--<a data-toggle=\"modal\" href=\"#myModal\"> Forgot Password?</a>-->
                    <a href=\"{{ path('fos_user_resetting_request') }}\">Forgot password ?</a>
                </span>
            </label>

        </div>

        <!-- Modal -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Forgot Password ?</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">

                    </div>
                    <div class=\"modal-footer\">
                        <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                        <button class=\"btn btn-primary\" type=\"button\">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>
", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
