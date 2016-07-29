<?php

namespace ORMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORMBundle:Default:index.html.twig');
    }
}
