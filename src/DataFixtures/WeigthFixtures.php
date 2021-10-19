<?php

namespace App\DataFixtures;

use App\Entity\Weigth;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


//use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Repository\UserRepository;
//use App\Repository\ImcCategorieRepository;


class WeigthFixtures extends Fixture
{
    protected $userRepository;
    protected $imcCategorieRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        //$this->imcCategorieRepository = $imcCategorieRepository;
    }

    public function load(ObjectManager $manager): void
    {
        $users = $this->userRepository->findAll();
        //$imcCategories = $this->imcCategorieRepository->findAll();


        // $product = new Product();
        // $manager->persist($product);
        
        //boucle qui parcour les users
        //var_dump($users);
        for ($i=0; $i < count($users) ; $i++) { 
            

            $rand = mt_rand(1,9);
            $randkg = mt_rand(90,150);
            //boucle pour inserer plusieur weight pour un user (c'est des mois)
            for ($j=10; $j > $rand ; $j--) { 
                $Date = new \DateTime();
                $Date->setDate(2021,$j,1);  
                $weigth = new Weigth();
                $randkg -= 1;

                //cacule de l'imc pour mettre dans la categorie d'imc

                //$weigth->setImcCateg($imcCategories[$idimc]);


                $weigth->setDate($Date);
                $weigth->setUser($users[$i]);
                $weigth->setUserWeigth($randkg);

                $manager->persist($weigth);
            }
        }


        $manager->flush();
    }
    public function getDependencies()
    {
        return [ImcCategorieFixtures::class];
    }
}
