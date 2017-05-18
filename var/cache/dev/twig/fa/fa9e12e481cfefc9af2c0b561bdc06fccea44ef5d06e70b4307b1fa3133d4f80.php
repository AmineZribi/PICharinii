<?php

/* reclamation/index.html.twig */
class __TwigTemplate_67fd566edfba6e30dd9513aff2aedb80ae217c400def3664326b2bf5a9b292b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e737980cc3c485709a4d497c0535ced23da8dfd36b7b20f133f17d9f79f1dc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e737980cc3c485709a4d497c0535ced23da8dfd36b7b20f133f17d9f79f1dc3f->enter($__internal_e737980cc3c485709a4d497c0535ced23da8dfd36b7b20f133f17d9f79f1dc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e737980cc3c485709a4d497c0535ced23da8dfd36b7b20f133f17d9f79f1dc3f->leave($__internal_e737980cc3c485709a4d497c0535ced23da8dfd36b7b20f133f17d9f79f1dc3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0dde1f66a56c179f600d088799baa932410990b29fc4cf5621c554940bf43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0dde1f66a56c179f600d088799baa932410990b29fc4cf5621c554940bf43d->enter($__internal_8a0dde1f66a56c179f600d088799baa932410990b29fc4cf5621c554940bf43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reclamations list</h1>

    <table>
        <thead>
            <tr>
                <th>Idreclamation</th>
                <th>Sujetreclamation</th>
                <th>Descriptionreclamation</th>
                <th>Datereclamation</th>
                <th>Statusreclamation</th>
                <th>Idclient</th>
                <th>Nomproduit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_show", array("idreclamation" => $this->getAttribute($context["reclamation"], "idreclamation", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "idreclamation", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "sujetreclamation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "descriptionreclamation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["reclamation"], "datereclamation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "datereclamation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "statusreclamation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "idclient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "nomproduit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_show", array("idreclamation" => $this->getAttribute($context["reclamation"], "idreclamation", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_edit", array("idreclamation" => $this->getAttribute($context["reclamation"], "idreclamation", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_new");
        echo "\">Create a new reclamation</a>
        </li>
    </ul>
";
        
        $__internal_8a0dde1f66a56c179f600d088799baa932410990b29fc4cf5621c554940bf43d->leave($__internal_8a0dde1f66a56c179f600d088799baa932410990b29fc4cf5621c554940bf43d_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  118 => 41,  106 => 35,  100 => 32,  93 => 28,  89 => 27,  85 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reclamations list</h1>

    <table>
        <thead>
            <tr>
                <th>Idreclamation</th>
                <th>Sujetreclamation</th>
                <th>Descriptionreclamation</th>
                <th>Datereclamation</th>
                <th>Statusreclamation</th>
                <th>Idclient</th>
                <th>Nomproduit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
                <td><a href=\"{{ path('reclamation_show', { 'idreclamation': reclamation.idreclamation }) }}\">{{ reclamation.idreclamation }}</a></td>
                <td>{{ reclamation.sujetreclamation }}</td>
                <td>{{ reclamation.descriptionreclamation }}</td>
                <td>{% if reclamation.datereclamation %}{{ reclamation.datereclamation|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ reclamation.statusreclamation }}</td>
                <td>{{ reclamation.idclient }}</td>
                <td>{{ reclamation.nomproduit }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('reclamation_show', { 'idreclamation': reclamation.idreclamation }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('reclamation_edit', { 'idreclamation': reclamation.idreclamation }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reclamation_new') }}\">Create a new reclamation</a>
        </li>
    </ul>
{% endblock %}
", "reclamation/index.html.twig", "C:\\wamp64\\www\\PICharini\\app\\Resources\\views\\reclamation\\index.html.twig");
    }
}
