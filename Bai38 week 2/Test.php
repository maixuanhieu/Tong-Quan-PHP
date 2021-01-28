<?php
include "PatientQueue.php";

$q = new PatientQueue();
$q->enqueue("Smith", 5);
$q->enqueue("Jones", 4);
$q->enqueue("Fehrenbach", 6);
$q->enqueue("Brown", 1);
$q->enqueue("Ingram", 1);
echo $q;
echo $q->dequeue();
echo $q;
echo $q->dequeue();
echo $q->dequeue();
echo $q->dequeue();
$q->printCuredList();