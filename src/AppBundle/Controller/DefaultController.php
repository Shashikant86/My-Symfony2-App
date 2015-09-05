<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Profile;
use AppBundle\Entity\Category;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{


    public function createAction()
    {
      $data = new Profile();
      $data->setName("Shashi");
      $data->setAge("27");
      $data->setCity("London");
      $em = $this->getDoctrine()->getManager();
      $em->persist($data);
      $em->flush();
      return new Response('Created New record with id'. $data->getId());
    }

    public function showAction()
     {
    $id = "2";
    $product = $this->getDoctrine()
        ->getRepository('AppBundle:Profile')
        ->find($id);

    $categoryName = $product->getCategory()->getName();
    print_r($categoryName);
    die;
    // $category = $this->getDoctrine()
    //     ->getRepository('AppBundle:Category')
    //     ->find($id);
    //
    // $products = $category->getProducts();
    //
    // print_r($products);
    // die;

   return new Response('Here is '.$product);

  }

  public function updateAction()

  {
    $id = "3";
    $em = $this->getDoctrine()->getManager();
    $product = $em->getRepository('AppBundle:Profile')->find($id);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }
    $product->setName('Ipsit');
    $product->setAge('1');
    $em->flush();
    return new Response('Updated IDwith New name');
  }

  public function createProfileAction()
   {
       $category = new Category();
       $category->setName('Male');

       $product = new Profile();
       $product->setName('John');
       $product->setAge(19);
       $product->setCity('NewYork');

       $product->setCategory($category);

       $em = $this->getDoctrine()->getManager();
       $em->persist($category);
       $em->persist($product);
       $em->flush();

       return new Response(
           'Created profile id: '.$product->getId()
           .' and category id: '.$category->getId()
       );
   }

}
