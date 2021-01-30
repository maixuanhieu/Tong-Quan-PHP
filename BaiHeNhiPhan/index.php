<?php
include_once("stack.php");

function decimalToBinary($number)
{
    $stack = new Stack(100);
    while ($number !=0) {
        $stack->push ($number %2);
        $number = floor($number/2);
    }

    while (!($stack->isEmpty())){
        echo $stack->pop() . '';
    }
}

$number = 10;

echo "Binary of $number is: [" ;
decimalToBinary($number);
echo "]";