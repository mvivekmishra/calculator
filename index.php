<?php

require_once 'calculator.php';
require_once 'operatorinterface.php';
require_once 'adder.php';
require_once 'multiply.php';
require_once 'divide.php';
require_once 'subtract.php';

$c=new calculator();
$c->setOperation(new adder);
$c->calculate(10,50);
$c->setOperation(new subtract);
$c->calculate(25);
$c->setOperation(new multiply);
$c->calculate(2);
$c->setOperation(new divide);
$c->calculate(10);

echo $c->getResult();
?>

