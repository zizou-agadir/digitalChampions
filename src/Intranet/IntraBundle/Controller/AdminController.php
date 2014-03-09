<?php

namespace Intranet\IntraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('IntranetIntraBundle:Admin:index.html.twig');
    }

    public function ajouterAction()
    {
    	$request = $this->getRequest();
    	if($request->getMethod()== 'POST'){
    		$session = $this->get('session');
    		$session->getFlashBag()->add('info',"L'article a été ajouté") ;

    		return $this->redirect($this->generateUrl('admin_home'));
    	}
        return $this->render('IntranetIntraBundle:Admin:ajouter.html.twig');
    }

    public function editerAction()
    {
        return $this->render('IntranetIntraBundle:Admin:editer.html.twig');
    }

    public function supprimerAction()
    {
        return $this->render('IntranetIntraBundle:Admin:supprimer.html.twig');
    }
}
