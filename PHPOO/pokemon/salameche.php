<?php    
    class Salameche extends Pokemon
    {
        public function __construct ($lvlPokémon, $life = null)
        {
            $namePokémon = 'Salamèche';
            $maxLife = 5 * $lvlPokémon;
            $life = $maxLife;
            $type = 'feu';
            $type2 = null;
            $strength = 4 * $lvlPokémon;
            $isCaptured = false;

            parent::__construct($namePokémon, $maxLife, $life, $lvlPokémon, $type, $type2, $strength, $isCaptured);
        }

        public static function say_hi ()
        {
            echo "Salaaa mèche mèche !\n";
        }

    }

?>