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
<<<<<<< HEAD





        return $this->render('AppBundle::marque_details.html.twig', array(
            'brand' => $brand,
=======
         return $this->render('AppBundle::details.html.twig', array(
            'brand' => $brand
>>>>>>> 01dc8f6cadb726136f79c5740da886b4c6afb109
        ));
    }


}