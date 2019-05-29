<?php
    include './pokemon.php';
    
    class Bulbizarre extends Pokemon
    {
        public function __construct ($lvlPokémon, $life = null)
        {
            $namePokémon = 'Bulbizarre';
            $maxLife = 100 + 7 * $lvlPokémon;
            $life = $maxLife;
            $type = 'plante';
            $type2 = 'poison';
            $strength = 10 + 3 * $lvlPokémon;

            parent::__construct($namePokémon, $maxLife, $life, $lvlPokémon, $type, $type2, $strength);
        }

        public static function say_hi ()
        {
            echo "Bulbi !\n";
        }

    }

    $bulbizarre = new Bulbizarre(5);
    var_dump($carapuce);
    ?>