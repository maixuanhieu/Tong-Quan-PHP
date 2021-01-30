<?php
include_once("DanceFloor.php");

$danceFloor = new DanceFloor();

$danceFloor->addDancer('Stark', 'male');
$danceFloor->addDancer('Challa', 'male');
$danceFloor->addDancer('Steve', 'male');
$danceFloor->addDancer('Thor', 'male');
$danceFloor->addDancer("Natasha","female");
$danceFloor->addDancer("Wanda","female");
$danceFloor->addDancer("Mary","female");
$danceFloor->addDancer("Peggy","female");
$danceFloor->addDancer("Jane","female");
$danceFloor->addDancer("Darcy","female");

$danceFloor->divineIntoGroups();

echo $danceFloor->pair();