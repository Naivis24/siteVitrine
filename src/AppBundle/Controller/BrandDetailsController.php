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

    public function fillBrandUniversCalcul($tabBrand, $tabUnivers, $tabPoids){
        $em = $this->getDoctrine()->getManager();
        $x = count($tabBrand);

        for($i=0; $i<$x; $i++){
            $this->setBrandUniversCalcul($tabBrand[$i], $tabUnivers[$i], $tabPoids[$i]);
        }
        $em->flush();

        return $this->render('AppBundle::crm.html.twig', array(
            'x' => $x,
        ));

    }

    public function fillBrandUnivers($tabBrand, $tabUnivers){
        $em = $this->getDoctrine()->getManager();
        $x = count($tabBrand);

        for($i=0; $i<$x; $i++){
            $this->setBrandUnivers($tabBrand[$i], $tabUnivers[$i]);
        }
        $em->flush();

        return $this->render('AppBundle::crm.html.twig', array(
            'x' => $x,
        ));

    }

    public function setBrandUnivers($idBrand, $idUnivers){
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('AppBundle:Brand')->find($idBrand);
        $univers = $em->getRepository('AppBundle:Univers')->find($idUnivers);
        $brand -> addUniver($univers);

        $em->persist($brand);
    }


    public function setBrandUniversCalcul($idBrand, $idUnivers, $poids){
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('AppBundle:Brand')->find($idBrand);
        $univers = $em->getRepository('AppBundle:Univers')->find($idUnivers);

        $row = new BrandUniversCalcul();
        $row->setBrand($brand);
        $row->setUnivers($univers);
        $row->setPoids($poids);



        $em->persist($row);
    }


}