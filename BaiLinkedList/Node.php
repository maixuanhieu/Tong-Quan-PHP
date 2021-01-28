<?php
class Node
{
    public $index;
    public $next;
    public $value;

    function __construct($index)
    {
        $this->index = $index;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->index;
    }
}