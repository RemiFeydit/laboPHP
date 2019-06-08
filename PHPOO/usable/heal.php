<?php
include_once "./usable/usable.php";

class Heal implements Usable
{
    public $namePotion;
    public $lvlPotion;

    public function __construct ($namePotion, $lvlPotion)
    {
        $this->namePotion = $namePotion;
        $this->lvlPotion = $lvlPotion;
    }

    public function use ($pokemon)
    {
        echo '<p>' .$this->namePotion . ' est utilisée sur ' . $pokemon->namePokemon . '...</p>';
        if ($this->namePotion == "PotionMax")
        {
            $pokemon->heal($pokemon->maxLife);
        }else{
            $pokemon->heal($this->lvlPotion);
        }
    }
}
?>