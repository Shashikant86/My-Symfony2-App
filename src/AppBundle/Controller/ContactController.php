<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function showAction()
    {
        return $this->render('AppBundle:Contact:index.html.twig', array(
                // ...
            ));    }

}
