<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

    public function testJSONAPI()
    {

      $client = static::createClient();
      $crawler = $client->request('GET', '/api/me');
      $this->assertTrue(
      $client->getResponse()->headers->contains(
        'Content-Type',
        'application/json'));
    }

}
