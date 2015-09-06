<?php

namespace AcceptanceTestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/me');

        $this->assertNotNull($crawler->filter('html:contains("Shashi")'));
    }
}
