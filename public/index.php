<?php

require_once "../vendor/autoload.php";

use App\FabricaDeCarro;

$fabricaDeCarro = FabricaDeCarro::getInstance(); 
var_dump($fabricaDeCarro->getAno());

