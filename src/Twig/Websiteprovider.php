<?php
namespace App\Twig ;

use App\Entity\IdentitéWebsite;
use App\Repository\IdentitéWebsiteRepository;

Class Websiteprovider{

    private $repo ;
    public function __construct(IdentitéWebsiteRepository $repo){
        $this->repo=$repo;

    }
    public function getWebsite(){
        return $this->repo->find(1);
    }
}