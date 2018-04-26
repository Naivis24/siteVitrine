<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;



class BrandDetailsController extends Controller
{
    public function getOneBrandAction($marque){
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('AppBundle:Brand');
        $brand = $repository->findOneByName($marque);


        return $this->render('AppBundle::details.html.twig', array(
            'brand' => $brand,
        ));
    }


}