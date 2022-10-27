<?php

//namespace TheCodeholic\sub1\sub2\sub3;
namespace  ns1;

class User
{
    public function __construct(){
        echo "Global NsmeSpace";
    }

}

//function hello(){}
//
//const MY_CONST = 10;

function strlen($str){
    echo "ns1";
}

echo \strlen("abcd");