<?php 
    namespace AbstractFactory;
    class Kia implements Icar {
        public $name = 'Kia';
        public function __construct(){
            
        }
        public function move(){
            echo "Kia is Moving";
        }
    }