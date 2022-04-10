<?php

require_once "vendor/autoload.php";

$oCurrency1 = new Hillel\Currency('USD');

$ocurrency2 = new Hillel\Currency('USD');

if($oCurrency1->equals($ocurrency2)){
    
    $money = new Hillel\Money(100, $oCurrency1);
    $money2 = new Hillel\Money(300.4, $oCurrency1);
    
    $result = $money->add($money2);
    
    echo $result->getAmount();

}





