<?php
include_once 'error.php';
include_once 'pokemon.php';
include 'pokeball.php';

$carapuce = new Pokemon('Carapuce', 50, 100, 5, 'eau', 10);
$salamèche = new Pokemon('Salamèche', 100, 100, 5, 'feu', 10);
var_dump($carapuce);
$carapuce->takeDamage($salamèche->attack());
var_dump($carapuce);
$carapuce->heal(50);
$pokeball = new Pokeball('Pokeball', 10);
var_dump($pokeball);
$pokeball->catched($carapuce);
?>