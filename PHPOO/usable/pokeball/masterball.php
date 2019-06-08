<?php
    include_once './usable/ball.php';

    class MasterBall extends Ball
    {
        public function __construct(){
            $this->namePokeball = "MasterBall";
            $this->lvlPokeball = 100;
        }

    }