<?php

require_once 'Penguin.php';
require_once 'Bird.php';
require_once 'Duck.php';

$bird = new Bird();
$bird->fly();
echo '<br>';
$penguin = new Penguin();
$penguin->swim();
echo '<br>';
$duck = new Duck();
$duck->fly();
$duck->swim();
echo '<br>';

var_dump(canFly($bird));
var_dump(canFly($penguin));
var_dump(canFly($duck));

function canFly($object){
    if ($object instanceof FlyableInterface){
        return true;
    }
    return false;
}