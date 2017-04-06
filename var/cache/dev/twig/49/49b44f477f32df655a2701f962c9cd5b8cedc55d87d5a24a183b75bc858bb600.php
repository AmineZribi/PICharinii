<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_86d67b331b1b9a0a06c1d5f2e333907298993cabd7ddd3ab8315b1615d4f5a90 extends Twig_Template
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
        $__internal_cea3fbe74fd000372d15f4f5bbc47dafc35d172c5a78a1f4f22da2f55d420f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea3fbe74fd000372d15f4f5bbc47dafc35d172c5a78a1f4f22da2f55d420f8b->enter($__internal_cea3fbe74fd000372d15f4f5bbc47dafc35d172c5a78a1f4f22da2f55d420f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cea3fbe74fd000372d15f4f5bbc47dafc35d172c5a78a1f4f22da2f55d420f8b->leave($__internal_cea3fbe74fd000372d15f4f5bbc47dafc35d172c5a78a1f4f22da2f55d420f8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
