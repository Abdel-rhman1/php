<?php 
    namespace SimpleFactory;
    use SimpleFactory\Bmw;


    class carFactory{
        public function __construct(){

        }
        public static function create($car)
        {
            if(in_array('SimpleFactory\\Icar',class_implements("SimpleFactory\\".$car))){
                $ucfirstclass = ucfirst($car);
                $class =  "\SimpleFactory\\".$ucfirstclass;
                return new $class();
            }
        }
    }