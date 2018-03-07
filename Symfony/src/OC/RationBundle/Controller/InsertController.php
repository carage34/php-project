<?php

namespace OC\RationBundle\Controller;

use OC\RationBundle\Entity\Ration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class InsertController extends Controller
{
	public function indexAction(Request $request)
	{
		$entityManager = $this->getDoctrine()->getManager();
		$id = $request->query->get('id');
		$product = $entityManager->getRepository(Ration::class)->find($id);
		$data = $request->query->get('data');
		$form = $request->query->get('form');
		if($form==0) {
			$column="nom";
			$product->setNom($data);
		}
		if($form==1) {
			$column="matin";
			$product->setMatin($data);
		}
		if($form==2) {
			$column="midi";
			$product->setMidi($data);
		}
		if($form==3) {
			$column="soir";
			$product->setSoir($data);
		}
		$entityManager->persist($product);
		$entityManager->flush();
		return new Response("ok");
	}
}
