<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9d14c3843a9b49100fc1c32dc7cd1223c16c1fcf1ba39be6e14ea41e72cbd104 extends Twig_Template
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
        $__internal_1233f709f0ea5e86b333d7fdfb723c1b0b4cf262f0e2ab1058f368f90ccc7535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1233f709f0ea5e86b333d7fdfb723c1b0b4cf262f0e2ab1058f368f90ccc7535->enter($__internal_1233f709f0ea5e86b333d7fdfb723c1b0b4cf262f0e2ab1058f368f90ccc7535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1233f709f0ea5e86b333d7fdfb723c1b0b4cf262f0e2ab1058f368f90ccc7535->leave($__internal_1233f709f0ea5e86b333d7fdfb723c1b0b4cf262f0e2ab1058f368f90ccc7535_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
