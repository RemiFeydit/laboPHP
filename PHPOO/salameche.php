<?php
    include './pokemon.php';
    
    class Salameche extends Pokemon
    {
        public function __construct ($lvlPokémon, $life = null)
        {
            $namePokémon = 'Salamèche';
            $maxLife = 100 + 5 * $lvlPokémon;
            $life = $maxLife;
            $type = 'feu';
            $type2 = null;
            $strength = 10 + 4 * $lvlPokémon;

            parent::__construct($namePokémon, $maxLife, $life, $lvlPokémon, $type, $type2, $strength);
        }

        public static function say_hi ()
        {
            echo "Salaaa mèche mèche !\n";
        }

    }
$salameche = new Salameche(5);
?>