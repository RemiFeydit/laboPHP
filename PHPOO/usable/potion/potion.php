<?php
    include_once './usable/heal.php';

    class Potion extends Heal
    {
        public function __construct(){
            $this->namePotion = "Potion";
            $this->lvlPotion = 20;
        }

    }