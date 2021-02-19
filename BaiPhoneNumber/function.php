<?php

function classifyNetwork($arrayToCheck, $mobileNetwork)
{
    $arr = [];
    foreach ($arrayToCheck as $item) {
        $head = substr($item, 0, 3);
        foreach ($mobileNetwork as $headNumber) {
            if ($head == $headNumber) {
                array_push($arr, $item);
            }
        }
    }
    return $arr;
}

function showPhoneNumber($arr)
{
    foreach ($arr as $item) {
        echo "$item &ensp;";
    }
}