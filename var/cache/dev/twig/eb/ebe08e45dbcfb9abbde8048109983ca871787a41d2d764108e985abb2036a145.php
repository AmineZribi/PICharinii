<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8c1852051c51889d58e8d84864177fc05f879626f27bd9210e907831d4579d00 extends Twig_Template
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
        $__internal_dc703516cc3715a140d516845b407a6ff60fb93b3d700bdbbe16068e7e053a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc703516cc3715a140d516845b407a6ff60fb93b3d700bdbbe16068e7e053a4b->enter($__internal_dc703516cc3715a140d516845b407a6ff60fb93b3d700bdbbe16068e7e053a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dc703516cc3715a140d516845b407a6ff60fb93b3d700bdbbe16068e7e053a4b->leave($__internal_dc703516cc3715a140d516845b407a6ff60fb93b3d700bdbbe16068e7e053a4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
