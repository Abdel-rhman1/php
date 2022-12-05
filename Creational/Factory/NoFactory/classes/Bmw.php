<?php 
    namespace NoFactoryClasses;

    use NoFactoryClasses\Icar;

    class Bmw implements Icar{
        public $name = 'BMW';
        public function __construct(){
            
        }
        public function move(){
            echo "BMW is Moving";
        }
    }