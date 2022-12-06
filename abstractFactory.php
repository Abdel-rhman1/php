<?php 
    use AbstractFactory\carFactory;
    require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


    $carObj = new carFactory();

    $carObj->create('Hondi')->move();