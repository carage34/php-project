<?php

namespace OC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InstallationController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCUserBundle:Default:installation.html.twig');
    }
}
?>