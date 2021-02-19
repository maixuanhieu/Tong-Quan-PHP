<?php
function checkBrackets($str)
{
    $stack = new SplStack();
    for($i = 0; $i < strlen($str); $i++){
        switch ($str[$i]){
            case '(':
                $stack->push(1);
                break;
            case ')':
                if($stack->isEmpty()){
                    return false;
                } else {
                    if ($stack->pop() != 1){
                        return false;
                    }
                }
                break;
        }
    }
    return $stack->isEmpty();
}

$str1 = 's * (s – a) * (s – b) * (s – c)';
$str2 = '(– b + (b2 – 4*a*c)^0.5) / 2*a ';
$str3 = 's * (s – a) * (s – b * (s – c)';
$str4 = 's * (s – a) * s – b) * (s – c)';
$str5 = '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))';

echo "<pre>";
var_dump(checkBrackets($str1));
var_dump(checkBrackets($str2));
var_dump(checkBrackets($str3));
var_dump(checkBrackets($str4));
var_dump(checkBrackets($str5));