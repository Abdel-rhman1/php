<?php 
    namespace NoFactoryClasses;
    class NullCar implements Icar {
        public $name = '';
        public function __construct(){
            
        }
        public function move(){
            echo "null is Moving";
        }
    }