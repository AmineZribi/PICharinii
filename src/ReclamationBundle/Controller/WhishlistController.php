<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Whishlist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Whishlist controller.
 *
 */
class WhishlistController extends Controller
{
    /**
     * Lists all whishlist entities.
     *
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recl = $em->getRepository('ReclamationBundle:Reclamation')->findByIdclient(array("idclient" => $this->getUser()->getId()));


        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));

        $whishlists = $em->getRepository('ReclamationBundle:Whishlist')->findAll();

        return $this->render('ReclamationBundle:Front:indexWhishlist.html.twig', array(
            'whishlists' => $whishlists,
            'name' => $user->getUsername(),
            'reclamations' => $recl

        ));
    }

    /**
     * Creates a new whishlist entity.
     *
     */
    public function newAction(Request $request, $id)
    {
        $whishlist = new Whishlist();

        $em = $this->getDoctrine()->getManager();


        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));


        $name = $user->getUsername();
        $produit = $em->getRepository('ReclamationBundle:Produit')->find($id);

        $whishlist->setIdproduit($produit);
        $whishlist->setIdclient($user);


        $em = $this->getDoctrine()->getManager();
        $em->persist($whishlist);
        $em->flush();

        return $this->redirectToRoute('produit', array('id' => $id));

    }

    /**
     * Finds and displays a whishlist entity.
     *
     */
    public function showAction(Whishlist $whishlist)
    {
        $deleteForm = $this->createDeleteForm($whishlist);

        return $this->render('ReclamationBundle:Front:showWhishlist.html.twig', array(
            'whishlist' => $whishlist,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing whishlist entity.
     *
     */


    /**
     * Deletes a whishlist entity.
     *
     */
    public function deleteAction(Request $request, Whishlist $whishlist)
    {
        $form = $this->createDeleteForm($whishlist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($whishlist);
            $em->flush();
        }

        return $this->redirectToRoute('whishlist_index');
    }

    /**
     * Creates a form to delete a whishlist entity.
     *
     * @param Whishlist $whishlist The whishlist entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Whishlist $whishlist)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('whishlist_delete', array('id' => $whishlist->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
