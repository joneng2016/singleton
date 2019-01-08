<?php

namespace App;

class FabricaDeCarro
{
    private static $instance;
    private static $nome = 'Uno';
    private static $ano = '1997';
    private function __construct()
    {
    
    }
    public static function getInstance()
    {
        if(!isset(self::$instance))
            self::$instance = new FabricaDeCarro;

       return self::$instance; 
    }
    public static function getAno()
    {
        return self::$ano;
    }
}
