<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EnqueteControllerTest extends WebTestCase
{
    public function testReport()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/report');
    }

    public function testNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/new');
    }

    public function testSave()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/save');
    }

}
