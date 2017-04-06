<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d493eda50e983016a33921b1d6cca9eb4fd3c4986862226447ee4083a31c825c extends Twig_Template
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
        $__internal_7076774092a7943c4aaa8af8d662cfe38c07441f2f5f6938dbc05202ed83e5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7076774092a7943c4aaa8af8d662cfe38c07441f2f5f6938dbc05202ed83e5e7->enter($__internal_7076774092a7943c4aaa8af8d662cfe38c07441f2f5f6938dbc05202ed83e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7076774092a7943c4aaa8af8d662cfe38c07441f2f5f6938dbc05202ed83e5e7->leave($__internal_7076774092a7943c4aaa8af8d662cfe38c07441f2f5f6938dbc05202ed83e5e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
