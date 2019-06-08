<?php
    include_once './usable/ball.php';

    class Hyperball extends Ball
    {
        public function __construct(){
            $this->namePokeball = "Hyperball";
            $this->lvlPokeball = 30;
        }

    }