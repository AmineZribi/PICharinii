<?php
/**
 * Created by PhpStorm.
 * User: 2017
 * Date: 04/02/2017
 * Time: 07:56
 */

namespace Eshop\StockBundle\Controller;

use Eshop\StockBundle\Entity\Produit;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Eshop\StockBundle\Form\ProduitType;

class ProduitController extends Controller
{
    public function listprodAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository("EshopStockBundle:Produit")->findAll();
        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));
        $name = $user->getUsername();


        return $this->render("EshopStockBundle:Produit:listprod.html.twig",array(
            'produits'=>$produits,'name' => $name
        ));



    }





    public function listprodfAction(Request $request)
    {
        $session = $request->getSession();
        $em=$this->getDoctrine()->getManager();
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        $produits=$em->getRepository("EshopStockBundle:Produit")->findAll();

        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));
        $name = $user->getUsername();

        return $this->render("EshopStockBundle:Produit:listprodf.html.twig",array(
            'produits'=>$produits,
            'panier'=>$panier,
            'name' => $name
        ));

    }


}