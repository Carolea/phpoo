<?php

require 'Chat.php';
require 'Chien.php';
require './Maitre.php';

$chat = new Chat();

echo $chat->identifier();
echo '<br>';
echo $chat->getEspece();
echo '<br>';
echo $chat->crier();
echo '<br>';


$chien = new Chien();

echo $chien->identifier();
echo '<br>';
echo $chien->getEspece();
echo '<br>';
echo $chien->displayEspece();
echo '<br>';

//retourne le nom de la classe objet
echo get_class($chat);

$maitre = new Maitre();
$maitre->setAnimal($chat);
$maitre->caresserAnimal();
echo '<br>';
$maitre2 = new Maitre();
$maitre2->setAnimal($chien);
$maitre2->caresserAnimal();