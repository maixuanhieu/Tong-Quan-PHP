<?php

class DivideByZeroException extends Exception{
    public function __toString()
    {
        return "Can't divide by zero";
    }

    function divide($numerator, $denominator)
    {
        if ($denominator === 0){
            throw new DivideByZeroException();
        }
        return $numerator / $denominator;
    }
}


