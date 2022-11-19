<?php 
    namespace App;
    use Structural\Singlton;
    class Config extends Singlton{
        private $hashmap = [];

        public function getValue(string $key): string
        {
            return $this->hashmap[$key];
        }
    
        public function setValue(string $key, string $value): void
        {
            $this->hashmap[$key] = $value;
        }
    }