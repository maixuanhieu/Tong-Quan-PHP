<?php
include_once('Queue.php');
include_once('LinkedList/SinglyLinkedList.php');

class patient
{
    public $name;
    public $code;

    public function __construct($name,$code)
    {
       $this->name = $name;
       $this->code = $code;
    }

    public function __toString()
    {
        return $this->name . '' . $this->code;
    }

    public function enqueue($name,$code)
    {
        return $this->list->append($name,$code);
    }

    public function dequeue($name,$code)
    {
        return $this->list->prepend($name,$code);
    }

}