<?php 
    namespace Structural;
    class Singlton {
        
        private static $instances = [];
        // private $subclass;
        private function __construct(){
            echo "<p>new Instance Was Created</p>";
        }

        public static function createIntestance():Singlton{
            $subclass = static::class;
            if (!isset(self::$instances[$subclass])) {
                self::$instances[$subclass] = new static();
            }
            return self::$instances[$subclass];
        }
    }