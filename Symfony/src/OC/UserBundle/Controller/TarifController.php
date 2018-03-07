<?php

namespace OC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TarifController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCUserBundle:Default:tarif.html.twig');
    }
}