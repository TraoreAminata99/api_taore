<?php

namespace App\DataFixtures;

use App\Entity\Parcel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {for ($i = 0; $i < 100; $i++) {
        $parcel = new Parcel();
        $parcel->setName('Colis '.$i);
        $parcel->setDescription('Destination '.$i);
       
        $manager->persist($parcel);
    }
        $manager->flush();
    }
}
