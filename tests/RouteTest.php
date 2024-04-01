<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RouteTest extends WebTestCase
{
    public function testLink($url): void
    {
        $client = static::createClient();
        $client->request('GET', $url);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function listeUrls()
    {
        return[
            ['/'],
            ['/mention-legales'],
            ['/intervention'],
            ['/actualite'],
            ['/actualite_detail/{id}'],
            ['/politique/de/confidentialité/'],
            ['/politique/de/confidentialité/'],
            ['/register'],
            ['/login'],
            ['/logout'],

        ];
    }
}
