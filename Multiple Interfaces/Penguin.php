<?php

require_once 'SwimmableInterface.php';

class Penguin implements SwimmableInterface
{

    public function swim()
    {
        echo "I am Penguin. I can swim" . PHP_EOL;
    }
}