<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\BrandUniversCalcul;
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
    public function getOneBrandAction($marque)
    {
        $em = $this->getDoctrine()->getManager();

        $brand = $em->getRepository('AppBundle:Brand')->findOneByName($marque);

        return $this->render('AppBundle::marque_details.html.twig', array(
            'brand' => $brand,
        ));
    }

    public function setBrandCompeting($idBrand, $idHomme, $idFemme, $idEnfant){

        $brandrecommande = new BrandRecommande();
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('AppBundle:Brand')->find($idBrand);
        $recHomme = $em->getRepository('AppBundle:Brand')->find($idHomme);
        $recFemme = $em->getRepository('AppBundle:Brand')->find($idFemme);
        $recEnfant = $em->getRepository('AppBundle:Brand')->find($idEnfant);

        $brandrecommande->setBrand($brand);
        $brandrecommande->setRecommandeHomme($recHomme);
        $brandrecommande->setRecommandeFemme($recFemme);
        $brandrecommande->setRecommandeEnfant($recEnfant);

        $em->persist($brandrecommande);
    }

    public function triTableau($tabB, $tabHomme, $tabFemme, $tabEnfant){
        $em = $this->getDoctrine()->getManager();
        $x = count($tabB);

        for($i=0; $i<$x; $i++){
            $this->setBrandCompeting($tabB[$i], $tabHomme[$i], $tabFemme[$i], $tabEnfant[$i]);
        }

        }
}