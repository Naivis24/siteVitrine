<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;



class BrandDetailsController extends Controller
{
    public function getOneBrandAction($marque){
        $em = $this->getDoctrine()->getManager();

        $brand = $em->getRepository('AppBundle:Brand')->findOneByName($marque);
        $countries = $em->getRepository('AppBundle:Country')->findAll();





        return $this->render('AppBundle::details.html.twig', array(
            'brand' => $brand, 'countries' => $countries,
        ));
    }


}