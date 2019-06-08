<?php
    include_once './usable/heal.php';

    class HyperPotion extends Heal
    {
        public function __construct(){
            $this->namePotion = "HyperPotion";
            $this->lvlPotion = 200;
        }

    }