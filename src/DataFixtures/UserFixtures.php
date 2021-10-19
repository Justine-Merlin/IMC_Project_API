<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $usersFirstname = [
            'Adam',    'Alex',        'Alexandre', 'Alexis',
            'Anthony', 'Antoine',     'Benjamin',  'Cédric',
            'Charles', 'Christopher', 'David',     'Dylan',
            'Édouard', 'Elliot',      'Émile',     'Étienne',
            'Félix',   'Gabriel',     'Guillaume', 'Hugo',
            'Isaac',   'Jacob',       'Jérémy',    'Jonathan',
            'Julien',  'Justin',      'Léo',       'Logan',
            'Loïc',    'Louis',       'Lucas',     'Ludovic',
            'Malik',   'Mathieu,',    'Mathis',    'Maxime',
            'Michaël', 'Nathan',      'Nicolas',   'Noah',
            'Olivier', 'Philippe',    'Raphaël',   'Samuel',
            'Simon',   'Thomas',      'Tommy',     'Tristan',
            'Victor',  'Vincent'
          ];
        $usersName = [ 'Smith',       'Murphy',     'Smith',
        'Jones',        "O'Kelly",   'Johnson',    'Williams',
        "O'Sullivan", 'Williams',  'Brown',        'Walsh',
        'Brown',      'Taylor',      'Smith',      'Jones',
        'Davies',       "O'Brien",   'Miller',     'Wilson',
        'Byrne',      'Davis',     'Evans',        "O'Ryan",
        'Garcia',     'Thomas',      "O'Connor",   'Rodriguez',
        'Roberts',      "O'Neill",   'Wilson',     'Smith',
        'Murphy',     'Smith',     'Jones',        "O'Kelly",
        'Johnson',    'Williams',    "O'Sullivan", 'Williams',
        'Brown',        'Walsh',     'Brown',      'Taylor',
        'Smith',      'Jones',     'Davies',       "O'Brien",
        'Miller',     'Wilson',      'Byrne',      'Davis',
        'Evans',        "O'Ryan",    'Garcia',     'Thomas'
        ];

        //var_dump($elevesprenom);
        for ($i=0; $i < 50; $i++) {

            $user = new User();
            $user->setName($usersName[$i]);
            $user->setFirstname($usersFirstname[$i]);
            $user->setEmail($usersName[$i].'.'.$usersFirstname[$i].'@test.fr');
            $user->setPassword($usersName[$i].'.'.$usersFirstname[$i]);
            $user->setGender(1);
            $user->setHeigth(170);

            $manager->persist($user);
        };
        
        $manager->flush();
    }
}
