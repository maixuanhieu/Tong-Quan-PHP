<?php

function validateAcc($acc)
{
    $regexp = '/^[_a-z0-9]{6,}$/';
    if(preg_match($regexp,$acc)){
        echo("Valid Account");
    } else {
        echo("This Account is Invalid");
    }
}

validateAcc('123abc_');
validateAcc('_abc123');
validateAcc('______');
validateAcc('123456');
validateAcc('abcdefg');

validateAcc('@');
validateAcc('12345');
validateAcc('1234_');
validateAcc('abcde');


