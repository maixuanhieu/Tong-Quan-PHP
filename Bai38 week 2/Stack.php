<?php
include_once('Abstractclass.php');
include_once('./LinkedList/SinglyLinkedList.php');

class Stack extends AbstractStack{
    protected $list;
    protected $limit;
    
    public function __construct($limit = 10)
    {
        $this->list = new SinglyLinkedList();
        $this->limit = $limit;
    }

    public function push($value)
    {
        return $this->list->prepend($value);
    }

    public function isEmpty()
    {
        return $this->list->isEmpty();
    }

    public function pop()
    {
        return $this->list->popFirst();
    }

    public function top(){
        return $this->list->head();
    }

}
