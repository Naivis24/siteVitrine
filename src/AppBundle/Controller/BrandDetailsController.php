<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;
use AppBundle\Entity\BrandRecommande;



class BrandDetailsController extends Controller
{
    /**
     *
     * Cette fonction permet de retourner toutes les infos d'une marque à partir de son nom
     * Retourne également la liste des marques pour permettre de voir les marques concurentes
     *
     * @param $marque : nom de la marque dont on veut les détails
     * @return Response : brand => détails d'une marque, brands => liste des marques
     */
    public function getOneBrandAction($marque){
        $em = $this->getDoctrine()->getManager();

        $brand = $em->getRepository('AppBundle:Brand')->findOneByName($marque);

        return $this->render('AppBundle::marque_details.html.twig', array(
            'brand' => $brand,
        ));
    }

    public function setBrandCompeting($idBrand, $idRecommande){
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('AppBundle:Brand')->find($idBrand);
        $brandrec = $em->getRepository('AppBundle:Brand')->find($idRecommande);

        $brand->addIdrecommande($brandrec);

        $em->persist($brand);
    }

    public function triTableau($tabB, $tabR){
        $em = $this->getDoctrine()->getManager();
        $x = count($tabB);

        for($i=0; $i<$x; $i++){
            $this->setBrandCompeting($tabB[$i], $tabR[$i]);
        }

        $em->flush();

        return $this->render('AppBundle::crm.html.twig', array(
            'x' => $x,
        ));


    }

    public function triTableauUnivers($tabB, $tabR){
        $em = $this->getDoctrine()->getManager();
        $x = count($tabB);

        for($i=0; $i<$x; $i++){
            $this->setBrandUniverse($tabB[$i], $tabR[$i]);
        }

        $em->flush();

        return $this->render('AppBundle::crm.html.twig', array(
            'x' => $x,
        ));

    }


    public function setBrandUniverse($idBrand, $idUniverse){
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('AppBundle:Brand')->find($idBrand);
        $branduniv = $em->getRepository('AppBundle:Univers')->find($idUniverse);

        $brand->addUniver($branduniv);

        $em->persist($brand);
    }


}