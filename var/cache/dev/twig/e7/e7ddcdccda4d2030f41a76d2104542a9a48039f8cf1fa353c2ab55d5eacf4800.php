<?php

/* base.html.twig */
class __TwigTemplate_17474295d0ca9c737bdcbd954ad8d3e2feed116bff53dd82871d3f754cb1e41d extends Twig_Template
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
        $__internal_dcbd3c3e41a270cdfb20a6c5d684676c70de96f31c68453d78184aac603fd102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbd3c3e41a270cdfb20a6c5d684676c70de96f31c68453d78184aac603fd102->enter($__internal_dcbd3c3e41a270cdfb20a6c5d684676c70de96f31c68453d78184aac603fd102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dcbd3c3e41a270cdfb20a6c5d684676c70de96f31c68453d78184aac603fd102->leave($__internal_dcbd3c3e41a270cdfb20a6c5d684676c70de96f31c68453d78184aac603fd102_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c1217b6ea6049ab18d9488929c132968cea14c90c94162bded054b0428f3caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1217b6ea6049ab18d9488929c132968cea14c90c94162bded054b0428f3caa->enter($__internal_2c1217b6ea6049ab18d9488929c132968cea14c90c94162bded054b0428f3caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c1217b6ea6049ab18d9488929c132968cea14c90c94162bded054b0428f3caa->leave($__internal_2c1217b6ea6049ab18d9488929c132968cea14c90c94162bded054b0428f3caa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de8bcddcc6c44bdd5c5aac2c149892498a4ded7fd0c963988098dfdff8161111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8bcddcc6c44bdd5c5aac2c149892498a4ded7fd0c963988098dfdff8161111->enter($__internal_de8bcddcc6c44bdd5c5aac2c149892498a4ded7fd0c963988098dfdff8161111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_de8bcddcc6c44bdd5c5aac2c149892498a4ded7fd0c963988098dfdff8161111->leave($__internal_de8bcddcc6c44bdd5c5aac2c149892498a4ded7fd0c963988098dfdff8161111_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ce173d19f47debca1616df2e176059587fc5d73ffbdf869c4f5df8f13f84e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce173d19f47debca1616df2e176059587fc5d73ffbdf869c4f5df8f13f84e1b->enter($__internal_9ce173d19f47debca1616df2e176059587fc5d73ffbdf869c4f5df8f13f84e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ce173d19f47debca1616df2e176059587fc5d73ffbdf869c4f5df8f13f84e1b->leave($__internal_9ce173d19f47debca1616df2e176059587fc5d73ffbdf869c4f5df8f13f84e1b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_793359dc3bf7578877a2794f8e2d56aeb99486cc2dde360fc38034fe6ad3c41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793359dc3bf7578877a2794f8e2d56aeb99486cc2dde360fc38034fe6ad3c41b->enter($__internal_793359dc3bf7578877a2794f8e2d56aeb99486cc2dde360fc38034fe6ad3c41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_793359dc3bf7578877a2794f8e2d56aeb99486cc2dde360fc38034fe6ad3c41b->leave($__internal_793359dc3bf7578877a2794f8e2d56aeb99486cc2dde360fc38034fe6ad3c41b_prof);

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
