<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Brand;



class DetailsController extends Controller
{

    public function getOneShowroomAction($id){
        $em = $this->getDoctrine()->getManager();

        $salon = $em->getRepository('AppBundle:Salon')->findOneBySalonId($id);

        $marquesParticipantes = $em->getRepository('AppBundle:ParticipeSalon')
            ->findBy(array('salon' => $salon));


        return $this->render('AppBundle::salon_details.html.twig', array(
            'salon' => $salon,
            'marquesParticipantes' => $marquesParticipantes
        ));
    }


}