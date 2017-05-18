<?php

/* @EshopStock/Panier/Validation.html.twig */
class __TwigTemplate_e83111a4bb35e6b879c1769ba39bc2ce098019c399dfbe0e57ddb3121d719065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:panier2.html.twig", "@EshopStock/Panier/Validation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:panier2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0bdf31d918633e60c53a06d39f255ed6c25cf8b756608491fc5274209328827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bdf31d918633e60c53a06d39f255ed6c25cf8b756608491fc5274209328827->enter($__internal_d0bdf31d918633e60c53a06d39f255ed6c25cf8b756608491fc5274209328827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EshopStock/Panier/Validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0bdf31d918633e60c53a06d39f255ed6c25cf8b756608491fc5274209328827->leave($__internal_d0bdf31d918633e60c53a06d39f255ed6c25cf8b756608491fc5274209328827_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c98d9be467b5ca5f43f316122198913bdcf8167da87eeb63df38afd2d9e6817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c98d9be467b5ca5f43f316122198913bdcf8167da87eeb63df38afd2d9e6817->enter($__internal_7c98d9be467b5ca5f43f316122198913bdcf8167da87eeb63df38afd2d9e6817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span9\">
                <center><h2>Passer Commande </h2></center>
                <br>
                <br>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 21
            echo "                        <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </tbody>
                </table>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>



                    <dt>Total TTC :</dt><dd>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</dd>
                </dl>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de livraison</h4></dt>
                        <dt>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
                    </dl>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de facturation</h4></dt>
                        <dt>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                    </dl>
                </div>
                <div class=\"clearfix\"></div>
                <form action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\"/>
                <input name=\"prix\" type=\"hidden\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\" />
                <input name=\"date\" type=\"hidden\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
                </form>

                <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
";
        
        $__internal_7c98d9be467b5ca5f43f316122198913bdcf8167da87eeb63df38afd2d9e6817->leave($__internal_7c98d9be467b5ca5f43f316122198913bdcf8167da87eeb63df38afd2d9e6817_prof);

    }

    public function getTemplateName()
    {
        return "@EshopStock/Panier/Validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  163 => 61,  159 => 60,  155 => 59,  144 => 55,  140 => 54,  134 => 53,  120 => 46,  116 => 45,  110 => 44,  101 => 38,  94 => 34,  88 => 30,  79 => 27,  75 => 26,  70 => 24,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:panier2.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span9\">
                <center><h2>Passer Commande </h2></center>
                <br>
                <br>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for produit in commande.commande.produit %}
                        <tr>
                            <td>{{ produit.reference }}</td>
                            <td>
                                {{ produit.quantite }}
                            </td>
                            <td>{{ produit.prixHT }} €</td>
                            <td>{{ produit.prixHT * produit.quantite }} €</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>{{ commande.commande.prixHT }} €</dd>



                    <dt>Total TTC :</dt><dd>{{ commande.commande.prixTTC }} €</dd>
                </dl>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de livraison</h4></dt>
                        <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>
                        <dt>{{ commande.commande.livraison.adresse }}</dt>
                        <dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>
                    </dl>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de facturation</h4></dt>
                        <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>
                        <dt>{{ commande.commande.facturation.adresse }}</dt>
                        <dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>
                    </dl>
                </div>
                <div class=\"clearfix\"></div>
                <form action=\"{{ path('validationCommande', { 'id' : commande.id }) }}\" method=\"POST\"/>
                <input name=\"prix\" type=\"hidden\" value=\"{{ commande.commande.prixTTC }}\" />
                <input name=\"date\" type=\"hidden\" value=\"{{ commande.date|date('dmyhms') }}\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
                </form>

                <a href=\"{{ path('Livraison') }}\" class=\"btn btn-primary\">retour</a>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
{% endblock %}", "@EshopStock/Panier/Validation.html.twig", "C:\\wamp64\\www\\PICharini\\src\\Eshop\\StockBundle\\Resources\\views\\Panier\\Validation.html.twig");
    }
}
