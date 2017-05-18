<?php

namespace Eshop\StockBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eshop\StockBundle\Entity\Commandes;
use Symfony\Component\HttpFoundation\Response;

class CommandeAdminController extends Controller
{
    public function commandesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository('EshopStockBundle:Commandes')->findAll();

        return $this->render('@EshopStock/Administration/Commande/AdminCommande.html.twig', array('commandes' => $commandes));
    }

    public function showFactureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EshopStockBundle:Commandes')->find($id);

        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('factures'));
        }

        $html = $this->renderView('@User/Default/facturePDF.html.twig', array('facture' => $facture));

        $html2pdf = $this->get('html2pdf_factory')->create();
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->pdf->SetAuthor('Bazzar');
        $html2pdf->pdf->SetTitle('Facture ' . $facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Bazzar');
        $html2pdf->pdf->SetKeywords('facture,Bazzar');
        $html2pdf->writeHTML($html);

//Output envoit le document PDF au navigateur internet
        return new Response($html2pdf->Output('facture.pdf'), 200, array('Content-Type' => 'application/pdf'));
    }
}
