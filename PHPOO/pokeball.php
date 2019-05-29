<?php
include 'error.php';


class Pokeball implements Usable
{
    public $namePokeball;
    public $lvlPokeball;

    public function __construct ($namePokeball, $lvlPokeball)
    {
        $this->namePokeball = $namePokeball;
        $this->lvlPokeball = $lvlPokeball;
    }
    
    public function use ($pokemon)
    {
        echo $this->namePokeball . ' lancée sur ' . $pokemon->namePokemon . '...';
        
        $catch = $this->try_catch($pokemon);
        
        if (!$catch)
        {
            echo "ko.\n";
            return false;
        }

        echo ' ' . $pokemon->namePokemon . ' a été capturé !';
        return true;
    }

    public function catched($pokemon)
    {
        echo $pokemon->namePokemon;
    }
}
?>