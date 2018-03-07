<?php



namespace OC\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of CavaliersController
 *
 * @author Alexis
 */
class CavaliersController extends Controller {
    function cavaliersAction(){
        $repository = $this->getDoctrine()->getManager()->getRepository('OCUserBundle:User');
                $cavaliers = $repository->findAll();
        return $this->render('OCUserBundle:Cavaliers:afficher.html.twig',array('cavaliers' => $cavaliers));
    }
    
    function ficheAction($id,Request $request){
        $user=$this->getDoctrine()->getManager()->getRepository('OCUserBundle:User')->find($id);
        if (!$user){
             $request->getSession()->getFlashBag()->add('notice', 'Impossible d\'accéder à ce cavalier');
              return $this->redirectToRoute('oc_user_cavaliers');
        }
        return $this->render('OCUserBundle:Cavaliers:cavalier.html.twig',array('user' => $user));
        
    }
    }
    

