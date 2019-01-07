<?php

namespace App;

class FabricaDeCarro
{
    private static $instance;
    private function __construct()
    {
    
    }
    public static function getInstance()
    {
        if(!isset(self::$instance))
            self::$instance = new FabricaDeCarro;
        
       return self::$instance; 
    }
}
