<?php

/* EshopStockBundle:Administration/Commande:AdminCommande.html.twig */
class __TwigTemplate_371804ba86b2e55e624e7f657f8b9412344d312399f5c8fdc5511b0dd10675b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:lc.html.twig", "EshopStockBundle:Administration/Commande:AdminCommande.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:lc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbdd9a684c270ffce4bee7c0985c0bf2a3d14a8178e7e94ca489c6a2dfa7b458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdd9a684c270ffce4bee7c0985c0bf2a3d14a8178e7e94ca489c6a2dfa7b458->enter($__internal_cbdd9a684c270ffce4bee7c0985c0bf2a3d14a8178e7e94ca489c6a2dfa7b458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EshopStockBundle:Administration/Commande:AdminCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbdd9a684c270ffce4bee7c0985c0bf2a3d14a8178e7e94ca489c6a2dfa7b458->leave($__internal_cbdd9a684c270ffce4bee7c0985c0bf2a3d14a8178e7e94ca489c6a2dfa7b458_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_c6788a570a923488fc4e559a052b81aafc19642f373f8ff83b6f8507d42250db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6788a570a923488fc4e559a052b81aafc19642f373f8ff83b6f8507d42250db->enter($__internal_c6788a570a923488fc4e559a052b81aafc19642f373f8ff83b6f8507d42250db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Commandes list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Date</th>
            <th>Référence</th>
            <th>Client</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d-m-Y h:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "utilisateur", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminFacture", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\">affiche</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
        
        $__internal_c6788a570a923488fc4e559a052b81aafc19642f373f8ff83b6f8507d42250db->leave($__internal_c6788a570a923488fc4e559a052b81aafc19642f373f8ff83b6f8507d42250db_prof);

    }

    public function getTemplateName()
    {
        return "EshopStockBundle:Administration/Commande:AdminCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:lc.html.twig\" %}

{% block container %}
    <h1>Commandes list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Date</th>
            <th>Référence</th>
            <th>Client</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}
            <tr>
                <td>{{ commande.date|date('d-m-Y h:i:s') }}</td>
                <td>{{ commande.reference }}</td>
                <td>{{ commande.utilisateur.username }}</td>
                <td>
                    <a href=\"{{ path('AdminFacture', { 'id' : commande.id }) }}\">affiche</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "EshopStockBundle:Administration/Commande:AdminCommande.html.twig", "C:\\wamp64\\www\\PICharini\\src\\Eshop\\StockBundle/Resources/views/Administration/Commande/AdminCommande.html.twig");
    }
}
