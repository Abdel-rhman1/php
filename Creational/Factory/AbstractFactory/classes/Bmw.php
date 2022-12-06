<?php 
    namespace AbstractFactory;

    use AbstractFactory\Icar;

    class Bmw implements Icar{
        public $name = 'BMW';
        public function __construct(){
            
        }
        public function move(){
            echo "BMW is Moving";
        }
    }