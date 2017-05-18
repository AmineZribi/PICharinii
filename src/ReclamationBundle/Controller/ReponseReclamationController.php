<?php
/**
 * Created by PhpStorm.
 * User: émine
 * Date: 08/04/2017
 * Time: 23:05
 */

namespace ReclamationBundle\Controller;


use ReclamationBundle\Entity\Comment;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Entity\Produit;
use ReclamationBundle\Entity\Reponsereclamation;
use ReclamationBundle\Form\ReponseReclamationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReponseReclamationController extends Controller
{

    public function createAction(Request $request, $idreclamation)
    {
        $em = $this->getDoctrine()->getManager();
        $reponse = new Reponsereclamation();
        $form = $this->createForm('ReclamationBundle\Form\ReponseReclamationForm', $reponse);
        $form->handleRequest($request);
        $user = $em->getRepository('ReclamationBundle:Utilisateur')->find(array("id" => $this->getUser()->getId()));


        $name = $user->getUsername();
        $reclamation = $em->getRepository('ReclamationBundle:Reclamation')->find($idreclamation);


        $reponse->setIdadmin($user);
        $reponse->setIdreclamation($reclamation);
        $reclamation->setStatusreclamation("Traitée");

        if ($form->isSubmitted() && $form->isValid()) {



            $em->persist($reponse);
            $em->flush();



            //var_dump($reclamation->getIdreclamation());exit();

            return $this->redirectToRoute('reclamation_display');
        }

        return $this->render('ReclamationBundle:Default:createReponseReclamation.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
            'name' => $name
        ));

    }



    }