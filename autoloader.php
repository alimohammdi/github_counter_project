<?php 

 

class Autoloader {
    
        public static function  loadclass($classname){
                $path = __DIR__.DIRECTORY_SEPARATOR.$classname.'.php';

                if (isset($path)){
                       include_once $path ;  
                }
        }


        public static function register(){
                spl_autoload_register([
                        'Autoloader',
                        'loadclass'
                ]);
        }


}

Autoloader::register();
































?>