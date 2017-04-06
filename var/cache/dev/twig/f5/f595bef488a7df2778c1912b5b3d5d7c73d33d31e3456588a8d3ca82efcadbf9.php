<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0efb0f443f18e2cf78e9a8c674fb0a69f0d1a43a0331ca2f27cb7c5a2e9cecc9 extends Twig_Template
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
        $__internal_5cbf329f8f482b27edc8a744699ac0bf9a73b6a1ccb242b6dfbd598331a3efc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbf329f8f482b27edc8a744699ac0bf9a73b6a1ccb242b6dfbd598331a3efc9->enter($__internal_5cbf329f8f482b27edc8a744699ac0bf9a73b6a1ccb242b6dfbd598331a3efc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5cbf329f8f482b27edc8a744699ac0bf9a73b6a1ccb242b6dfbd598331a3efc9->leave($__internal_5cbf329f8f482b27edc8a744699ac0bf9a73b6a1ccb242b6dfbd598331a3efc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
