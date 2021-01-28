<?php
include "LinkedList/SinglyLinkedList.php";
include "AbstractQueue.php";

class Queue extends AbstractQueue{
    protected $list;
    public function __construct()
    {
        $this->list = new SinglyLinkedList();
    }

    public function init(){
        while ($this->list->head() != NULL)
        {
            $this->list->pop();
        }
    }

    public function isEmpty(){
        return $this->list->isEmpty();
    }
    
    public function enqueue($value){
        $this->list->append($value);
    }

    public function dequeue(){
        if ($this->isEmpty()) throw new RuntimeException("Queue is empty");

        $value = $this->list->head()->data;
        $this->list->popFirst();
        
        return $value;
    }
}