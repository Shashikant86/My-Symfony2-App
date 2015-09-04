<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GreetController extends Controller
{
    public function indexAction($name)
    {
     return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
