<?php
include_once('stack.php');
include_once('queue.php');
$str = ('how are ouo era woh');

$stack = new Stack;
$queue = new Queue;

for($i=0;$i < strlen($str);$i++){
    $queue->enqueue($str[$i]);
    $stack->push($str[$i]);
}

// echo print_r($stack);
// echo print_r($queue);

while (!$stack->isEmpty()) {
    if ($stack->pop() != $queue->dequeue()) {
        die("Chuoi khong doi xung");
    }
}
die ("Chuoi doi xung");




