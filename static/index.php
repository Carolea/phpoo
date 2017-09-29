<?php

require './human.php';

/*L'opérateur :: permet de faire référence à la constante de la classe*/

echo Human::NB_LEGS;

$human = new human();

echo '<br>';
echo Human::$nbInstances;
echo '<br>' . $human::NB_LEGS;


