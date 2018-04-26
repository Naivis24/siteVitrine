<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;
use AppBundle\Entity\User;
use AppBundle\Entity\Admin;



class BrandController extends Controller
{
    public function listBrandAction(){
        $em = $this->getDoctrine()->getManager();

        $brands = $em->getRepository('AppBundle:Brand')->findAll();

        return $this->render('AppBundle::marques.html.twig', array(
            'brands' => $brands,
        ));
    }
}