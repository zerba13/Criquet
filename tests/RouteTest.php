<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RouteTest extends WebTestCase
{
    public function testLink(): void
    {
        $client = static::createClient();

        // Request a specific page
        // $crawler = $client->request('GET', '/');
        // $crawler = $client->request('GET', '/formation');
        // $crawler = $client->request('GET', '/contact');
        // $crawler = $client->request('GET', '/cgv');
        $crawler = $client->request('GET', '/formation_detail/3');
        // $crawler = $client->request('GET', '/intervention');
        // $crawler = $client->request('GET', '/mention-legales');
        // $crawler = $client->request('GET', '/actualite');
        // $crawler = $client->request('GET', '/actualite_detail/10');
        // $crawler = $client->request('GET', '/politique/de/confidentialité');
        // $crawler = $client->request('GET', '/register');
        // $crawler = $client->request('GET', '/login');

        $client->catchExceptions(false);
       

        $this->assertResponseIsSuccessful();
    }

    // public function listeUrls()
    // {
    //     return[
    //         ['/'],
    //         ['/mention-legales'],
    //         ['/intervention'],
    //         ['/actualite'],
    //         ['/actualite_detail/{id}'],
    //         ['/politique/de/confidentialité/'],
    //         ['/cgv'],
    //         ['/register'],
    //         ['/login'],
    //         ['/logout'],

    //     ];
    // }
}
