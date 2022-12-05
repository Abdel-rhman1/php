<?php 
    namespace SimpleFactory;

    use SimpleFactory\Icar;

    class Bmw implements Icar{
        public $name = 'BMW';
        public function __construct(){
            
        }
        public function move(){
            echo "BMW is Moving";
        }
    }