<?php
    include_once './usable/ball.php';

    class Superball extends Ball
    {
        public function __construct(){
            $this->namePokeball = "Superball";
            $this->lvlPokeball = 20;
        }

    }