<?php 
      namespace SimpleFactory;

      use SimpleFactory\Icar;
  
      class Fait implements Icar{
          public $name = 'Fait';
          public function __construct(){
              
          }
          public function move(){
              echo "Fait is Moving";
          }
      }