<?php
include "CircleComparator.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator($circleOne, $circleTwo);
var_dump($circleComparator->compare($circleOne, $circleTwo));