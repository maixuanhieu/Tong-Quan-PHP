<?php
abstract class AbstractQueue
{
    abstract public function init();

    abstract public function isEmpty();
    
    abstract public function enqueue($value);

    abstract public function dequeue();
}