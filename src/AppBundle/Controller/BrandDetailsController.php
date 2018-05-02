<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;



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
        $brands = $em->getRepository('AppBundle:Brand')->findAll();

        return $this->render('AppBundle::marque_details.html.twig', array(
            'brand' => $brand, 'brands' => $brands,
        ));
    }


}