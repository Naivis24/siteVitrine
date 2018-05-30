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

        $brands = $em->getRepository('AppBundle:Brand')->findBy(array('activated' => '1'), array('recommandation'=> 'DESC','name' => 'ASC'));
        $targets = $em->getRepository('AppBundle:Target')->findAll();
        $categories = $em->getRepository('AppBundle:PrimaryCategory')->findAll();
        $univers = $em->getRepository('AppBundle:Univers')->findAll();
        $prices = $em->getRepository('AppBundle:PriceRange')->findAll();
        $features = $em->getRepository('AppBundle:Feature')->findAll();

        return $this->render('AppBundle::marques.html.twig', array(
            'brands' => $brands,
            'brands2' =>$brands,
            'targets' => $targets,
            'univers' => $univers,
            'categories' => $categories,
            'prices' => $prices,
            'features' => $features
        ));
    }

    public function cardsBrandsAction($brands){
        return $this->render('AppBundle::cardmarque.html.twig', array(
            'brands'=> $brands
        ));
    }
}