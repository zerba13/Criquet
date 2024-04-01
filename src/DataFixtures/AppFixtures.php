<?php

namespace App\DataFixtures;

use App\Entity\IdentitéWebsite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $website= new IdentitéWebsite();
        $website->setName('Criquet & co');
        $website->setAdress('LE POUT');
        $website->setCity('LEPOUT');
        $website->setCountry('fr');
        $website->setEmail('test@test.fr');
        $website->setPhone('0101010101');
        $website->setSIRET('1');
        $website->setDeclaration_activity('1');
        $website->setFacebook('fb');
        $website->setInstagram('insta');
        $website->setLinkedin('linkle');

        $manager->flush();

    }
}
