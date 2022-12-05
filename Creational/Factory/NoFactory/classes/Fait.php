<?php 
      namespace NoFactoryClasses;

      use NoFactoryClasses\Icar;
  
      class Fait implements Icar{
          public $name = 'Fait';
          public function __construct(){
              
          }
          public function move(){
              echo "Fait is Moving";
          }
      }