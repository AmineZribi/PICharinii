<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b6ce0fc994129b034c49f266cf7a035dba0d968f80884f3aa0703d7b3c0902c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f06b7e0708ad9b0a8530a2be7829f5525352971cb4e32fd6ef378c3152756a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06b7e0708ad9b0a8530a2be7829f5525352971cb4e32fd6ef378c3152756a3f->enter($__internal_f06b7e0708ad9b0a8530a2be7829f5525352971cb4e32fd6ef378c3152756a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"ThemeBucket\">
    <link rel=\"shortcut icon\" href=\"#\" type=\"image/png\">

    <title>Login</title>

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body class=\"login-body\">
";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>

";
        
        $__internal_f06b7e0708ad9b0a8530a2be7829f5525352971cb4e32fd6ef378c3152756a3f->leave($__internal_f06b7e0708ad9b0a8530a2be7829f5525352971cb4e32fd6ef378c3152756a3f_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_757e79771c877748f711ba5ba4d6f932475e939f6239cf827559a1f49f36da02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757e79771c877748f711ba5ba4d6f932475e939f6239cf827559a1f49f36da02->enter($__internal_757e79771c877748f711ba5ba4d6f932475e939f6239cf827559a1f49f36da02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_757e79771c877748f711ba5ba4d6f932475e939f6239cf827559a1f49f36da02->leave($__internal_757e79771c877748f711ba5ba4d6f932475e939f6239cf827559a1f49f36da02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  79 => 35,  75 => 34,  71 => 33,  62 => 26,  60 => 24,  52 => 19,  48 => 18,  41 => 14,  37 => 13,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"ThemeBucket\">
    <link rel=\"shortcut icon\" href=\"#\" type=\"image/png\">

    <title>Login</title>

    <link href=\"{{ asset ('css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css')}}\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset ('js/html5shiv.js')}}\"></script>
    <script src=\"{{ asset ('js/respond.min.js')}}\"></script>
    <![endif]-->
</head>

<body class=\"login-body\">
{% block fos_user_content %}
{% endblock fos_user_content %}




<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"{{ asset ('js/jquery-1.10.2.min.js')}}\"></script>
<script src=\"{{ asset ('js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset ('js/modernizr.min.js')}}\"></script>

</body>
</html>

", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\PICharini\\src\\UserBundle/Resources/views/layout.html.twig");
    }
}
