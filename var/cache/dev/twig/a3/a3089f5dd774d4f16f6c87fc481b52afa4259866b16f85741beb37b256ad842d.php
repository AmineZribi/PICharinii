<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_dfb233124dfdc282dc5e61c58a3b7a813f8cdd4636483ccfa42dcab46cd33525 extends Twig_Template
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
        $__internal_1f6b8aee36a07bb48ce56a0fa377d06cbf17d0f7843df29bc78b7ced95286c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6b8aee36a07bb48ce56a0fa377d06cbf17d0f7843df29bc78b7ced95286c6b->enter($__internal_1f6b8aee36a07bb48ce56a0fa377d06cbf17d0f7843df29bc78b7ced95286c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_1f6b8aee36a07bb48ce56a0fa377d06cbf17d0f7843df29bc78b7ced95286c6b->leave($__internal_1f6b8aee36a07bb48ce56a0fa377d06cbf17d0f7843df29bc78b7ced95286c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
