<?php

require './User.php';

$user = new User();
var_dump($user->getFirstName());
//echo $user->firstName;

//appel au setter pour modifier la valeur de l'attribut

$user
        ->setFirstName('Gilles')
        ->setLastName('Kponkou')
        ->setAge(40);

//appel au getter pour acceder à la valeur de l'attribut

echo '<br>';
echo $user->getFirstName();
echo '<br>';
echo $user->getLastName();
echo '<br>';
echo $user->getAge();

echo '<hr>';

//Le constructeur sera appelé avec 'Gilles' en paramètre

$user2 = new User('Gilles');
echo $user2;
echo '<hr>';
//possible car la classe User contient la méthode __toString()

echo $user;