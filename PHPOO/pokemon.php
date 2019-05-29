<?php
include 'error.php';

class Pokemon 
{
    public $namePokemon;
    public $life;
    public $maxLife;
    public $lvlPokemon;
    public $type;
    public $type2;
    public $strength;

    public function __construct ($namePokemon, $maxLife, $life, $lvlPokemon, $type, $type2, $strength)
    {
        $this->namePokemon = $namePokemon;
        $this->maxLife = $maxLife;
        $this->life = $life;
        $this->lvlPokemon = $lvlPokemon;
        $this->type = $type;
        $this->type2 = $type2;
        $this->strength = $strength;
        static::say_hi();
    }
    
    public static function say_hi ()
    {
        echo 'Hi !' . "\n";
    }

    public function attack()
    {
        $damage = $this->strength * (rand(900, 1100) / 1000);
        return round($damage, 0);
    }

    public function takeDamage($damage_taken)
    {
        $this->life = $this->life-$damage_taken;
        if($this->life < 0){
            $this->life = 0;
        }
        echo $this->namePokemon. 'a subi '. $damage_taken. ' point de vie.';
    }

    public function heal($hp_healed)
    {
        $this->life = $this->life+$hp_healed;
        if($this->life > $this->maxLife){
            $this->life = $this->maxLife;
        }
        echo $this->namePokemon. ' a été soigné de '. $hp_healed. ' hp.';
    }


}
?>