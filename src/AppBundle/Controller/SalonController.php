<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;
use AppBundle\Entity\User;
use AppBundle\Entity\Admin;



class SalonController extends Controller
{
    public function listSalonAction(){
        $em = $this->getDoctrine()->getManager();

        $salons = $em->getRepository('AppBundle:Salon')->findAll();

        return $this->render('AppBundle::salons_boutiques.html.twig', array(
            'salons' => $salons
        ));
    }
}