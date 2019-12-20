<?php

namespace App\DataFixtures;

use App\Entity\Entreprise;
use App\Entity\Stage;
use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Création de Faker le dieu
        $faker = \Faker\Factory::create('fr_FR');

        //Entreprises


        $entreprise = new Entreprise();

        $entreprise->setNom($faker->company());
        $entreprise->setSiteWeb($faker->regefify('https://www\.'.$nomEntreprise.'.com'));
        $entreprise->setActivite($faker->realText($maxNbChars = 200, $indexSize = 2));
        $manager->persist($entreprise);


        $manager->flush();
    }
}
