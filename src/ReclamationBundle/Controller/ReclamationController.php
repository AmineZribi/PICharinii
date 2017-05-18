<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Comment;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Entity\ReclamationSujetSearch;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Reclamation controller.
 *
 */
class ReclamationController extends Controller
{

    public function produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $prod = $em->getRepository('ReclamationBundle:Produit')->find($id);
        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));
        $whishlistclient = $em->getRepository('ReclamationBundle:Whishlist')->findByIdclient(array("idClient" => $user->getId(), "idProduit" => $id));


        if ($whishlistclient == null) {

            $existe = false;

        } else {
            $existe = true;


        }


        $name = $user->getUsername();

        $comment = new Comment();
        $form = $this->createForm('ReclamationBundle\Form\CommentType', $comment);
        $comments = $em->getRepository('ReclamationBundle:Comment')->findBy(array("idProduit" => $prod->getId()));


        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $date = (date('Y-m-d'));
            $heure = (date('h:i'));
            $comment->setIdClient($user);
            $comment->setIdProduit($prod);
            $comment->setRating(0);
            $date = $date . " " . $heure;
            $comment->setDateCommentaire($date);
            $em->persist($comment);
            $em->flush();

            return $this->render('ReclamationBundle:Front:produit.html.twig', array(
                'prod' => $prod,
                'name' => $name,
                'f' => $form->createView(),
                'c' => $comments,
                'existe' => $existe
            ));

        }

        return $this->render('ReclamationBundle:Front:produit.html.twig', array(
            'prod' => $prod,
            'name' => $name,
            'f' => $form->createView(),
            'c' => $comments,
            'existe' => $existe

        ));
    }


    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));
        $reclamations = $em->getRepository('ReclamationBundle:Reclamation')->findAll();
        $name = $user->getUsername();

        $reclamationSearch = new ReclamationSujetSearch();
        $form1 = $this->createForm('ReclamationBundle\Form\ReclamationSearchType', $reclamationSearch);
        $form1->handleRequest($request);

        if ($form1->isValid()) {


            $query = $this->getDoctrine()->getRepository('ReclamationBundle:Reclamation')->findBy(array('sujetreclamation'=>$form1->getData()));

            $res = $query->getResult();
        }
        return $this->render('ReclamationBundle:Default:DisplayReclamation.html.twig', array(
            'reclamations' => $reclamations,
            'name' => $name,
            'form' => $form1->createView(),
        ));
    }


    public function newAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reclamation();
        $form = $this->createForm('ReclamationBundle\Form\ReclamationType', $reclamation);
        $form->handleRequest($request);
        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));


        $name = $user->getUsername();
        $produit = $em->getRepository('ReclamationBundle:Produit')->find($id);
        //var_dump($id);exit();

        $reclamation->setIdclient($user);
        $reclamation->setProduit($produit);
        $date = (date('Y-m-d'));
        $reclamation->setDatereclamation($date);
        $reclamation->setStatusreclamation("En cours");

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($reclamation);
            $em->flush();

            //var_dump($reclamation->getIdreclamation());exit();

            return $this->redirectToRoute('produit', array('id' => $id));
        }

        return $this->render('ReclamationBundle:Front:new.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
            'name' => $name
        ));
    }

    public function showAction(Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('reclamation/showWhishlist.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function editAction(Request $request, Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);
        $editForm = $this->createForm('ReclamationBundle\Form\ReclamationType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_edit', array('idreclamation' => $reclamation->getIdreclamation()));
        }

        return $this->render('reclamation/editWhishlist.html.twig', array(
            'reclamation' => $reclamation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function deleteAction($idreclamation)
    {

        $em = $this->getDoctrine()->getManager();

        $reclamation = $em->getRepository('ReclamationBundle:Reclamation')->find($idreclamation);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('reclamation_display');
    }

    public function userDashAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find(array("id" => $this->getUser()->getId()));
        $name = $user->getUsername();

        $recl = $em->getRepository('ReclamationBundle:Reclamation')->findByIdclient(array("idclient" => $this->getUser()->getId()));
        return $this->render('ReclamationBundle:Front:userDash.html.twig', array(

            'name' => $name,
            'reclamations' => $recl

        ));
    }

    public function commentAction($idp)
    {
        $em = $this->getDoctrine()->getManager();


        return $this->render('ReclamationBundle:Front:userDash.html.twig', array());
    }

    public function detailsAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();


        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));
        $reclamation = $em->getRepository('ReclamationBundle:Reclamation')->find(array("idreclamation" => $id));
        $reclamationReponse = $em->getRepository('ReclamationBundle:Reponsereclamation')->findOneByIdreclamation(array("idreclamation" => $id));
        $name = $user->getUsername();
        $produit = $em->getRepository('ReclamationBundle:Produit')->find($id);

        return $this->render('ReclamationBundle:Default:detailReclamation1.html.twig', array(
            'reclamation' => $reclamation,
            'name' => $name,
            'produit' => $produit,
            'reponse' => $reclamationReponse
        ));

    }

    public function detailsUserAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();


        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));
        $reclamation = $em->getRepository('ReclamationBundle:Reclamation')->find(array("idreclamation" => $id));
        $reclamationReponse = $em->getRepository('ReclamationBundle:Reponsereclamation')->findOneByIdreclamation(array("idreclamation" => $id));


        $recl = $em->getRepository('ReclamationBundle:Reclamation')->findByIdclient(array("idclient" => $this->getUser()->getId()));


        $name = $user->getUsername();
        $produit = $em->getRepository('ReclamationBundle:Produit')->find($id);
        //var_dump($id);exit();


        return $this->render('ReclamationBundle:Front:detailReclamationClient.html.twig', array(
            'reclamation' => $reclamation,
            'name' => $name,
            'produit' => $produit,
            'reponse' => $reclamationReponse,
            'reclamations' => $recl
        ));

    }

    public function searchAction(Request $request, $sujet){

        $em = $this->getDoctrine()->getManager();
        $reclamationSearch = new ReclamationSujetSearch();
        $form = $this->createForm('ReclamationBundle\Form\ReclamationsearchType', $reclamationSearch);
        $form->handleRequest($request);
        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));


        if ($form->isValid()) {
            $query = $this->getDoctrine()->getRepository('ReclamationBundle:Reclamation')->search($form->getData());
            $results = $query->getResult();
        }

        return $this->render('ReclamationBundle:Default:DisplayReclamation.html.twig', array(
            'reclamations' => $results,
            'name' => $user->getUsername(),
            'form' => $form->createView(),
        ));
    }

    public function produitABloquerAction(){

        $em = $this->getDoctrine()->getManager();

        $prod = $em->getRepository('ReclamationBundle:Reclamation')->findByProduit(33);

        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));

        $name = $user->getUsername();

        $query = "SELECT u.produit_id from Reclamation u GROUP By u.produit_id HAVING COUNT(u.produit_id) >= 2";

        $statement = $em->getConnection()->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll();


        foreach($result as $r)
        {
            $prod=$prod = $em->getRepository('ReclamationBundle:Produit')->findById($r);


        }





        return $this->render('ReclamationBundle:Default:produitABloquer.html.twig', array(
            'prod' => $prod,
            'name' => $name,

        ));

}

    public function bloquerProduitAction($id){

        $em = $this->getDoctrine()->getManager();

        $prod = $em->getRepository('ReclamationBundle:Produit')->find($id);
        $em->remove($prod);
        $em->flush();
        return $this->redirectToRoute('produit_a_bloque');
    }




}

