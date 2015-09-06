<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
  public function testIndex()
  {
      $client = static::createClient();
      $crawler = $client->request('GET', '/hello');
      $this->assertEquals(302, $client->getResponse()->getStatusCode());
      $this->assertFalse($client->getResponse()->isRedirect('https://shashikantjagtap.net'));
  }
}
