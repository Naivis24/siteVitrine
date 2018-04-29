<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;



class DetailsController extends Controller
{
    public function getOneBrandAction($marque){
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('AppBundle:Brand');
        $brand = $repository->findOneByName($marque);


        return $this->render('AppBundle::marque_details.html.twig', array(
            'brand' => $brand,
        ));
    }

    public function getOneShowroomAction($id){
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('AppBundle:Salon');
        $salon = $repository->findOneBySalonId($id);


        return $this->render('AppBundle::salon_details.html.twig', array(
            'salon' => $salon,
        ));
    }


}