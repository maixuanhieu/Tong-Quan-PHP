<?php
include ('stack.php');

$myStack = new Stack ();
$myStack->push("1"); 
$myStack->push("2"); 
$myStack->push("3"); 
$myStack->push("4"); 

$myStack->pop("4");
$myStack->pop("3");
$myStack->pop("2");
$myStack->pop("1");
echo $myStack;