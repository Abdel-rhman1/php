<?php 
    use Structural\Singlton;
    use App\Config;
    use App\Logger;
    
    require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
    Logger::log("Started!");


    $sing1 = Singlton::createIntestance();
    
    $sing2 = Singlton::createIntestance();

    if ($sing1 === $sing1) {
        Logger::log("Logger has a single instance.");
    } else {
        Logger::log("Loggers are different.");
    }

    $config1 = Config::createIntestance();
    $login = "test_login";
    $password = "test_password";
    $config1->setValue("login", $login);
    $config1->setValue("password", $password);

    $config2 = Config::createIntestance();

    if($login == $config2->getValue("login") &&
        $password == $config2->getValue("password")
    ){  
        Logger::log("Config singleton also works fine.");
    }else{
        Logger::log("Config singleton has an Error.");
        
    }

    Logger::log("Finished!");
