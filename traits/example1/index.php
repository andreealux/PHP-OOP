<?php

require_once "Barton.php";
require_once "Hulk.php";
require_once  "IronMan.php";
require_once "Cap.php";
require_once "Thor.php";

echo 'barton';
$barton = new Barton();
$barton->liftTheHammer();

echo 'hulk';
$hulk = new Hulk();
$hulk->liftTheHammer();

echo "iron man";
$ironMan = new IronMan();
$ironMan->liftTheHammer();

echo "cap";
$cap = new Cap();
$cap->liftTheHammer();

echo "thor";
$thor = new Thor();
$thor->liftTheHammer();
