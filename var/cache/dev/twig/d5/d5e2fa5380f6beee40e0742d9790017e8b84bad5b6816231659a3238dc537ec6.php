<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7827fc7e8b49351501fe4c67b3aac12e4da8d26c7ca77d47d0a7514f6ea11468 extends Twig_Template
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
        $__internal_5a00d88a5bece75ff792a251d97bf08ff61400335dee64e7d99648723f92651b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a00d88a5bece75ff792a251d97bf08ff61400335dee64e7d99648723f92651b->enter($__internal_5a00d88a5bece75ff792a251d97bf08ff61400335dee64e7d99648723f92651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_5a00d88a5bece75ff792a251d97bf08ff61400335dee64e7d99648723f92651b->leave($__internal_5a00d88a5bece75ff792a251d97bf08ff61400335dee64e7d99648723f92651b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
