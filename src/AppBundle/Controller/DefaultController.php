<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('AppBundle::index.html.twig');

        return new Response($content);

    }


    public function marquesAction(){
        $content = $this->get('templating')->render('AppBundle::marques.html.twig');

        return new Response($content);
    }

    public function offresMarquesAction(){
        $content = $this->get('templating')->render('AppBundle::offres_marques.html.twig');

        return new Response($content);
    }

    public function histoireAction(){
        $content = $this->get('templating')->render('AppBundle::histoire.html.twig');

        return new Response($content);
    }

    public function equipeAction(){
        $content = $this->get('templating')->render('AppBundle::equipe.html.twig');

        return new Response($content);
    }

    public function contactAction(){
        $content = $this->get('templating')->render('AppBundle::contact.html.twig');

        return new Response($content);
    }

    public function showroomAction(){
        $content = $this->get('templating')->render('AppBundle::showroom.html.twig');

        return new Response($content);
    }


    public function salonsMarquesAction(){
        $content = $this->get('templating')->render('AppBundle::salons_marques.html.twig');

        return new Response($content);
    }

    public function presseAction(){
        $content = $this->get('templating')->render('AppBundle::presse.html.twig');

        return new Response($content);
    }

    public function agenceCommercialeAction(){
        $content = $this->get('templating')->render('AppBundle::agent_commercial.html.twig');

        return new Response($content);
    }

    public function salonsBoutiquesAction(){
        $content = $this->get('templating')->render('AppBundle::salons_boutiques.html.twig');

        return new Response($content);
    }


    public function connexionAction(){
        $content = $this->get('templating')->render('AppBundle::connexion.html.twig');

        return new Response($content);
    }

    public function mentionsLegalesAction(){
        $content = $this->get('templating')->render('AppBundle::mentions_legales.html.twig');

        return new Response($content);
    }

    public function cguAction(){
        $content = $this->get('templating')->render('AppBundle::cgu.html.twig');

        return new Response($content);
    }

    public function confidentialiteAction(){
        $content = $this->get('templating')->render('AppBundle::confidentialite.html.twig');

        return new Response($content);
    }

    public function cookiesAction(){
        $content = $this->get('templating')->render('AppBundle::cookies.html.twig');

        return new Response($content);
    }
}