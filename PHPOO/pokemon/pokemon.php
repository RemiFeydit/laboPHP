<?php

class Pokemon 
{
    public $namePokemon;
    public $life;
    public $maxLife;
    public $lvlPokemon;
    public $type;
    public $type2;
    public $strength;
    public $isCaptured;

    public function __construct ($namePokemon, $maxLife, $life, $lvlPokemon, $type, $type2, $strength, $isCaptured)
    {
        $this->namePokemon = $namePokemon;
        $this->maxLife = $maxLife;
        $this->life = $life;
        $this->lvlPokemon = $lvlPokemon;
        $this->type = $type;
        $this->type2 = $type2;
        $this->strength = $strength;
        $this->isCaptured = $isCaptured;
        static::say_hi();
    }
    
    public static function say_hi ()
    {
        echo '<p> Hi !</p>';
    }

    public function attack ()
    {
        $damage = $this->strength * (rand(900, 1100) / 1000);
        return round($damage, 0);
    }

    public function takeDamage ($damage_taken)
    {
        $this->life = $this->life - $damage_taken;
        if ($this->life < 0) {
            $this->life = 0;
        }
        echo '<p>'. $this->namePokemon. ' a subi '. $damage_taken. ' point de vie. <br>'. $this->namePokemon. ' : '. $this->life. '/'. $this->maxLife. '</p>';
    }

    public function heal ($hp_healed)
    {
        $this->life = $this->life + $hp_healed;
        if ($this->life > $this->maxLife) {
            $this->life = $this->maxLife;
        }
        echo $this->namePokemon . ' a été soigné de '. $hp_healed. ' hp.'. "\n";
    }


}
?>