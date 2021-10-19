<?php

namespace App\DataFixtures;

use App\Entity\ImcCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImcCategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        
        $imccategories = [["Poids insuffisant",0, 18.5, 2],
                          ["Poids normal", 18.5, 24.9, 1],
                          ["Embonpoint", 25.0, 29.9, 2],
                          ["Obésité classe I", "30", 34.9, 3],
                          ["Obésité classe II", 35.0, 39.9, 4],
                          ["Obésité classe III", 40, 100, 5]];
                          
        for($i = 0; $i < count($imccategories); $i++){
            
            $categ = new ImcCategorie;
            $categ->setName($imccategories[$i][0]);
            $categ->setMinWeigth($imccategories[$i][1]);
            $categ->setMaxWeigth($imccategories[$i][2]);
            $categ->setDanger($imccategories[$i][3]);

            $manager->persist($categ);
        }

        $manager->flush();
    }
}
