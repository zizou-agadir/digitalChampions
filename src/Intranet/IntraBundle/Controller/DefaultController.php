<?php

namespace Intranet\IntraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IntranetIntraBundle:Default:index.html.twig');
    }
}
