<?php
    include_once './usable/heal.php';

    class SuperPotion extends Heal
    {
        public function __construct(){
            $this->namePotion = "SuperPotion";
            $this->lvlPotion = 50;
        }

    }