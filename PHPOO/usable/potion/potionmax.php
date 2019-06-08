<?php
    include_once './usable/heal.php';

    class PotionMax extends Heal
    {
        public function __construct(){
            $this->namePotion = "PotionMax";
            $this->lvlPotion = 999;
        }

    }