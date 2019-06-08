<?php
include_once "./usable/usable.php";

class Ball implements Usable
{
    public $namePokeball;
    public $lvlPokeball;

    public function __construct ($namePokeball, $lvlPokeball)
    {
        $this->namePokeball = $namePokeball;
        $this->lvlPokeball = $lvlPokeball;
    }
    
    public function tryCatch($pokemon)
    {
        if ($pokemon->isCaptured == true){
            echo "<p>Ce pokémon ne peut pas être capturé, il appartient déjà à un dresseur</p>";
            return false;
        }
        if ($this->lvlPokeball == 100)
        {
            $pokemon->isCaptured = true;
            return true;
        }
        $catchRate = mt_rand(0,100);
        $catchPercent = (($pokemon->maxLife - $pokemon->life) / $pokemon->maxLife) * (1 + ($this->lvlPokeball - $pokemon->lvlPokemon) / 25) * 100;

        if ($catchPercent > 100){
            $catchPercent = 100;
        }

        if ($catchPercent > $catchRate){
            return true;
        }else{
            return false;
        }

    }

    public function use ($pokemon)
    {
        echo '<p>'.$this->namePokeball . ' lancée sur ' . $pokemon->namePokemon . '...</p>';

        $catch = $this->tryCatch($pokemon);

        if (!$catch)
        {
            echo "ko.\n";
            return false;
        }else{
            echo '<p>' . $pokemon->namePokemon . ' a été capturé !</p>';
            $pokemon->isCaptured = true;
            return true;
        }
    }

    
}
?>