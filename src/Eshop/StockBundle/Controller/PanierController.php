<?php

namespace Eshop\StockBundle\Controller;


use Eshop\StockBundle\Entity\UtilisateursAdresses;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Eshop\StockBundle\Form\UtilisateursAdressesType;
use Symfony\Component\HttpFoundation\Request;
use Eshop\StockBundle\Entity\Produit;
use Eshop\StockBundle\Entity\Commandes;

class PanierController extends Controller
{

    public function panierAction(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier', array());

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EshopStockBundle:Produit')->findArray(array_keys($session->get('panier')));

        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));
        $name = $user->getUsername();

        return $this->render('@EshopStock/Panier/lpanier.html.twig', array('name' => $name, 'produits' => $produits,
            'panier' => $session->get('panier')));
    }

    public function ajouterAction(Request $request,$id)
    {
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
        $panier = $session->get('panier');
        if (array_key_exists($id,$panier)) {
            if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success', 'Quantité modifié avec succès');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'articel ajouté'
                );
                $panier[$id] = 1;
            $this->get('session')->getFlashBag()->add('success', 'Article ajouté avec succès');
        }
        $session->set('panier', $panier);
        return $this->redirect($this->generateUrl('panier'));
    }


    public function supprimerAction(Request $request,$id)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            unset($panier[$id]);
            $session->set('panier', $panier);
            $this->get('session')->getFlashBag()->add('success', 'Article supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('panier'));
    }

    public function livraisonAction(Request $request)
    {
        $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser();
       // $em=$this->getDoctrine()->getManager();

        //$utilisateur = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));

        $entity = new UtilisateursAdresses();

        $form = $this->createForm(UtilisateursAdressesType::class, $entity);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('Livraison'));
            }
        }
        return $this->render('@EshopStock/Panier/Livraison.html.twig', array('utilisateur' => $utilisateur,

            'forme' => $form->createView()));
    }
    public function setLivraisonOnSession(Request  $request)
    {
        $session = $request->getSession();

        if (!$session->has('adresse')) $session->set('adresse',array());
        $adresse = $session->get('adresse');

        if ($request->get('livraison') != null && $request->get('facturation') != null)
        {
            $adresse['livraison'] = $request->get('livraison');
            $adresse['facturation'] = $request->get('facturation');
        } else {
            return $this->redirect($this->generateUrl('validation'));
        }

        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('validation'));
    }

    public function adresseSuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EshopStockBundle:UtilisateursAdresses')->find($id);

        if ($this->container->get('security.token_storage')->getToken()->getUser() != $entity->getUtilisateur() || !$entity)
            return $this->redirect ($this->generateUrl ('Livraison'));

        $em->remove($entity);
        $em->flush();

        return $this->redirect ($this->generateUrl ('Livraison'));
    }

    public function validationAction(Request $request)
    {
        if ($request->isMethod('POST'))
            $this->setLivraisonOnSession($request);
        $em = $this->getDoctrine()->getManager();
        $prepareCommande = $this->forward('EshopStockBundle:Commande:prepareCommande');
        $commande = $em->getRepository('EshopStockBundle:Commandes')->find($prepareCommande->getContent());

        return $this->render('@EshopStock/Panier/Validation.html.twig', array('commande' => $commande));
    }

}
