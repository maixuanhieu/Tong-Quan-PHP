<?php
class DoublyNode 
{
    public $data;
    public $previous;
    public $next;
    
    public function __construct($data = NULL)
    {
        $this->data = $data;
        $this->previous = NULL;
        $this->next = NULL;
    }


}