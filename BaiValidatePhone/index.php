<?php

function validatePhone($phone)
{
      $regexp = "/^\([0-9]{2}\)[-]\([0][0-9]{9}\)$/";
    if (preg_match($regexp, $phone)) {
        echo("Valid Phone");
    } else {
        echo("Invalid Phone");
    }
}

validatePhone('(84)-(0978489648)');
validatePhone('(a8)-(22222222)');