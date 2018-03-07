<?php

namespace OC\RationBundle\Controller;

use OC\RationBundle\Entity\Ration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('OCRationBundle:Ration');
		$rations = $repository->findAll();

		return $this->render('OCRationBundle:Default:index.html.twig', array("rations" => $rations));
	}

	public function sauverAction() {
		
	}

}
