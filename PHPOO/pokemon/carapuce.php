<?php
    include_once './pokemon/pokemon.php';

    class Carapuce extends Pokemon
    {
        public function __construct ($lvlPokemon, $life = null)
        {
            $namePokemon = 'Carapuce';
            $maxLife = 9 * $lvlPokemon;
            $life = $maxLife;
            $type = 'eau';
            $type2 = null;
            $strength = 2 * $lvlPokemon;
            $isCaptured = false;

            parent::__construct($namePokemon, $maxLife, $life, $lvlPokemon, $type, $type2, $strength, $isCaptured);
        }

        public static function say_hi ()
        {
            echo "Cara ! <br>";
        }

    }

?>