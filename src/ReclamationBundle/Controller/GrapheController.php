<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Comment;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Entity\Produit;
use ReclamationBundle\Entity\ReclamationSujetSearch;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use blackknight467\StarRatingBundle;
use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * Reclamation controller.
 *
 */
class GrapheController extends Controller
{

    public function chartLineAction()

    {

        $em = $this->container->get('doctrine')->getEntityManager();

        $classes = $em->getRepository('ReclamationBundle:Reclamation')->findAll();

        $tab = array();

        $categories = array();

        foreach ($classes as $classe) {

            array_push($tab, $classe->getProduit());

            array_push($categories, $classe->getIdreclamation());

        }

// Chart

        $series = array(

            array("name" => "Produit", "data" => $tab)

        );

        $ob = new Highchart();

        $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe

        $ob->title->text('Nombre de reclamation par produit');

        $ob->xAxis->title(array('text' => "Classe"));

        $ob->yAxis->title(array('text' => "Nombre de reclamation"));

        $ob->xAxis->categories($categories);

        $ob->series($series);

        return $this->render('ReclamationBundle:Default:Line.html.twig', array('chart' => $ob));
    }
}

