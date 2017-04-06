<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f9f61ad5a20ec2db40c8d157fcf12284b5c9ab4a5548b9addc305e24cc676f96 extends Twig_Template
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
        $__internal_f320a358866ecbf23f94307a8d949071a94a314e81b131282cd14a7f7d1d8e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f320a358866ecbf23f94307a8d949071a94a314e81b131282cd14a7f7d1d8e6c->enter($__internal_f320a358866ecbf23f94307a8d949071a94a314e81b131282cd14a7f7d1d8e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f320a358866ecbf23f94307a8d949071a94a314e81b131282cd14a7f7d1d8e6c->leave($__internal_f320a358866ecbf23f94307a8d949071a94a314e81b131282cd14a7f7d1d8e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\PICharini\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
