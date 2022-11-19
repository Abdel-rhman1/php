<?php 
    namespace App;
    use Structural\Singlton;
    class Logger extends Singlton{

        private $fileHandle;
        
        protected function __construct(){
            $this->fileHandle = fopen('/opt/lampp/htdocs/Advanced/Design_Patterns/logs/log.txt', 'w');

        }

        public function writeLog(string $message): void
        {
            $date = date('Y-m-d');
            fwrite($this->fileHandle, "$date: $message\n");
        }


        public static function Log(string $message):void{
            $logger = static::createIntestance();
            $logger->writeLog($message);
        }
    }