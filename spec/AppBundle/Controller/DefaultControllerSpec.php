<?php

namespace spec\AppBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;

class DefaultControllerSpec extends ObjectBehavior
{
  function let(EngineInterface $templating,
  ContainerInterface $container,
       ManagerRegistry $registry,
       ObjectManager $manager,
       ObjectRepository $repository)
   {
      // ...
      $this->setContainer($container);
      $container->get('templating')->willReturn($templating);
      $container->has('doctrine')->willReturn(true);
      $container->get('doctrine')->willReturn($registry);

      $registry->getManager()->willReturn($manager);

      $manager
            ->getRepository('AppBundle:Profile')
            ->willReturn($repository);
      // ...
  }
    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Controller\DefaultController');
    }
}
