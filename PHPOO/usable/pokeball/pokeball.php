<?php
    include_once './usable/ball.php';

    class Pokeball extends Ball
    {
        public function __construct(){
            $this->namePokeball = "Pokeball";
            $this->lvlPokeball = 10;
        }

    }