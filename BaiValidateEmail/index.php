<?php

function validateEmail($email)
{
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp,$email)){
        echo("Email is Correct!");
    } else {
        echo("Email is Incorrect");
    }
}

validateEmail('a@gmail.com');
validateEmail('ab@yahoo.com');
validateEmail('abc@hotmail.com');

validateEmail('@gmail.com');
validateEmail('ab@gmail.com');
validateEmail('@#abc@gmail.com');

