<?php

function validateClass($class)
{
        $regexp = '/^[A,C,P]+[0-9]{4}[G, H, I, K, L, M]+$/';
    if (preg_match($regexp, $class)) {
        echo("Valid Class");
    } else {
        echo("Invalid Class");
    }
}

validateClass('C0318G');
validateClass('M0318G');
validateClass('P0323A');