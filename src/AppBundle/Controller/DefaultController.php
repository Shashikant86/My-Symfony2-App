<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Port;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function createAction()
    {
      $data = new Port();
      $data->setName("Shashi");
      $data->setAge("27");
      $data->setCity("London");
      $em = $this->getDoctrine()->getManager();
      $em->persist($data);
      $em->flush();
      return new Response("Created New record with id". $data->getId());
    }

    public function showAction($id)
     {
    $product = $this->getDoctrine()
        ->getRepository('AppBundle:Port')
        ->find($id);

    var_dump($product);
    die;

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }
  }


}
