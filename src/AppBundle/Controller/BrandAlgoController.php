<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 01/06/2018
 * Time: 11:58
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\BrandUniversCalcul;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;
use AppBundle\Entity\BrandRecommande;

class BrandAlgoController extends Controller
{
    public function fillBrandUniversCalcul($tabBrand, $tabUnivers, $tabPoids)
    {
        $em = $this->getDoctrine()->getManager();
        $x = count($tabBrand);

        for ($i = 0; $i < $x; $i++) {
            $this->setBrandUniversCalcul($tabBrand[$i], $tabUnivers[$i], $tabPoids[$i]);
        }
        $em->flush();

        return $this->render('AppBundle::crm.html.twig', array(
            'x' => $x,
        ));

    }

    public function fillBrandUnivers($tabBrand, $tabUnivers)
    {
        $em = $this->getDoctrine()->getManager();
        $x = count($tabBrand);

        for ($i = 0; $i < $x; $i++) {
            $this->setBrandUnivers($tabBrand[$i], $tabUnivers[$i]);
        }
        $em->flush();

        return $this->render('AppBundle::crm.html.twig', array(
            'x' => $x,
        ));

    }

    public function setBrandUnivers($idBrand, $idUnivers)
    {
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('AppBundle:Brand')->find($idBrand);
        $univers = $em->getRepository('AppBundle:Univers')->find($idUnivers);
        $brand->addUniver($univers);

        $em->persist($brand);
    }


    public function setBrandUniversCalcul($idBrand, $idUnivers, $poids)
    {
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('AppBundle:Brand')->find($idBrand);
        $univers = $em->getRepository('AppBundle:Univers')->find($idUnivers);

        $row = new BrandUniversCalcul();
        $row->setBrand($brand);
        $row->setUnivers($univers);
        $row->setPoids($poids);


        $em->persist($row);
    }


    public function setBrandCompeting($idBrand, $idHomme, $idFemme, $idEnfant, $scoreHomme, $scoreFemme, $scoreEnfant)
    {

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
        $brandrecommande->setScoreHomme($scoreHomme);
        $brandrecommande->setScoreFemme($scoreFemme);
        $brandrecommande->setScoreEnfant($scoreEnfant);

        $em->persist($brandrecommande);
    }

    public function fillBrandRecommande($tabB, $tabHomme, $tabFemme, $tabEnfant, $scoreHomme, $scoreFemme, $scoreEnfant)
    {
        $em = $this->getDoctrine()->getManager();
        $x = count($tabB);

        for ($i = 0; $i < $x; $i++) {
            $this->setBrandCompeting($tabB[$i], $tabHomme[$i], $tabFemme[$i], $tabEnfant[$i]
                , $scoreHomme[$i], $scoreFemme[$i], $scoreEnfant[$i]);
        }

        $em->flush();

        return $this->render('AppBundle::crm.html.twig', array(
            'x' => $x,
        ));


    }

}