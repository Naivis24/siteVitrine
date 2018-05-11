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

        $brands = $em->getRepository('AppBundle:Brand')->findBy(array(), array('name' => 'ASC'));
        $targets = $em->getRepository('AppBundle:Target')->findAll();
        $categories = $em->getRepository('AppBundle:PrimaryCategory')->findAll();
        $styles = $em->getRepository('AppBundle:Style')->findAll();
        $prices = $em->getRepository('AppBundle:PriceRange')->findAll();
        $features = $em->getRepository('AppBundle:Feature')->findAll();

        return $this->render('AppBundle::marques.html.twig', array(
            'brands' => $brands,
            'targets' => $targets,
            'styles' => $styles,
            'categories' => $categories,
            'prices' => $prices,
            'features' => $features
        ));
    }
}