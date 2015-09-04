<?php

namespace AcceptanceTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcceptanceTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
