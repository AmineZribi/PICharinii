<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Entity\Produit;
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
        $user = $em->getRepository('UserBundle:User')->find(array("id" => $this->getUser()->getId()));
        $name = $user->getUsername();
        //var_dump($reclamations);exit();

        return $this->render('ReclamationBundle:Front:Produit.html.twig', array(
            'prod' => $prod,
            'name' => $name

        ));
    }


    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $reclamations = $em->getRepository('ReclamationBundle:Reclamation')->findAll();
        return $this->render('ReclamationBundle:Default:DisplayReclamation.html.twig', array(
            'reclamations' => $reclamations,
            'name' =>$user
        ));
    }


    public function newAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reclamation();
        $form = $this->createForm('ReclamationBundle\Form\ReclamationType', $reclamation);
        $form->handleRequest($request);
        $user = $this->getUser();

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

        return $this->render('reclamation/show.html.twig', array(
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

        return $this->render('reclamation/edit.html.twig', array(
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

        $recl=$em->getRepository('ReclamationBundle:Reclamation')->findBy(array("idclient" => $this->getUser()->getId()));
        return $this->render('ReclamationBundle:Front:userDash.html.twig', array(

            'name' => $name,
            'reclamations'=>$recl

        ));
    }
}
