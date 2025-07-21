<?php 
require_once 'tigger.php';
$tigger=Tigger::getInstance();
$tigger->roar();
$tigger->roar();
$tigger->roar();


echo"Rugidos: " .$tigger->getCounter().PHP_EOL;
?>