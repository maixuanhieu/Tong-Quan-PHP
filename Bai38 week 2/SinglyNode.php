<?php
class SinglyNode 
{
    public $data;
    public $next;
    
    public function __construct($data = NULL)
    {
        $this->data = $data;
        $this->next = NULL;
    }


}