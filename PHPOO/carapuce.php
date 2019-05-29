<?php
    include './pokemon.php';
    
    class Carapuce extends Pokemon
    {
        public function __construct ($lvlPokémon, $life = null)
        {
            $namePokémon = 'Carapuce';
            $maxLife = 100 + 9 * $lvlPokémon;
            $life = $maxLife;
            $type = 'eau';
            $type2 = null;
            $strength = 10 + 2 * $lvlPokémon;

            parent::__construct($namePokémon, $maxLife, $life, $lvlPokémon, $type, $type2, $strength);
        }

        public static function say_hi ()
        {
            echo "Cara !\n";
        }

    }
?>