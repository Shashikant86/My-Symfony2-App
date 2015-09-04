<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class MainController extends Controller
{

  public function indexAction()
  {
      return $this->render('AppBundle:Main:index.html.twig', array(
          'my_name' => 'Shashi',
          'my_son' => 'Ipsit',
          'my_city' => 'London'
          ));
  }

  public function apiMeAction()
  {
    $me = "Shashi";

    return new JsonResponse($me);
    // return new Response(
    //  json_encode($me),
    //  200,
    //  array('Content-Type' => 'application/json'));
  }


}
