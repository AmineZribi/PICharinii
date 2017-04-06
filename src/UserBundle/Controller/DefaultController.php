<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homeAction()
    {


        if ($this->getUser()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('UserBundle:User')->find(array("id" => $this->getUser()->getId()));
            $name = $user->getUsername();
        }else{
            $name = "Guest";
            return $this->render('UserBundle:Default:indexGuest.html.twig',array("name" => $name));
        }


        return $this->render('UserBundle:Default:index.html.twig',array("name" => $name));
    }


    public function homeAdminAction(){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find(array("id" => $this->getUser()->getId()));
        $name = $user->getUsername();
        return $this->render('UserBundle:Default:indexAdmin.html.twig',array("name" => $name));

    }
}
