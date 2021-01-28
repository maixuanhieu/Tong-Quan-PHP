<?php
include_once('Node.php');

class linkedlist
{
    public $count = 0;
    public $firstNode;
    public $lastNode;
    private $head;
    private $tail;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }

    public function addFirst($value)
    {
        $newNode = new Node($value);

        if (!$this->isEmpty()) {
            $this->head->previous = $newNode;
            $newNode->next = $this->head;
        } else {
            $this->head = $newNode;
        }
    }

    public function addLast($value)
    {
        $newNode = new Node($value);

        if (!$this->isEmpty()) {
            $this->tail->next = $newNode;
            $newNode->previous = $this->tail;
        } else {
            $this->tail = $newNode;
        }
    }

    public function isEmpty()
    {
        return ($this->head == NULL);
    }
}
