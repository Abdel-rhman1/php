<?php 
      namespace SimpleFactory;

      use SimpleFactory\Icar;
  
      class Hondi implements Icar{
          public $name = 'Hondi';
          public function __construct(){
              
          }
          public function move(){
              echo "Hondi is Moving";
          }
      }