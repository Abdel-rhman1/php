<?php 
    use NoFactoryClasses\Fait;
    use NoFactoryClasses\Kia;
    use NoFactoryClasses\Bmw;
    use NoFactoryClasses\NullCar;
    use NoFactoryClasses\Icar;
    require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

    class Nofactory {
        public function __construct(){
            $this->name = "bmw";
        }

        public function create():Icar{
            switch(strtolower($this->name)){
                case "kia":
                    return new Kia();
                    break;
                case "bmw":
                    return new Bmw();
                    break;
                case "fait":
                    return new Fait();
                    break;
                default:
                return new NullCar();

            }   
        }
    }


$obj = new Nofactory();
$obj->create()->move();